<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductoController::class, 'crear'])->name('productos.crear');
Route::post('/productos', [ProductoController::class, 'guardar'])->name('productos.guardar');

Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/crear', [EmpleadoController::class, 'crear'])->name('empleados.crear');
Route::post('/empleados', [EmpleadoController::class, 'guardar'])->name('empleados.guardar');

Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/crear', [ProveedorController::class, 'crear'])->name('proveedores.crear');
Route::post('/proveedores', [ProveedorController::class, 'guardar'])->name('proveedores.guardar');
