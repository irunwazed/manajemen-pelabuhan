<!-- user

1. agen-kapal
2. petugas-lala
3. pbm
4. bup
5. syahbandar
6. Pelindo-kapal
7. Pelindo-pbau
8. Pelindo-keuangan
9. admin
 -->


<ul class="menu flex">
  <li>
    <button class="py-2 px-4 mx-2 text-gray-500 flex relative active" id="pelayanan-kapal" data-dropdown-toggle="pelayanan-kapal-bar">
      <span class="mr-0">Pelayanan Kapal</span>
      <svg class="w-2.5 h-2.5 ml-2.5 top-4 absolute right-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
      </svg>
    </button>
    <div id="pelayanan-kapal-bar" class="z-10 hidden font-normal {{ @$user=='admin'?'overflow-y-scroll max-h-[500px]':'' }} bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      @if(in_array(@$user, ["agen-kapal", "admin"]))
      @if(@$user == "admin")
      <div class="pt-1 border-y-2 border-slate-200 border-solid bg-slate-100">
        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">AGEN KAPAL </span>
      </div>
      @endif
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/simlala') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">E-Service RPK Simlala</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/warta') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PKK-Pengajuan</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/spm') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPM</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/spog') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPOG</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/keberangkatan') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Keberangkatan Kapal</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/spb') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPB</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/monitor') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monitoring</a>
        </li>
      </ul>
      @endif
      @if(in_array(@$user, ["petugas-lala", "admin"]))
      @if(@$user == "admin")
      <div class="pt-1 border-y-2 border-slate-200 border-solid">
        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white bg-slate-100">PETUGAS LALA</span>
      </div>
      @endif
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/verifikasi-pkk') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PKK</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/verifikasi-spm') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPM</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/rkbm/verifikasi') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RKBM</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/ppk') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PPK</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/rpkro') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RPKRO</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/lk3') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LK3</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/monitor') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monitoring</a>
        </li>
      </ul>
      @endif
      @if(in_array(@$user, ["syahbandar", "admin"]))

      @if(@$user == "admin")
      <div class="pt-1 border-y-2 border-slate-200 border-solid">
        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white bg-slate-100">Syahbandar</span>
      </div>
      @endif
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/verifikasi-spm') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPM</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/spog') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPOG</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/kepelautan/list') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kepelautan</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/spb') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SPB</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/monitor') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monitoring</a>
        </li>
      </ul>
      @endif
      @if(in_array(@$user, ["pbm", "admin"]))
      @if(@$user == "admin")
      <div class="pt-1 border-y-2 border-slate-200 border-solid">
        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white bg-slate-100">PBM</span>
      </div>
      @endif
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/rkbm') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RKBM</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/monitor') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monitoring</a>
        </li>
      </ul>
      @endif

      @if(in_array(@$user, ["Pelindo-kapal", "admin"]))
      @if(@$user == "admin")
      <div class="pt-1 border-y-2 border-slate-200 border-solid">
        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white bg-slate-100">Pelindo-kapal</span>
      </div>
      @endif
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal') }}/rpkro" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RPKRO</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal') }}/pandu-tunda" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Permohonan Pandu Tunda</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal') }}/air" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Permohonan Isi Air</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal') }}/nota4a" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota4A</a>
        </li>
        <li>
          <a href="{{ url(@$user.'/pelayanan-kapal/monitor') }}/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Monitoring</a>
        </li>
      </ul>
      @endif
    </div>
  </li>
  <li>
    <button class="py-2 px-4 mx-2 text-gray-500 flex relative" data-dropdown-toggle="pelayanan-bongkar-bar">
      <span class="mr-0">Pelayanan Bongkar Muat</span>
      <svg class="w-2.5 h-2.5 ml-2.5 top-4 absolute right-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
      </svg>
    </button>
    <div id="pelayanan-bongkar-bar" class="z-10 hidden font-normal {{ @$user=='admin'?'overflow-y-scroll max-h-[500px]':'' }} bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

      @if(in_array(@$user, ["pelindo-pbau", "admin"]))
      @if(@$user == "admin")
      <div class="pt-1 border-y-2 border-slate-200 border-solid bg-slate-100">
        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Pelindo PBAU</span>
      </div>
      @endif
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{url('admin/pelayanan-barang/penumpukan-2b1')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Penumpukan 2B1</a>
        </li>
        <li>
          <a href="{{url('admin/pelayanan-barang/pengeluaran-2b2')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pengeluaran 2B2</a>
        </li>
        <li>
          <a href="{{url('admin/pelayanan-barang/nota-3b')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota 3B</a>
        </li>
        <li>
          <a href="{{url('admin/pelayanan-barang/nota-4b')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota 4B</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Permohonan 1C</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bukti 2C</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota 3C</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota 4C</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sewa Lahan dan Bangunan</a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sewa Bunker</a>
        </li>
      </ul>
      @endif
    </div>
  </li>
  <li>
    <button class="py-2 px-4 mx-2 text-gray-500 flex relative" data-dropdown-toggle="penyewaan-alat">
      <span class="mr-0">Penyewaan Alat</span>
      <svg class="w-2.5 h-2.5 ml-2.5 top-4 absolute right-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
      </svg>
    </button>
    <div id="penyewaan-alat" class="z-10 hidden font-normal {{ @$user=='admin'?'overflow-y-scroll max-h-[500px]':'' }} bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{url('admin/penyewaan-alat/permohonan-1c')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Permohonan Alat</a>
        </li>
        <li>
          <a href="{{url('admin/penyewaan-alat/bukti-2c')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Realisasi Penggunaan Alat</a>
        </li>
        <li>
          <a href="{{url('admin/penyewaan-alat/nota-3c')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota 3C</a>
        </li>
        <li>
          <a href="{{url('admin/penyewaan-alat/nota-4c')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nota 4C</a>
        </li>
      </ul>
    </div>
  </li>
  <li>
    <button class="py-2 px-4 mx-2 text-gray-500 flex relative" data-dropdown-toggle="aneka-usaha-bar">
      <span class="mr-0">Aneka Usaha</span>
      <svg class="w-2.5 h-2.5 ml-2.5 top-4 absolute right-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
      </svg>
    </button>
    <div id="aneka-usaha-bar" class="z-10 hidden font-normal {{ @$user=='admin'?'overflow-y-scroll max-h-[500px]':'' }} bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
        <li>
          <a href="{{url('admin/aneka-usaha/permohonan-sewa-lahan')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Permohonan Sewa Lahan Dan Bangunan</a>
        </li>
        <li>
          <a href="#{{url('admin/aneka-usaha/permohonan-sewa-bunker')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Permohonan Sewa Bunker</a>
        </li>
      </ul>
    </div>
  </li>
  <li>
    <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="#{{ URL::to('/admin/eksport-import') }}">
      <span class="mr-0">Eksport-Import</span>
      <embed class="absolute right-0 top-4" width="10" src="{{ URL::asset('assets/svg/arrow-down.svg') }}" />
    </a>
  </li>
  <li>
    <a class="py-2 px-4 mx-2 text-gray-500 flex relative" href="#{{ URL::to('/admin/pelayanan-bongkar-muat') }}">
      <span class="mr-0">Warehoushing & Inventory</span>
      <embed class="absolute right-0 top-4" width="10" src="{{URL::asset('assets/svg/arrow-down.svg')}}" />
    </a>
  </li>
  <li>
      <button class="py-2 px-4 mx-2 text-gray-500 flex relative" data-dropdown-toggle="keuangan">
          <span class="mr-0">Keuangan</span>
          <svg class="w-2.5 h-2.5 ml-2.5 top-4 absolute right-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
      </button>
      <div id="keuangan" class="z-10 hidden font-normal {{ @$user=='admin'?'overflow-y-scroll max-h-[500px]':'' }} bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
              <li>
                  <a href="{{url('admin/keuangan/penerimaan')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Penerimaan Pembayaran</a>
              </li>
              <li>
                  <a href="{{url('admin/keuangan/pembayaran')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pembayaran Tagihan</a>
              </li>
              <li>
                  <a href="{{url('admin/keuangan/laporan-pendapatan')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Laporan Pendapatan</a>
              </li>
              <li>
                  <a href="{{url('admin/keuangan/neraca')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Neraca</a>
              </li>
          </ul>
      </div>
  </li>
</ul>
