<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - @yield('title')</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <script>
    tailwind.config = {
      content: [],
      theme: {
        extend: {
          colors: {
            'primary-awal': '#211c5c',
            primary: '#1d184f',
            warning: '#E65F2B',
            info: '#06b6d4',
            secondary: '#64748b',
            dark: '#060606',
            default: '#EBDFD7',
          },
        },
      },
      plugins: [],
    }
  </script>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
  <style>
    body {
      font-family: "Montserrat", sans-serif;
    }

    .table {
      font-size: 13px;
      border: 1px solid #CCCCCC;
    }

    .table>thead>tr>th {
      padding-left: 10px;
      padding-right: 10px;
      font-size: 15px;
      padding: 20px;
    }

    .table>tbody>tr>td {
      padding: 20px;
      padding-left: 10px;
      padding-right: 10px;
      padding: 1em;
    }
  </style>

</head>

<body class="bg-white">
  <div class="">
    <div class="w-full flex mt-6">
      <div class="flex-1 ml-6">
      </div>
      <div class="shrink-0">
        <div class="flex place-content-center">
          <div class="relative w-[600px]">
            <form action="">
              <svg class="absolute left-3 py-2" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <rect x="0" fill="none" width="24" height="24"></rect>
                  <g>
                    <path d="M21 19l-5.154-5.154C16.574 12.742 17 11.42 17 10c0-3.866-3.134-7-7-7s-7 3.134-7 7 3.134 7 7 7c1.42 0 2.742-.426 3.846-1.154L19 21l2-2zM5 10c0-2.757 2.243-5 5-5s5 2.243 5 5-2.243 5-5 5-5-2.243-5-5z"></path>
                  </g>
                </g>
              </svg>
              <input class="bg-gray-200 rounded-full py-2 px-3 w-full pl-10" name="search" type="text">
              <button type="submit" class="absolute right-0 pt-2 pb-[9px] px-8 bg-black text-white rounded-xl">Search</button>
            </form>
          </div>
        </div>
      </div>
      <div class="flex-1">
        <div class="flex flex-wrap float-right mr-6 bg-white rounded-lg shadow-xl py-1 px-12 " data-dropdown-toggle="setting">
          <div>
            <img class="w-7 h-7 rounded-full bg-yellow-700" src="{{URL::asset('assets/img/avatar.png')}}" alt="">
          </div>
          <div class="ml-3">
            Labverse
          </div>
          <div id="setting" class="z-10 hidden font-normal  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
              <li>
                <a href="{{url('/')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keluar</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-16 mt-5 mb-16 lg:mx-24">
      @include('components/navbar')
      <div class="mt-6 px-6 md:px-2 overflow-x-scroll lg:overflow-auto">
        @yield('content')
      </div>
    </div>

    <!-- <div class="h-48"></div> -->

    <!-- <button class="group fixed bottom-44 right-44">
      <div class="menu-bot group-focus:opacity-100 group-focus:-translate-x-[900px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal') }}">
          <center class="mt-3">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </a>
      </div>
      <div class="menu-bot group-focus:opacity-100 group-focus:-translate-x-[750px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal') }}">
          <center class="mt-3">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </a>
      </div>
      <div class="menu-bot group-focus:opacity-100 group-focus:-translate-x-[600px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal') }}">
          <center class="mt-3">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </a>
      </div>
      <div class="menu-bot group-focus:opacity-100 group-focus:-translate-x-[450px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal') }}">
          <center class="mt-3">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </a>
      </div>
      <div class="menu-bot group-focus:opacity-100 group-focus:-translate-x-[300px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal') }}">
          <center class="mt-3">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </a>
      </div>
      <div class=" menu-bot group-focus:opacity-100 group-focus:-translate-x-[150px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal') }}">
          <center class="mt-3">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </a>
      </div>
      <div class="absolute bg-cyan-800 text-cyan-200 w-40 h-40 text-center rounded-full opacity-60  group-focus:opacity-100 ">
        <span class="inline-block align-middle">
          <center class="mt-7">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70" viewBox="0 0 307.000000 407.000000" preserveAspectRatio="xMidYMid meet">
              <g transform="translate(0.000000,407.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M1190 4019 c-188 -38 -338 -237 -290 -385 29 -87 261 -271 470 -372
122 -58 175 -65 230 -28 49 33 80 80 80 124 0 48 -36 208 -70 308 -33 98 -86
199 -135 259 -64 78 -178 116 -285 94z" />
                <path d="M1190 2905 l0 -145 410 0 410 0 0 145 0 145 -410 0 -410 0 0 -145z" />
                <path d="M685 2605 c-16 -7 -45 -27 -64 -42 -46 -39 -49 -70 -50 -426 l-1
