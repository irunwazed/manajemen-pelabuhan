<?php

namespace App\Http\Controllers\AnekaUsaha;
use App\Http\Controllers\Controller;
use App\Services\AnekaUsaha\LahanService;
use Illuminate\Http\Request;
// use Yajra\DataTables\Facades\DataTables;

class LahanController
{
    private $service,$view;

    public function __construct(LahanService $service){
        $this->service = $service;
        $this->view = 'app.aneka-usaha.lahan.';
    }

    public function index(){
        return view($this->view.'index');
    }

    public function listSewaLahan(Request $request){
        // try {
        //     return DataTables::of(
        //         $this->service->listSewaLahan()
        //     )->addColumn('action', function ($data) {
        //         if ($data) {
        //             return view($this->view.'action')
        //                 ->with([
        //                     'data' => $data
        //                 ]);
        //         } else {
        //             return '';
        //         }
        //     })->make(true);
        // } catch (\Exception $ex) {
        //     dd($ex);
        // }
    }

}