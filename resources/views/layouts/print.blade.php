<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - @yield('title')</title>
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" /> --}}
  <link href="{{ asset('plugins/custom/flowbite-1-8-1/flowbite.min.css') }}" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('plugins/custom/fancybox/jquery.fancybox.css') }}" rel="stylesheet" type="text/css"/>


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
    <div class="mx-4 mt-5 mb-1 ">
        @yield('content')
    </div>
  </div>
</body>

</html>