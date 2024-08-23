<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    //
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function crear()
    {
        return view('proveedores.crear');
    }

    public function guardar(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->nombre = $request->nombre;
        $proveedor->fechaRegistro = $request->fechaRegistro;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;
        $proveedor->save();

        return redirect()->route('proveedores.index');
    }
}
