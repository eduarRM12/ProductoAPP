<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::with(['unidadMedida', 'impuestos', 'bodegas'])->get());
    }

    public function guardar(Request $request)
    {
        $producto = Producto::create($request->all());

        return response()->json($producto, 201);
    }

    public function buscarPorId($id)
    {
        $producto = Producto::with(['unidadMedida', 'impuestos', 'bodegas'])->findOrFail($id);
        return response()->json($producto);
    }

    public function modificar(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return response()->json($producto);
    }

    public function eliminar($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return response()->json(null, 204);
    }
}
