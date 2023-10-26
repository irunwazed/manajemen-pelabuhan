<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

<script>
  tailwind.config = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
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
</head>

<body class="bg-slate-100">
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

    <ul class="menu flex">
      <li>
        <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="{{ URL::to('/admin/pelayanan-kapal'); }}">
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
    </ul>
  </div>

  <div>
    
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    const menu = '{{ @$_GET["m"] }}'
    $(document).ready(function() {
      // $('#'+menu).addClass("active")
      let data = $("div").data("menu", menu)
      console.log(data, menu)
    });
  </script>

</body>

</html>