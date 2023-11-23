<?php

namespace App\Services\AnekaUsaha;
use App\Repositories\AnekaUsaha\LahanRepository;

class LahanService
{
    private $repository;

    public function __construct(LahanRepository $repository){
        $this->repository = $repository;
    }

    public function listSewaLahan(){
        $data = $this->repository->listSewaLahan();
        return $data;
    }

}