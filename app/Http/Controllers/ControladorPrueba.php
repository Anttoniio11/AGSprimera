<?php

namespace App\Http\Controllers;

use App\Services\ArchivoService;
use Illuminate\Http\Request;

class ControladorPrueba extends Controller
{
    protected $archivoService;

    public function __construct(ArchivoService $archivoService) 
    {
        $this->archivoService = $archivoService;
    }

    public function prueba(Request $request)
    {
        return $this->archivoService->crear($request);       
    }

    public function update(Request $request, int $id)
    {
        $this->archivoService->actualizar($request, $id);
    }

    public function mostrar()
    {
        $nueva = $this->archivoService->traer();
        return view('index', compact('nueva'));
    }




}
