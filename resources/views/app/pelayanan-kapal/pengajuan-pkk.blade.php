@extends('layouts.admin')

@section('title', 'Pelayanan Kapal')


@section('content')

<div class="">

  <div class="text-2xl ">Pelayanan Kapal / Warta Kedatangan / Pengajuan PKK</div>
  <hr class="border-b-2 border-black border-solid">

  <div class="text-center mb-3 mt-5">
    <div class="flex flex-wrap place-content-end my-2">
      <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEDATANGAN</button>
      <button class="py-2 px-5 bg-green-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">PEMBERITAHUAN KEBERANGKATAN KAPAL</button>
    </div>

    <div class="mt-5 grid grid-cols-2 gap-2">
      <div>
        <h3 class="my-5">Data Kapal</h3>
        <table class="w-full">
          <tr>
            <td>Tanda Pendaftaran Kapal</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td>NAMA KAPAL</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>BENDERA</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>JENIS TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>CALL SIGN</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>GT</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>LOA</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>DWT</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold">SPESIFIKASI KAPAL</td>
          </tr>
          <tr>
            <td>CSO</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
          <tr>
            <td>NO TELEPON</td>
            <td>:</td>
            <td><input type="text" class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3"></td>
          </tr>
        </table>
      </div>
      <div>
        <h3 class="my-5">Dioperasikan Oleh</h3>
        <table class="w-full">
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>SUPPLY PEMILIK</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full py-10 bg-white rounded-2xl px-3 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold">AGEN / PERUSAHAAN PELAYARAN</td>
          </tr>
          <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>PENANGGUNG JAWAB</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>SUPLAI PEMILIK</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>DOKUMEN KEGIATAN</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full py-10 bg-white rounded-2xl px-3 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td colspan="3" class="h-6"></td>
          </tr>
          <tr>
            <td colspan="3" class="font-semibold">JENIS TRAYEK</td>
          </tr>
          <tr>
            <td>NOMOR TRAYEK</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
          <tr>
            <td>LINTASAN</td>
            <td>:</td>
            <td><input type="text" disabled class="w-full bg-white rounded-2xl px-3 py-2 ring-1 ring-black mr-3" value="DEFAULT AUTO FILL" /></td>
          </tr>
        </table>
      </div>
    </div>

    <hr class="border-spacing-2 border-black border-2 mt-4 mb-4">

    <div class="mt-5">
      <h2>PERUSAHAAN BONGKAR MUAT</h2>

      <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Tambah</button>

      <!-- MODAL -->
      <button data-modal-target="modal-pmb" data-modal-toggle="modal-pmb" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Tambah
      </button>

      <!-- Main modal -->
      <div id="modal-pmb" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Tambah PBM/JPT
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-pmb">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div>Bongkar/Muat</div>
              <div class="grid grid-cols-3 gap-3">
                <div class="flex-nowrap">
                  <label class="text-left">Type Perusahaan</label>
                  <input type="text" class="w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
                </div>
                <div class="flex-nowrap">
                  <label class="text-left">Nama Perusahaan</label>
                  <input type="text" class="w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
                </div>
                <div class="flex-nowrap">
                  <label class="text-left">Kegiatan</label>
                  <input type="text" class="w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button data-modal-hide="modal-pmb" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
              <button data-modal-hide="modal-pmb" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
            </div>
          </div>
        </div>
      </div>
      <!-- . MODAL -->
      <table class="mt-5 w-full border-solid border-2 border-slate-800">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
            <th>NO</th>
            <th>NAMA PERUSAHAAN</th>
            <th>TYPE PERUSAHAAN</th>
            <th>KEGIATAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-solid border-2 border-slate-800">
            <td>1</td>
            <td>PT</td>
            <td>PBM</td>
            <td>B</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <hr class="border-spacing-2 border-black border-2 mt-4 mb-4">
    <div class="mt-5">

      <!-- <ul class="grid grid-cols-5">
        <li class="font-semibold text-xl bg-slate-400 text-black flex justify-center items-center"><span class="inline-block bg-red-700 ">1. MANIFEST KAPAL</span></li>
        <li>2. DATA AWAK KAPAL</li>
        <li>3. DATA MANIFEST BONGKAR MUAT</li>
        <li>4. DOKUMEN KAPAL</li>
        <li>5. BONGKAR MUAT</li>
      </ul> -->

      <!-- <table class="mt-5 w-full border-solid border-2 border-slate-300">
        <thead>
          <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
            <th>1. MANIFEST KAPAL</th>
            <th>2. DATA AWAK KAPAL</th>
            <th>3. DATA MANIFEST BONGKAR MUAT</th>
            <th>4. DOKUMEN KAPAL</th>
            <th></th>
            <th>5. BONGKAR MUAT</th>
          </tr>
        </thead>
      </table> -->
      <div class="mb-4 border-b border-gray-200 dark:border-gray-700 w-full">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center w-full" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
          <li class="mr-2 flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="manifest-tab" data-tabs-target="#manifest" type="button" role="tab" aria-controls="manifest" aria-selected="false">1. MANIFEST KAPAL</button>
          </li>
          <li class="mr-2  flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">2. DATA AWAK KAPAL</button>
          </li>
          <li class="mr-2  flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">3. DATA MANIFEST BONGKAR MUAT</button>
          </li>
          <li class=" flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">4. DOKUMEN KAPAL</button>
          </li>
          <li class=" flex-1" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab2" data-tabs-target="#contacts2" type="button" role="tab" aria-controls="contacts" aria-selected="false">5. BONGKAR MUAT</button>
          </li>
        </ul>
      </div>
      <div id="myTabContent">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="manifest" role="tabpanel" aria-labelledby="manifest-tab">
          <!-- MANIFEST KAPAL -->


          <h2 class="font-bold mt-6 mb-4">UPLOAD FILE MANIFEST KAPAL</h2>

          <!-- MODAL -->
          <button data-modal-target="modal-manifest" data-modal-toggle="modal-manifest" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            UPLOAD MANIFEST
          </button>

          <!-- Main modal -->
          <div id="modal-manifest" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah PBM/JPT
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-manifest">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                  <div>Bongkar/Muat</div>
                  <div class="grid grid-cols-3 gap-3">
                    <div class="flex-nowrap">
                      <label class="text-left">Type Perusahaan</label>
                      <input type="text" class="w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
                    </div>
                    <div class="flex-nowrap">
                      <label class="text-left">Nama Perusahaan</label>
                      <input type="text" class="w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
                    </div>
                    <div class="flex-nowrap">
                      <label class="text-left">Kegiatan</label>
                      <input type="text" class="w-full bg-white rounded px-3 py-2 ring-1 ring-black mr-3">
                    </div>
                  </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="modal-manifest" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                  <button data-modal-hide="modal-manifest" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                </div>
              </div>
            </div>
          </div>
          <!-- . MODAL -->

          <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead>
              <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                <th>NO</th>
                <th>UPLOAD</th>
                <th>NAMA FILE</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-solid border-2 border-slate-800">
                <td>1</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, facilis.</td>
                <td>
                  <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                </td>
                <td></td>
              </tr>
              <tr class="border-solid border-2 border-slate-800">
                <td>2</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, facilis.</td>
                <td>
                  <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                </td>
                <td></td>
              </tr>
              <tr class="border-solid border-2 border-slate-800">
                <td>3</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, facilis.</td>
                <td>
                  <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>



          <!-- . MANIFEST KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

          <!-- DATA AWAK KAPAL -->
          <h2 class="font-bold mt-6 mb-4">DATA AWAK KAPAL</h2>

          <!-- MODAL -->
          <button data-modal-target="modal-crew" data-modal-toggle="modal-crew" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            IMPORT CREW LIST
          </button>

          <!-- Main modal -->
          <div id="modal-crew" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Upload File Excel Crew List Kapal
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-crew">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                  <div>
                    <span>Berikut ini format excel crew list</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                  </div>
                  <div class="flex-nowrap">
                    <label class="text-left">File Crew List</label>
                    <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                  </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="modal-crew" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                  <button data-modal-hide="modal-crew" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                </div>
              </div>
            </div>
          </div>
          <!-- . MODAL -->

          <table class="mt-5 w-full border-solid border-2 border-slate-800">
            <thead>
              <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                <th>NO</th>
                <th>KODE PELAUT</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>TGL LAHIR</th>
                <th>KEBANGSAAN</th>
                <th>NO BUKU PELAUT</th>
                <th>TGL EXPIRED</th>
                <th>SERTIFIKAT</th>
                <th>JABATAN</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

          <!-- . DATA AWAK KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">

          <!-- DATA MANIFEST BONGKAR MUAT -->

          <h2 class="font-bold mt-6 mb-4">DATA MANIFEST BARANG</h2>

          <div>
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Kargo</div>
              <div class="align-items-end">
                <button data-modal-target="modal-mani-kargo" data-modal-toggle="modal-mani-kargo" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-mani-kargo" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Upload File Excel Manifest Kargo
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-mani-kargo">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div>
                          <span>Berikut ini format excel Manifest Kargo</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                        </div>
                        <div class="flex-nowrap">
                          <label class="text-left">File Manifest Kargo</label>
                          <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-mani-kargo" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-mani-kargo" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th>NO</th>
                  <th>JENIS KEMASAN</th>
                  <th>NAMA KOMODITI</th>
                  <th>JENIS KEGIATAN</th>
                  <th>JLH SATUAN UNIT</th>
                  <th>JLH SATUAN TON</th>
                  <th>JLH SATUAN M3</th>
                  <th>No BL</th>
                  <th>NTPN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>



          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Kontainer</div>
              <div class="align-items-end">
                <button data-modal-target="modal-mani-kontainer" data-modal-toggle="modal-mani-kontainer" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-mani-kontainer" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Upload File Excel Manifest Kontainer
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-mani-kontainer">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div>
                          <span>Berikut ini format excel Manifest Kontainer</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                        </div>
                        <div class="flex-nowrap">
                          <label class="text-left">File Manifest Kontainer</label>
                          <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-mani-kontainer" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-mani-kontainer" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th>NO</th>
                  <th>JENIS KEMASAN</th>
                  <th>NAMA KOMODITI</th>
                  <th>JENIS KEGIATAN</th>
                  <th>No Kontainer</th>
                  <th>Size Kontainer</th>
                  <th>JLH SATUAN Ton</th>
                  <th>No BOL</th>
                  <th>NTPN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>


          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Penumpang</div>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th>NO</th>
                  <th>SATUAN</th>
                  <th>JUMLAH</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>



          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Barang Berbahaya</div>
              <div class="align-items-end">
                <button data-modal-target="modal-mani-bahaya" data-modal-toggle="modal-mani-bahaya" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-mani-bahaya" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          Upload File Excel Manifest Barang Berbahaya
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-mani-bahaya">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div>
                          <span>Berikut ini format excel Manifest Barang Berbahaya</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download Excel</a>
                        </div>
                        <div class="flex-nowrap">
                          <label class="text-left">File Manifest Barang Berbahaya</label>
                          <button class="mr-3 py-2 px-5 bg-cyan-800 text-white font-semibold rounded-xl shadow-xl hover:opacity-70">Upload Dokumen</button>
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-mani-bahaya" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-mani-bahaya" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th>NO</th>
                  <th>NAMA PENGIRIM</th>
                  <th>NAMA BARANG</th>
                  <th>NO UIN</th>
                  <th>KEMASAN BARANG</th>
                  <th>KELAS BB</th>
                  <th>JUMLAH MUATAN</th>
                  <th>SATUAN</th>
                  <th>JENIS</th>
                  <th>TYPE</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>


          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Bongkar/Muat Barang Tercemar</div>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th rowspan="2">NO</th>
                  <th rowspan="2">JENIS</th>
                  <th colspan="2">KAPASITAS</th>
                  <th colspan="2">BONGKAR</th>
                  <th colspan="2">SIMPAN</th>
                </tr>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th>KG</th>
                  <th>M3</th>
                  <th>KG</th>
                  <th>M3</th>
                  <th>KG</th>
                  <th>M3</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>ANNEX I : Lorem ipsum dolor sit amet consectetur.</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>ANNEX II : Lorem ipsum dolor sit amet consectetur.</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>ANNEX III : Lorem ipsum dolor sit amet consectetur.</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>ANNEX IV : Lorem ipsum dolor sit amet consectetur.</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>ANNEX V : Lorem ipsum dolor sit amet consectetur.</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>ANNEX VI : Lorem ipsum dolor sit amet consectetur.</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Sampah Elektronik</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Attachment</td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                  <td><input type="text"></td>
                </tr>
              </tbody>
            </table>
          </div>


          <!-- . DATA MANIFEST BONGKAR MUAT -->

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
          <!-- DOKUMEN KAPAL -->

          <div>
            <h3>PELABUHAN ASAL / TUJUAN</h3>
            <center>

              <table class="mt-5 w-auto border-solid border-2 border-slate-800">
                <thead>
                  <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                    <th>JENIS INFORMASI</th>
                    <th>DATA INFORMASI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PENGAJUAN ASAL</td>
                    <td><input type="text"></td>
                  </tr>
                  <tr>
                    <td>WAKTU TIBA</td>
                    <td><input type="text"></td>
                  </tr>
                  <tr>
                    <td>WAKTU KEBERANGKATAN</td>
                    <td><input type="text"></td>
                  </tr>
                  <tr>
                    <td>PERMINTAAN LOKASI LAMBAT DAN LABUH</td>
                    <td><input type="text"></td>
                  </tr>
                  <tr>
                    <td>PANDU</td>
                    <td><input type="text"></td>
                  </tr>
                </tbody>
              </table>
            </center>
          </div>

          <div class="mt-8">
            <div class="grid grid-cols-2">
              <div class="text-left">Manifest Barang Berbahaya</div>
              <div class="align-items-end">
                <button data-modal-target="modal-dokumen-kapal" data-modal-toggle="modal-dokumen-kapal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat data</button>

                <!-- Main modal -->
                <div id="modal-dokumen-kapal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          DOKUMEN KAPAL
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-dokumen-kapal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                      </div>
                      <!-- Modal body -->
                      <div class="p-6 space-y-6">
                        <div class="grid grid-cols-4 gap-3">
                          <div>
                            <label class="text-left">NAMA DOKUMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">KODE JENIS DOKUMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">NOMOR DOKUMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">TEMPAT DIKELUARKAN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                        </div>

                        <div class="grid grid-cols-4 gap-3">

                          <div>
                            <label class="text-left">TANGGAL DIKELUARKAN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">TANGGAL ENDORSMEN</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">TANGGAL BERAKHIR</label>
                            <input type="text" class="w-full rounded border-1 border-slate-200">
                          </div>
                          <div>
                            <label class="text-left">DOKUMEN</label>
                            <input type="file" class="w-full rounded border-1 border-slate-200">
                          </div>
                        </div>
                      </div>
                      <!-- Modal footer -->
                      <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="modal-dokumen-kapal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        <button data-modal-hide="modal-dokumen-kapal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- . MODAL -->
              </div>
            </div>
            <table class="mt-5 w-full border-solid border-2 border-slate-800">
              <thead>
                <tr class="border-solid border-2 border-slate-800 bg-gradient-to-r from-cyan-700 to-cyan-800 text-white">
                  <th>NO</th>
                  <th>JENIS DOKUMEN</th>
                  <th>NO DOKUMEN</th>
                  <th>TEMPAT DIKELUARKAN</th>
                  <th>TANGGAL DOKUMEN</th>
                  <th>NAMA DOKUMEN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>



          <!-- . DOKUMEN KAPAL -->
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts2" role="tabpanel" aria-labelledby="contacts-tab2">

          <!-- BONGKAR MUAT -->
          <h3>BONGKAR MUAT</h3>


          <!-- . BONGKAR MUAT -->
        </div>
      </div>

    </div>
  </div>



</div>



@endsection

@section('script')



@endsection