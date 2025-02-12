<?php

namespace App\Http\Controllers;

use App\Models\EtiquetaProducto;
use Illuminate\Http\Request;

class EtiquetaProductoController extends Controller
{
    public function index()
    {
        return response()->json(EtiquetaProducto::all());
    }

    public function guardar(Request $request)
    {

        $etiqueta = EtiquetaProducto::create($request->only('nombre'));

        return response()->json($etiqueta, 201);
    }

    public function buscarPorId($id)
    {
        $etiqueta = EtiquetaProducto::findOrFail($id);
        return response()->json($etiqueta);
    }

    public function modificar(Request $request, $id)
    {
        $etiqueta = EtiquetaProducto::findOrFail($id);
        $etiqueta->update($request->only('nombre'));

        return response()->json($etiqueta);
    }

    public function eliminar($id)
    {
        $etiqueta = EtiquetaProducto::findOrFail($id);
        $etiqueta->delete();

        return response()->json(null, 204);
    }
}
