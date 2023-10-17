<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - @yield('title')</title>
  @vite('resources/css/app.css')
</head>

<body class="bg-cyan-50">
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
              <input class="bg-gray-200 rounded-2xl py-2 px-3 w-full pl-10" name="search" type="text">
              <button type="submit" class="absolute right-0 py-2 px-8 bg-black text-white rounded-xl">Search</button>
            </form>
          </div>
        </div>
      </div>
      <div class="flex-1">
        <div class="flex flex-wrap float-right mr-6 bg-white rounded-lg shadow-xl py-1 px-12 hover:opacity-80">
          <div>
            <img class="w-7 h-7 rounded-full bg-yellow-700" src="{{URL::asset('assets/img/avatar.png')}}" alt="">
          </div>
          <div class="ml-3">
            Labverse
          </div>
        </div>
      </div>
    </div>

    <div class="mx-16 mt-5 lg:mx-24">

      <ul class="menu flex">
        <li>
          <a class="py-2 px-4 mx-2 text-gray-500 flex relative active" href="{{ URL::to('/admin/pelayanan-kapal'); }}">
            <span class="mr-0">Pelayanan Kapal</span>
            <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
          </a>
        </li>
        <li>
          <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="{{ URL::to('/admin/pelayanan-bongkar-muat'); }}">
            <span class="mr-0">Pelayanan Bongkar Muat</span>
            <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
          </a>
        </li>
        <li>
          <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="{{ URL::to('/admin/penyewaan-alat'); }}">
            <span class="mr-0">Penyewaan Alat dan Aneka Usaha</span>
            <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
          </a>
        </li>
        <li>
          <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="{{ URL::to('/admin/eksport-import'); }}">
            <span class="mr-0">Eksport-Import</span>
            <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
          </a>
        </li>
        <li>
          <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="{{ URL::to('/admin/pelayanan-bongkar-muat'); }}">
            <span class="mr-0">Warehoushing & Inventory</span>
            <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
          </a>
        </li>
        <li>
          <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="{{ URL::to('/admin/pelayanan-bongkar-muat'); }}">
            <span class="mr-0">Keuangan</span>
            <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
          </a>
        </li>
      </ul>

      <div class="mt-6 px-6 md:px-2">
        @yield('content')
      </div>
    </div>

    <div class="h-48"></div>

    <button class="group fixed bottom-44 right-44">
      <div class="menu-bot group-focus:opacity-100 group-focus:-translate-x-[900px] duration-700">
        <a href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
        <a href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
        <a href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
        <a href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
        <a href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
        <a href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
    </button>

    <div class="fixed left-10 bottom-10">
      <a href="#" onclick="history.back()">
        <embed width="50" src="{{URL::asset('assets/svg/arrow-back.svg')}}" />
        <div class="text-center relative -top-3 font-semibold text-lg">Back</div>
      </a>
    </div>

  </div>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    let path = window.location.href;
    $(document).ready(function() {
      $('a[href^="' + path + '"]').addClass("active")
    });
  </script>

  @yield('script')

</body>

</html>
