<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return response()->json(Contacto::all());
    }

    public function guardar(Request $request)
    {

        $contacto = Contacto::create($request->all());

        return response()->json($contacto, 201);
    }

    public function buscarPorId($id)
    {
        $contacto = Contacto::findOrFail($id);
        return response()->json($contacto);
    }

    public function modificar(Request $request, $id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->update($request->all());

        return response()->json($contacto);
    }

    public function eliminar($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();

        return response()->json(null, 204);
    }
}
