<?php 

namespace App\Services\Implementations;

use App\Services\ArchivoService;
use Illuminate\Support\Facades\DB;

class ArchivoServiceImpl implements ArchivoService{

    public function crear(object $Data)
    {
        DB::table("prueba")->insert([['name'=>$Data->input('prueba')]]);

        return $this->traer();
    }

    public function traer()
    {
        return DB::table('prueba')->get();
    }

    public function actualizar(object $Data, int $id)
    {

    }



}