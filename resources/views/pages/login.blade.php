<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> -->


    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css" />
    <script>
        tailwind.config = {
            content: [
                './storage/framework/views/*.php',
                './resources/**/*.blade.php',
                './resources/**/*.js',
                './resources/**/*.vue',
            ],
            theme: {
                extend: {},
            },
            plugins: [],
        }
    </script>
    <!-- <style type="text/tailwindcss">
        .form-control {
            @apply w-full px-3 py-1 mt-0 mb-5 border-solid border-b-2 border-black focus: outline-none focus:ring-2 focus:border-none focus:ring-black placeholder:text-slate-400 placeholder:text-sm text-secondary text-base;
        }

        .btn {
            @apply font-semibold py-1 px-6 rounded-md hover: opacity-80;
        }

        .link {
            @apply underline italic hover: text-info;
        }

    </style> -->

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

<body>
    <div class="flex flex-row h-screen">
        <div class="basis-[46%] p-20">
            <div class="text-4xl mb-2">SIMULATOR</div>
            <div class="font-bold text-6xl mb-16">MANAJEMEN PELABUHAN</div>
            <div class="text-2xl mb-4">Here to get, <span class="font-semibold">welcome</span></div>
            <span class="text-red-500 font-semibold text-sm">{{ @$_GET['message'] }}</span>
            <form action="{{ url('/login') }}" method="post" id="login">
                <div>
                    @csrf
                    <div>
                        <label for="username">Username</label>
                        <input class="w-full px-3 py-1 mt-0 mb-5 border-solid border-b-2 border-black focus: outline-none focus:ring-2 focus:border-none focus:ring-black placeholder:text-slate-400 placeholder:text-sm text-secondary text-base" type="text" name="username" id="username" required>
                    </div>
                    <div class="relative">
                        <label for="">Password</label>
                        <input class="w-full px-3 py-1 mt-0 mb-5 border-solid border-b-2 border-black focus: outline-none focus:ring-2 focus:border-none focus:ring-black placeholder:text-slate-400 placeholder:text-sm text-secondary text-base" type="password" name="password" required>
                        <div class="absolute inset-y-0 right-0 pr-10 flex items-center text-sm leading-5">

                            <svg class="h-6 text-gray-700 absolute" fill="none" onClick="passwordHide(this)" id="svgShowPass" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                <path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>

                            <svg class="h-6 text-gray-700 invisible absolute" fill="none" id="svgHidePass" onClick="passwordHide(this)" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                <path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>

                        </div>
                    </div>
                </div>
            </form>

            <div class="mt-3">
                <a href="#" class="underline italic hover: text-info">Forget password?</a>
                <button type="submit" form="login" class="float-right text-white bg-black font-semibold text-lg py-1 px-10 rounded-lg hover:opacity-80">Continue</button>
            </div>
        </div>
        <div style="background-image: url('assets/img/login.jpg');" class="basis-[54%] h-auto  bg-cover bg-repeat ">
            <img width="200" class="float-right m-10" src="assets/img/logo.png" alt="">
        </div>
    </div>
    <script>
        const svgShowPass = document.getElementById("svgShowPass").classList;
        const svgHidePass = document.getElementById("svgHidePass").classList;
        const pass = document.querySelector("[name='password']");

        function passwordHide(obj) {
            svgShowPass.toggle("invisible")
            svgHidePass.toggle("invisible")
            pass.type = pass.type == "text" ? "password" : "text";
        }
    </script>
</body>

</html>