@extends('layouts.admin')
@section('title', 'Management User')
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
        <div class="text-2xl ">Management User / Users</div>
        <hr class="border-b-2 border-black border-solid">
        <div class="font-bold text-2xl text-center pt-20">Form Tambah User</div>
        <form id="form-user" action="{{url('admin/management-user/user/filter')}}" method="post" class="pt-16">
            <div class="flex flex-col items-center justify-start">
                <div class="text-start w-4/12 mb-5">
                    <div>
                        <label for="nama" class="text-sm font-medium text-gray-700">Nama</label>
                    </div>
                    <div>
                        <input value="{{ $data->name ?? '' }}" type="text" id="nama" name="nama" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
                <div class="text-start w-4/12 mb-5">
                    <div>
                        <label for="username" class="text-sm font-medium text-gray-700">Username</label>
                    </div>
                    <div>
                        <input type="text" value="{{ $data->username ?? '' }}" id="username" name="username" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
                <div class="text-start w-4/12 mb-5">
                    <div>
                        <label for="level" class="text-sm font-medium text-gray-700">Level Akses</label>
                    </div>
                    <div>
                        <select required id="level" name="level" name="perusahaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="-">--Select--</option>
                            @foreach($usersGroups as $usersGroup)
                                <option value="{{ $usersGroup->id_user_groups }}" @if(is_object($data) && $data->level == $usersGroup->id_user_groups) selected @endif>{{ $usersGroup->nama_groups }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-start w-4/12 mb-5">
                    <div>
                        <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
                <div class="text-start w-4/12 mb-5">
                    <div>
                        <label for="retypedPassword" class="text-sm font-medium text-gray-700">Retytpe Password</label>
                    </div>
                    <div>
                        <input type="password" id="retypedPassword" name="retypedPassword" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
            </div>
        </form>
        <div class="flex justify-center">
            <a href="javascript:void(0)" class="tambah-user text-white float-left bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-10 py-2.5 mb-2 focus:outline-none">Simpan</a>
            <a href="{{ url('admin/management-user/user') }}" class="text-white float-left bg-black hover:bg-black-800 font-medium rounded-lg text-sm px-10 py-2.5 mb-2 focus:outline-none ml-2">Kembali</a>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).on('click', '.tambah-user', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var errorCount = 0;

        var nama = $('#nama').val();
        if (!nama) {
            displayErrorMessage('Nama is required.', 'nama');
            errorCount++;
        }

        var username = $('#username').val();
        if (!username) {
            displayErrorMessage('Username is required.', 'username');
            errorCount++;
        }

        var level = $('#level').val();
        if (level === '-') {
            displayErrorMessage('Level is required.', 'level');
            errorCount++;
        }

        var password = $('#password').val();
        if (!password) {
            displayErrorMessage('Password is required.', 'password');
            errorCount++;
        }

        var retypedPassword = $('#retypedPassword').val();
        if (!retypedPassword) {
            displayErrorMessage('RetypedPassword is required.', 'retypedPassword');
            errorCount++;
        }

        if (password !== retypedPassword) {
            displayErrorMessage('Password and Retype Password must match.', 'password');
            errorCount++;
        }

        if(errorCount >= 1){
            return;
        }
        
        var formData = $("#form-user").serializeArray();
        var url      = '{{ url("admin/management-user/submit-user/") }}' + '/{{ $data->id ?? 'noid' }}';
        
        $(this).prop("disabled", true);

        $.ajax({
            type: 'POST',
            url: url, 
            data: formData,
            success: function (response) {
                window.location.href = "{{ url('admin/management-user/user') }}";
            },
            error: function (error) {
                $('.msg-api').html('<p class="text-red-500">Error submitting the form</p>').show();
                setTimeout(function(){
                    $('.msg-api').fadeOut();
                },1200);
            }
        });
    });

    function displayErrorMessage(message, elementId) {
        $('#' + elementId).parent().find(".error-message").remove();
        var errorDiv = $('<div>').addClass('error-message text-red-500 text-sm').text(message);
        $('#' + elementId).after(errorDiv);
    }

    $('input, select').focus(function () {
        var fieldId = $(this).attr('id');
        $('#' + fieldId).parent().find(".error-message").remove();
    });
</script>
@endsection
