<?php

namespace App\Http\Controllers;

use App\Models\ProductoBodega;
use Illuminate\Http\Request;

class ProductoBodegaController extends Controller
{
    public function index()
    {
        return response()->json(ProductoBodega::with(['producto', 'bodega'])->get());
    }

    public function guardar(Request $request)
    {
        $productoBodega = ProductoBodega::create($request->all());

        return response()->json($productoBodega, 201);
    }

    public function buscarPorId($id)
    {
        $productoBodega = ProductoBodega::with(['producto', 'bodega'])->findOrFail($id);
        return response()->json($productoBodega);
    }

    public function modificar(Request $request, $id)
    {
        $productoBodega = ProductoBodega::findOrFail($id);
        $productoBodega->update($request->all());

        return response()->json($productoBodega);
    }

    public function eliminar($id)
    {
        $productoBodega = ProductoBodega::findOrFail($id);
        $productoBodega->delete();

        return response()->json(null, 204);
    }
}
