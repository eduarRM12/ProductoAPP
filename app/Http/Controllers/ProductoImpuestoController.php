<?php

namespace App\Http\Controllers;

use App\Models\ProductoImpuesto;
use Illuminate\Http\Request;

class ProductoImpuestoController extends Controller
{
    public function index()
    {
        return response()->json(ProductoImpuesto::with(['producto', 'impuesto'])->get());
    }

    public function guardar(Request $request)
    {
        $productoImpuesto = ProductoImpuesto::create($request->only('porcentaje', 'producto_id', 'impuesto_id'));

        return response()->json($productoImpuesto, 201);
    }

    public function buscarPorId($id)
    {
        $productoImpuesto = ProductoImpuesto::with(['producto', 'impuesto'])->findOrFail($id);
        return response()->json($productoImpuesto);
    }

    public function modificar(Request $request, $id)
    {
        $productoImpuesto = ProductoImpuesto::findOrFail($id);
        $productoImpuesto->update($request->only('porcentaje', 'producto_id', 'impuesto_id'));

        return response()->json($productoImpuesto);
    }

    public function eliminar($id)
    {
        $productoImpuesto = ProductoImpuesto::findOrFail($id);
        $productoImpuesto->delete();

        return response()->json(null, 204);
    }
}
