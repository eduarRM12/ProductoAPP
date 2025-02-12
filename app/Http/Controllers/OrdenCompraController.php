<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index()
    {
        return response()->json(OrdenCompra::with(['contacto', 'productos'])->get());
    }

    public function guardar(Request $request)
    {
        $ordenCompra = OrdenCompra::create($request->all());

        return response()->json($ordenCompra, 201);
    }

    public function buscarPorId($id)
    {
        $ordenCompra = OrdenCompra::with(['contacto', 'productos'])->findOrFail($id);
        return response()->json($ordenCompra);
    }

    public function modificar(Request $request, $id)
    {
        $ordenCompra = OrdenCompra::findOrFail($id);
        $ordenCompra->update($request->all());

        return response()->json($ordenCompra);
    }

    public function eliminar($id)
    {
        $ordenCompra = OrdenCompra::findOrFail($id);
        $ordenCompra->delete();

        return response()->json(null, 204);
    }
}
