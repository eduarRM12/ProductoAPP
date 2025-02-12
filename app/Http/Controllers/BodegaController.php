<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Contacto;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function index()
    {
        return response()->json(Bodega::with('contacto')->get());
    }

    public function guardar(Request $request)
    {
        $bodega = Bodega::create($request->all());

        return response()->json($bodega, 201);
    }

    public function buscarPorId($id)
    {
        $bodega = Bodega::with('contacto')->findOrFail($id);
        return response()->json($bodega);
    }

    public function modificar(Request $request, $id)
    {

        $bodega = Bodega::findOrFail($id);
        $bodega->update($request->all());

        return response()->json($bodega);
    }

    public function eliminar($id)
    {
        $bodega = Bodega::findOrFail($id);
        $bodega->delete();

        return response()->json(null, 204);
    }
}
