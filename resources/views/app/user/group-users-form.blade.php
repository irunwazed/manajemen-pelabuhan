@extends('layouts.admin')
@section('title', 'Management User')
@section('content')
    <style>
        .items:hover{
            background: green;
            color: white;
        }
        input[type='checkbox'] {
            cursor: pointer;
        }

    </style>
    <div class="">
        <div class="text-2xl ">Management User / Users</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-20">Form Group Akses</div>
        <form id="form-group-user" action="{{url('admin/management-user/submit-group-user')}}" method="post" class="pt-16">
            <div class="flex flex-col items-center justify-start">
                <div class="text-start w-8/12 mb-5">
                    <div>
                        <label for="nama" class="text-md font-medium text-gray-700">Nama Akses</label>
                    </div>
                    <div>
                        <input value="{{ $data->nama_groups ?? '' }}" type="text" id="nama" name="nama" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <input type="hidden" name="id_user_groups" value="{{ $data->id_user_groups ?? 'noid' }}">
                    </div>
                    <div class="mt-10">
                        <label class="text-md font-medium text-gray-700">Detail Menu</label>
                    </div>
                    <div>
                        <div class="menu pl-10">
                        @foreach ($menus as $index => $menuItem)
                            @if ($menuItem['parent'] === 0)
                                <div>
                                    <div class="flex flex-row items">
                                        <div style="width: 90%">
                                            {{ ($index+1) .' '. $menuItem['display'] }}
                                        </div>
                                        <div>
                                            <input type="checkbox" 
                                                name="selected_menus[]" 
                                                value="{{ $menuItem['id_menu'] }}"
                                                @if ($dataGroupUser instanceof \Illuminate\Support\Collection && $dataGroupUser->pluck('id_menu')->contains($menuItem['id_menu']))
                                                    checked
                                                @endif
                                            >
                                        </div>
                                    </div>
                                    {!! renderSubMenu($menus, $menuItem['id_menu'], $dataGroupUser) !!}
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="flex justify-center">
                <button type="submit" class=" text-white float-left bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-10 py-2.5 mb-2 focus:outline-none">Simpan</button>
                <a href="{{ url('admin/management-user/group-user') }}" class="text-white float-left bg-black hover:bg-black-800 font-medium rounded-lg text-sm px-10 py-2.5 mb-2 focus:outline-none ml-2">Kembali</a>
            </div>
        </form>
    </div>

    @php
    function renderSubMenu($subMenuItems, $parentId, $userGroupMenus) {
        $result = '';
        foreach ($subMenuItems as $subMenuItem) {
            if ($subMenuItem['parent'] === $parentId) {
                $result .= '<div class="flex flex-row items"><div style="width: 90%" class="menu pl-10">';
                $result .= $subMenuItem['display'];
                $result .= '</div><div><input type="checkbox" name="selected_menus[]" value="'.$subMenuItem['id_menu'].'"';

                if (is_array($userGroupMenus) && in_array($subMenuItem['id_menu'], $userGroupMenus)) {
                    $result .= ' checked';
                } elseif ($userGroupMenus instanceof \Illuminate\Support\Collection && $userGroupMenus->pluck('id_menu')->contains($subMenuItem['id_menu'])) {
                    // Check if $userGroupMenus is a collection
                    $result .= ' checked';
                }

                $result .= '></div>';
                $result .= renderSubMenu($subMenuItems, $subMenuItem['id_menu'], $userGroupMenus);
                $result .= '</div>';
            }
        }
        return $result;
    }
    @endphp
@endsection

@section('script')
<script>

</script>
@endsection