-287 38 16 c20 9 118 49 217 89 301 121 343 146 569 340 87 74 156 125 168
125 13 0 55 -33 107 -83 89 -85 171 -144 301 -215 76 -42 558 -262 573 -262 5
0 7 141 5 313 -3 350 -3 347 -81 411 l-39 31 -856 2 c-703 1 -862 -1 -887 -12z" />
                <path d="M1529 2324 c-52 -55 -174 -154 -274 -224 -185 -130 -420 -256 -795
-428 -384 -176 -372 -170 -365 -194 9 -28 170 -459 333 -888 65 -173 127 -339
136 -368 l18 -52 82 83 c134 136 308 242 497 302 237 74 535 75 763 0 228 -74
437 -220 566 -394 25 -33 47 -60 50 -61 5 0 473 1359 478 1389 2 14 -45 39
-225 121 -643 291 -904 443 -1144 668 l-86 81 -34 -35z" />
              </g>
            </svg>
          </center>
        </span>
      </div>
    </button> -->

    <div class="fixed left-10 bottom-10">
      <a href="#" onclick="history.back()">
        <embed width="50" src="{{URL::asset('assets/svg/arrow-back.svg')}}" />
        <div class="text-center relative -top-3 font-semibold text-lg">Back</div>
      </a>
    </div>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    let path = window.location.href;
    let pathname = window.location.pathname

    function inArray(needle, haystack) {
      var length = haystack.length;
      for (var i = 0; i < length; i++) {
        if (haystack[i] == needle) return true;
      }
      return false;
    }

    $(document).ready(function() {
      $('a[href^="' + path + '"]').addClass("active")
      // console.log(inArray("admin2",pathname.split("/")))
      // console.log(pathname.split("/"))
      let pathArr = pathname.split("/")
      $("#" + pathArr[2]).addClass("active")

    });

    
    function sendAjax(url, data, type = 'get', loading = null) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
      });
      return $.ajax({
        url: url,
        type: type,
        data: data,
        dataType: "JSON",
        beforeSend: function() {
          if (loading != null) setLoading(loading, true);
        },
        success: function(result) {
          console.log(result);
        },
        error: function(err) {
          if (err.responseJSON != undefined) {

            if (err.responseJSON.status) {
              pesanSweet('Peringatan!', err.responseJSON.pesan, 'warning');
            } else {
              pesanSweet('ERROR!', 'Terjadi masalah, silahkan hubungi admin.', 'error');
            }
          }
          console.log(err);
          // 
          // $('#my-error').html(err.responseText);
          // $("Terjadi error : ");
        },
        complete: function() {
          // setTimeout(function(){ if(loading!=null)setLoading(loading, false); }, 3000);
          if (loading != null) setLoading(loading, false);
        },
      });
    }

    function sendAjaxUpload(url, data, type = 'POST', loading = null) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
      });

      let btn = false;
      if (type == 'get') {
        btn = true;
      }

      return $.ajax({
        url: url,
        type: type,
        data: data,
        contentType: false,
        processData: false,
        beforeSend: function() {
          if (loading != null) setLoading(loading, true, '', btn);
        },
        success: function(result) {
          console.log(result);
        },
        error: function(err) {
          console.log(err);
          pesanSweet('ERROR!', 'Gagal Terhubung Pada Server.', 'error');
          // $("Terjadi error : ");
        },
        complete: function() {
          if (loading != null) setLoading(loading, false, '', btn);
        },
      });
    }

    function setLoading(name, status, style = '', btn = false) {
      // console.log(name);
      if (status) {
        // $(name).block({
        // 	message: '<div style="'+style+'"><h4><i class="spinner-border text-primary"></i>  Silahkan tunggu...</h4></div>',
        // 	overlayCSS: {
        // 			backgroundColor: '#FFF',
        // 			opacity: 0.9,
        // 			cursor: 'wait'
        // 	},
        // 	css: {
        // 			border: 0,
        // 			padding: 0,
        // 			backgroundColor: 'transparent'
        // 	}
        // });
        $(name).addClass('prevent-click');
        $(name).css("display", "none");
        $(name).before('<div class="loading-view" style=" ' + style +
          '"><h4><i class="spinner-border text-primary"></i>  Silahkan tunggu...</h4></div>');

        // tambahan
        if (btn) {
          $('#btn-form-data').hide();
        }
      } else {
        // $(name).unblock();
        $(name).removeClass('prevent-click');
        $(".loading-view").remove();
        $(name).css("display", "block");

        // tambahan
        if (btn) {
          $('#btn-form-data').show();
        }
      }
    }

    
	function pesanSweet(judul, isi, status = 'success') {
		// swalInit(
		// 	judul,
		// 	isi,
		// 	status,
		// ); 
		swal({
			icon: status,
			title: judul,
			text: isi,
			// footer: '<a href>Why do I have this issue?</a>'
		});
	}
  </script>

  @yield('script')

</body>

</html>