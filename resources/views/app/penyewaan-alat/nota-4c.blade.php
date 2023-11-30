@extends('layouts.admin')
@section('title', 'Penyewaan Alat')
@section('content')
    <style>
        .pagination > .disabled{
            margin-left: 10px;
            margin-right: 10px;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 10px 15px;
            margin: 0 5px;
            text-decoration: none;
            color: #fff;
            background: linear-gradient(45deg, #3498db, #3498db);
            border: 1px solid #3498db;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s, transform 0.3s;
            box-shadow: 0 2px 5px rgba(52, 152, 219, 0.2);
        }

        .pagination a:hover {
            background: linear-gradient(45deg, #2980b9, #2980b9);
            color: #fff;
            transform: scale(1.05);
        }

    </style>
    <div class="">
        <div class="text-2xl ">Penyewaan Alat / Nota 4C</div>
        <hr class="border-b-2 border-black border-solid">
        <form id="form-4c" action="{{url('admin/penyewaan-alat/form-4c/filter')}}" method="get">
            <div class="grid grid-cols-4 gap-2 pt-16">
                <div class="text-start w-full">
                    <div>
                        <label>No Form 1C</label>
                    </div>
                    <div>
                        <input type="text" value="{{$noPermohonan1C}}" name="no_permohonan_1c" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>No Form 2C</label>
                    </div>
                    <div>
                        <input type="text" value="{{$noForm2C}}" name="no_form_2c" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start w-full">
                    <div>
                        <label>No Nota 3C</label>
                    </div>
                    <div>
                        <input type="text" value="{{$noForm3C}}" name="no_form_3c" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="text-start">
                    <div>
                        <button class="text-white mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        <button class="text-white mt-6 bg-red-600 hover:bg-blue-800 focus:ring-4 focus:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 focus:outline-none dark:focus:bg-red-600" type="reset" onclick="resetForm()" >Reset</button>   
                    </div>
                </div>
            </div>
        </form>


        <div class="text-center mb-3 mt-5">
            <div>
                <table class="mt-5 w-full border-solid border-2 border-slate-800">
                    <thead class=" bg-gradient-to-r from-primary-awal to-primary text-white py-5">
                    <tr>
                        <th class="py-5 px-3">No</th>
                        <th>No Form 1C</th>
                        <th>No Form 2C</th>
                        <th>No Nota 3C</th>
                        <th>No Nota 4C</th>
                        <th>Perusahaan</th>
                        <th>Nama Kapal</th>
                        <th class="px-3">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $index => $item)
                            <tr class="text-center border-solid border-2 border-slate-800 hover:bg-slate-300">
                                <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}</td>
                                <td>{{ $item->noform_1c }}</td>
                                <td>{{ $item->noform_2c }}</td>
                                <td>{{ $item->nonota3c }}</td>
                                <td>{{ $item->nonota4c }}</td>
                                <td>{{ $item->nama_perusahaan }}</td>
                                <td>{{ $item->nama_kapal }}</td>
                                <td class="py-2 flex flex-wrap gap-1 justify-center">
                                    <a href="{{url('admin/penyewaan-alat/create-nota-4c').'/'.$item->pbau_alat_1c_id }}" class="focus:outline-none text-white bg-blue-800 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-blue-900" @if(empty($item->noform_2c) || empty($item->noform_1c) || empty($item->nonota3c))
                                        disabled="disabled" 
                                        onclick="return false;"
                                    @endif>Create Nota 4C</a>
                                </td>
                            </tr>
                        @endforeach
                        @if(count($data) === 0)
                            <tr class="border-solid border-2 border-slate-800 hover:bg-slate-300 text-center">
                                <td colspan="8">No Data Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="mt-5 pagination">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    function resetForm() {
        var noPermohonanElements = document.getElementsByName('no_permohonan_1c');
        var noForm2c = document.getElementsByName('no_form_2c');
        var noForm3c = document.getElementsByName('no_form_3c');

        if (noPermohonanElements.length > 0 || noForm2c.length > 0 || noForm3c.length > 0){
            noPermohonanElements[0].value = '';
            noForm3c[0].value = '';
            noForm2c[0].value = '';
            document.getElementById('form-4c').submit();
        }
    }
</script>
@endsection
