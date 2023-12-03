
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
<!--  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  -->
<link href="{{asset('css/tailwind.css') }}" rel="stylesheet" type="text/css" />
 <!-- <script> 
    
    tailwind.config = {
      content: [
        "../../../**/**/**/*.blade.php",
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
  </script> -->
  
</head>

<body class="w-full h-full bg-no-repeat bg-cover bg-center" style="background-image :url('{{URL::asset("assets/img/bg_admin_blade.jpg")}}')">
  <div >
    <div class="w-full flex mt-6">
        <!--<div class="flex-1 ml-6">
      <a href="#" class="underline italic hover: text-info">Privasi Polisi</a> 
      </div>
      <div class="shrink-0">
        <h3>Dashboard Simulator Manajemen Pelabuhan</h3>
      </div>-->
      <div class="flex-1">
        <div class="flex flex-wrap float-right mr-6 bg-white rounded-lg shadow-lg py-1 px-12">
          <div>
            <img class="w-7 h-7 rounded-full bg-yellow-700" src="{{URL::asset('assets/img/avatar.png')}}" alt="">
          </div>
          <div class="ml-3">
            Labverse
          </div>
        </div>
      </div>
    </div>
    <div class="pt-4 px-5 grid grid-cols-1 gap-4 place-content-center">
      <h1 class="text-center font-bold text-4xl mb-3">Selamat Datang!</h1>
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
            <input class="bg-slate-400 rounded-2xl py-2 px-3 w-full pl-10" type="text">
            <button type="submit" class="absolute right-0 py-2 px-8 bg-black text-white rounded-xl">Search</button>
          </form>
        </div>
      </div>

      <div class="flex">
        <div class=" md:w-1/12"></div>
        <div class=" w-full flex flex-wrap gap-4 place-content-center mt-4 md:w-10/12">
          @foreach(@session()->get("menu") as $navigation)         
            <a href="{{ url('/').'/'.session()->get("usergroup").''.$navigation->slug }}">
              <div class="max-w-[200px] min-h-[290px] bg-white text-primary p-6 rounded-lg shadow-xl hover:bg-primary hover:text-white hover:scale-105  transition-all">
                <center>
                  {!! $navigation->svg_menu !!}
              
                </center>
                <br>
                <div class="mt-6 font-semibold text-center">{{ $navigation->display }}</div>
              </div>
            </a>
         
          @endforeach

        </div>
        <div></div>
      </div>



      <div class="flex flex-wrap gap-4 place-content-center mt-4"></div>

    </div>
  </div>

</body>

</html>