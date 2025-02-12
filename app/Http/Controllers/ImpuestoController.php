<?php

namespace App\Http\Controllers;

use App\Models\Impuesto;
use Illuminate\Http\Request;

class ImpuestoController extends Controller
{
    public function index()
    {
        return response()->json(Impuesto::all());
    }

    public function guardar(Request $request)
    {
        $impuesto = Impuesto::create($request->only('nombre'));

        return response()->json($impuesto, 201);
    }

    public function buscarPorId($id)
    {
        $impuesto = Impuesto::findOrFail($id);
        return response()->json($impuesto);
    }

    public function modificar(Request $request, $id)
    {
        $impuesto = Impuesto::findOrFail($id);
        $impuesto->update($request->only('nombre'));

        return response()->json($impuesto);
    }

    public function eliminar($id)
    {
        $impuesto = Impuesto::findOrFail($id);
        $impuesto->delete();

        return response()->json(null, 204);
    }
}
