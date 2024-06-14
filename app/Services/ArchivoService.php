<?php

namespace App\Services;

interface ArchivoService{
    public function crear(object $Data);
    public function traer();
    public function actualizar(object $Data, int $id);

}