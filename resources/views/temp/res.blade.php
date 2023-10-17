<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body class="">


  <button class="group absolute bottom-44 right-44">
    <div class="menu-bot group-focus:-translate-x-[900px] duration-700">
      menu6
    </div>
    <div class="menu-bot group-focus:-translate-x-[750px] duration-700">
      menu5
    </div>
    <div class="menu-bot group-focus:-translate-x-[600px] duration-700">
      menu4
    </div>
    <div class="menu-bot group-focus:-translate-x-[450px] duration-700">
      menu3
    </div>
    <div class="menu-bot group-focus:-translate-x-[300px] duration-700">
      menu2
    </div>
    <div class=" menu-bot group-focus:-translate-x-[150px] duration-700">
      menu1
      <ul class="absolute -top-20 -left-20 bg-cyan-950 px-6 py-3  hidden">
        <li>
          menu 1.1
        </li>
        <li>
          menu 1.2
        </li>
        <li>
          menu 1.3
        </li>
      </ul>
    </div>
    <div class="absolute bg-green-800 text-cyan-200 w-40 h-40 text-center rounded-full group-focus:bg-green-700 " >
      menu
    </div>
  </button>


</body>

</html>