<?php

namespace App\Http\Controllers;

use App\Models\OrdenCotizacion;
use Illuminate\Http\Request;

class OrdenCotizacionController extends Controller
{
    public function index()
    {
        return response()->json(OrdenCotizacion::with('contacto')->get());
    }

    public function guardar(Request $request)
    {
        $ordenCotizacion = OrdenCotizacion::create($request->all());

        return response()->json($ordenCotizacion, 201);
    }

    public function buscarPorId($id)
    {
        $ordenCotizacion = OrdenCotizacion::with('contacto')->findOrFail($id);
        return response()->json($ordenCotizacion);
    }

    public function modificar(Request $request, $id)
    {
        $ordenCotizacion = OrdenCotizacion::findOrFail($id);
        $ordenCotizacion->update($request->all());

        return response()->json($ordenCotizacion);
    }

    public function eliminar($id)
    {
        $ordenCotizacion = OrdenCotizacion::findOrFail($id);
        $ordenCotizacion->delete();

        return response()->json(null, 204);
    }
}
