<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    //
    public function index(){
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function crear(){
        return view('empleados.crear');
    }

    public function guardar(Request $request){
        $empleado = new Empleado();
        $empleado->id_prestamo = $request->id_prestamo;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->fechaIngreso = $request->fechaIngreso;
        $empleado->salario = $request->salario;
        $empleado->save();

        return redirect()->route('empleados.index');
    }
}
