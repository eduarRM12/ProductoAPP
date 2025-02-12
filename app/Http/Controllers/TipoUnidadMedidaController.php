<?php

namespace App\Http\Controllers;

use App\Models\TipoUnidadMedida;
use Illuminate\Http\Request;

class TipoUnidadMedidaController extends Controller
{
    public function index()
    {
        return response()->json(TipoUnidadMedida::all());
    }

    public function guardar(Request $request)
    {

        $tipoUnidadMedida = TipoUnidadMedida::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json(['message' => 'Guardado con éxito', 'data' => $tipoUnidadMedida], 201);
    }

    public function buscarPorId($id)
    {
        $tipoUnidadMedida = TipoUnidadMedida::findOrFail($id);
        return response()->json($tipoUnidadMedida);
    }

    public function modificar(Request $request, $id)
    {
        $tipoUnidadMedida = TipoUnidadMedida::findOrFail($id);
        $tipoUnidadMedida->update($request->all());

        return response()->json($tipoUnidadMedida);
    }

    public function eliminar($id)
    {
        $tipoUnidadMedida = TipoUnidadMedida::findOrFail($id);
        $tipoUnidadMedida->delete();

        return response()->json(null, 204);
    }
}
