<?php

namespace App\Http\Controllers;

use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    public function index()
    {
        return response()->json(UnidadMedida::with('tipoUnidadMedida')->get());
    }

    public function guardar(Request $request)
    {
        $unidadMedida = UnidadMedida::create($request->all());

        return response()->json($unidadMedida, 201);
    }

    public function buscarPorId($id)
    {
        $unidadMedida = UnidadMedida::with('tipoUnidadMedida')->findOrFail($id);
        return response()->json($unidadMedida);
    }

    public function modificar(Request $request, $id)
    {
        $unidadMedida = UnidadMedida::findOrFail($id);
        $unidadMedida->update($request->all());

        return response()->json($unidadMedida);
    }

    public function eliminar($id)
    {
        $unidadMedida = UnidadMedida::findOrFail($id);
        $unidadMedida->delete();

        return response()->json(null, 204);
    }
}
