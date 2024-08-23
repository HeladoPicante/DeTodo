<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function crear()
    {
        return view('productos.crear');
    }

    public function guardar(Request $request)
    {
        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->pagaIsv = $request->has('pagaIsv');
        $producto->save();

        return redirect()->route('productos.index');
    }
}
