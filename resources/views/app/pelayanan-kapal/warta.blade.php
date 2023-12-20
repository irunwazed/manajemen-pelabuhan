@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Warta Kedatangan</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <div class="flex flex-wrap place-content-center my-2">
      <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">PEMBERITAHUAN KEDATANGAN</button>
      <button class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">PEMBERITAHUAN KEBERANGKATAN KAPAL</button>
    </div>
    <div class="place-content-center flex mt-5 mb-3">
      <form action="{{ url('/'.$user) }}/pelayanan-kapal/generate-pkk" method="post">
        <div class="flex gap-4">
          <div>
            <div class="text-left">
              <label for="">Jenis Trayek</label>
            </div>
            <input name="jenis" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div>
            <div class="text-left">
              <label for="">Masukkan No RPK</label>
            </div>
            <input name="no_rpk" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="mt-6">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ajukan PKK</button>
          </div>
        </div>
      </form>

    </div>
    @if($errors->any())
    <div class="text-red-500 my-3">{{$errors->first()}}</div>
    @endif
    <div>
      <table class="table w-full">
        <thead>
          <tr class="bg-gradient-to-r from-[#211c5c] to-primary text-white">
            <th class="py-2">NO</th>
            <th>No LAYANAN</th>
            <th>NO PKK</th>
            <th>NAMA KAPAL</th>
            <th>TANGGAL REGISTRASI</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>

          @foreach(@$data as $row)
          @if(($loop->index) %2 == 0)
          <tr class="border-solid border-1 border-slate-800 hover:bg-slate-300">
            @else
          <tr class="border-solid border-1 border-slate-800 bg-slate-200 hover:bg-slate-300">
            @endif
            <td class="text-center">{{ ((@$page-1)*@$perPage)+$loop->index+1 }}</td>
            <td>{{$row->no_layanan_kapal }}</td>
            <td>{{$row->no_pkk }}</td>
            <td>{{$row->nama_kapal }}</td>
            <td>{{ $row->waktu_tiba }}</td>
            <td class="py-2 flex flex-wrap gap-1 justify-center ">
              @if($row->flag == 0)
              <a href="{{ url('/'.$user) }}/pelayanan-kapal/pengajuan-pkk?id={{$row->pelayanan_kapal_id }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900" data-tooltip-target="tooltip-edit" data-tooltip-placement="top">
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                </svg>
              </a>
              <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Ubah
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
              @endif

              <a href="{{ url('/'.$user) }}/pelayanan-kapal/detail-pkk?id={{$row->pelayanan_kapal_id }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" data-tooltip-target="tooltip-view" data-tooltip-placement="top">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                  <path d="M7.363 9.863a2 2 0 1 0 1.412 3.415A2 2 0 0 0 7.36 9.866l.003-.003ZM5 5V.13a2.98 2.98 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                  <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-1.722 16.844a1 1 0 0 1-1.414 0L9.383 15.3a3.96 3.96 0 0 1-2.02.566 4 4 0 1 1 4-4 3.96 3.96 0 0 1-.566 2.02l1.547 1.547a1 1 0 0 1 0 1.411Z" />
                </svg>
              </a>
              <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Lihat
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
              <!-- <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" data-tooltip-target="tooltip-send" data-tooltip-placement="top">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z" />
                  <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z" />
                </svg>
              </a>
              <div id="tooltip-send" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Kirim
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div> -->
            </td>
          </tr>
          @endforeach
          <!-- <tr class="">
            <td>1</td>
            <td>xxxx</td>
            <td>xxxx</td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsum!
            </td>
            <td>2 Oktober 2020</td>
            <td class="py-2 flex flex-wrap gap-1 justify-center ">
              <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900" data-tooltip-target="tooltip-edit" data-tooltip-placement="top">
                <svg class="w-6 h-6 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                  <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                  <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                </svg>
              </a>
              <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Ubah
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
              <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900" data-tooltip-target="tooltip-view" data-tooltip-placement="top">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                  <path d="M7.363 9.863a2 2 0 1 0 1.412 3.415A2 2 0 0 0 7.36 9.866l.003-.003ZM5 5V.13a2.98 2.98 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                  <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-1.722 16.844a1 1 0 0 1-1.414 0L9.383 15.3a3.96 3.96 0 0 1-2.02.566 4 4 0 1 1 4-4 3.96 3.96 0 0 1-.566 2.02l1.547 1.547a1 1 0 0 1 0 1.411Z" />
                </svg>
              </a>
              <div id="tooltip-view" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Lihat
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" data-tooltip-target="tooltip-send" data-tooltip-placement="top">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M17 0h-5.768a1 1 0 1 0 0 2h3.354L8.4 8.182A1.003 1.003 0 1 0 9.818 9.6L16 3.414v3.354a1 1 0 0 0 2 0V1a1 1 0 0 0-1-1Z" />
                  <path d="m14.258 7.985-3.025 3.025A3 3 0 1 1 6.99 6.768l3.026-3.026A3.01 3.01 0 0 1 8.411 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V9.589a3.011 3.011 0 0 1-1.742-1.604Z" />
                </svg>
              </a>
              <div id="tooltip-send" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Kirim
                <div class="tooltip-arrow" data-popper-arrow></div>
              </div>
            </td>
          </tr> -->
          <!-- <tr class="border-solid border-2 border-slate-800 bg-slate-300">
            <td>2</td>
            <td>xxxx</td>
            <td>xxxx</td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ipsum!
            </td>
            <td>2 Oktober 2020</td>
            <td class="py-2 flex flex-wrap gap-1 justify-center ">
              <a href="#" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:focus:ring-yellow-900">Edit</a>
              <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">View</a>
              <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kirim</a>
            </td>
          </tr> -->
        </tbody>
      </table>
      @include('components.pagination')


    </div>
  </div>



</div>



@endsection

@section('script')



@endsection