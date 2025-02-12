<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompraProducto;
use Illuminate\Http\Request;

class OrdenCompraProductoController extends Controller
{
    public function index()
    {
        return response()->json(OrdenCompraProducto::with(['producto', 'ordenCompra'])->get());
    }

    public function guardar(Request $request)
    {
        $ordenCompraProducto = OrdenCompraProducto::create($request->all());

        return response()->json($ordenCompraProducto, 201);
    }

    public function buscarPorId($id)
    {
        $ordenCompraProducto = OrdenCompraProducto::with(['producto', 'ordenCompra'])->findOrFail($id);
        return response()->json($ordenCompraProducto);
    }

    public function modificar(Request $request, $id)
    {
        $ordenCompraProducto = OrdenCompraProducto::findOrFail($id);
        $ordenCompraProducto->update($request->all());

        return response()->json($ordenCompraProducto);
    }

    public function eliminar($id)
    {
        $ordenCompraProducto = OrdenCompraProducto::findOrFail($id);
        $ordenCompraProducto->delete();

        return response()->json(null, 204);
    }
}
