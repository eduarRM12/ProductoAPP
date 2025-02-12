<?php

namespace App\Http\Controllers;

use App\Models\ProductoFacturaCompra;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoFacturaCompraController extends Controller
{
    public function index()
    {
        return response()->json(ProductoFacturaCompra::with('producto')->get());
    }

    public function guardar(Request $request)
    {
        $productoFactura = ProductoFacturaCompra::create($request->all());

        return response()->json($productoFactura, 201);
    }

    public function buscarPorId($id)
    {
        $productoFactura = ProductoFacturaCompra::with('producto')->findOrFail($id);
        return response()->json($productoFactura);
    }

    public function modificar(Request $request, $id)
    {
        $productoFactura = ProductoFacturaCompra::findOrFail($id);
        $productoFactura->update($request->all());

        return response()->json($productoFactura);
    }

    public function eliminar($id)
    {
        $productoFactura = ProductoFacturaCompra::findOrFail($id);
        $productoFactura->delete();

        return response()->json(null, 204);
    }
}
