<?php

namespace App\Http\Controllers;

use App\Models\FacturaCompra;
use App\Models\Contacto;
use Illuminate\Http\Request;

class FacturaCompraController extends Controller
{
    public function index()
    {
        return response()->json(FacturaCompra::with('proveedor')->get());
    }

    public function guardar(Request $request)
    {
        $factura = FacturaCompra::create($request->all());

        return response()->json($factura, 201);
    }

    public function buscarPorId($id)
    {
        $factura = FacturaCompra::with('proveedor')->findOrFail($id);
        return response()->json($factura);
    }

    public function modificar(Request $request, $id)
    {
        $factura = FacturaCompra::findOrFail($id);
        $factura->update($request->all());

        return response()->json($factura);
    }

    public function eliminar($id)
    {
        $factura = FacturaCompra::findOrFail($id);
        $factura->delete();

        return response()->json(null, 204);
    }
}
