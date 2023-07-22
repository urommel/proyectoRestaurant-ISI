<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ComandaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TipoMenuController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DetallemenuController;
use App\Http\Controllers\DetallecomandaController;
use App\Http\Controllers\DetalleproductoController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\AsistenciaController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('proveedors', ProveedorController::class);
    Route::resource('mesas', MesaController::class);
    Route::resource('clientes', ClienteController::class);
	Route::resource('reservacions', ReservacionController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('platos', PlatoController::class);
    Route::resource('comandas', ComandaController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('tipos', TipoController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('tipomenus', TipoMenuController::class);
    Route::resource('detallemenus', DetallemenuController::class);
    Route::resource('detallecomandas', DetallecomandaController::class);
    Route::resource('detalleproductos', DetalleproductoController::class);

    //detalle comandas
    Route::get('detallecomandas/create/{comanda_id}',[DetallecomandaController::class, 'create'])->name('detallecomandas.create');
    Route::delete('detallecomandas/{idcomanda}/{plato_id}',[DetallecomandaController::class, 'destroy'])->name('detallecomandas.destroy');
    Route::get('detallecomandas/update/{idcomanda}/{plato_id}',[DetallecomandaController::class, 'show'])->name('detallecomandas.show');
    Route::get('detallecomandas/{idcomanda}/{idplato}', [DetallecomandaController::class, 'edit'])->name('detallecomandas.edit');
    //detalle productos
    Route::get('detalleproductos/create/{idComanda}',[DetalleproductoController::class, 'create'])->name('detalleproductos.create');
    Route::delete('detalleproductos/{idcomanda}/{idprocudto}',[DetalleproductoController::class, 'destroy'])->name('detalleproductos.destroy');
    Route::get('detalleproductos/update/{idcomanda}/{idprocudto}',[DetalleproductoController::class, 'show'])->name('detalleproductos.show');
    Route::get('detalleproductos/{idcomanda}/{idprocudto}',[DetalleproductoController::class, 'edit'])->name('detalleproductos.edit');
    //detalle menus
    Route::delete('detallemenus/{idmenu}/{idDetalle}',[DetallemenuController::class,'destroy'])->name('detallemenus.destroy');
    Route::get('detallemenus/update/{idmenu}/{idDetalle}',[DetallemenuController::class, 'show'])->name('detallemenus.show');
    Route::get('detallemenus/{idmenu}/{idDetalle}',[DetallemenuController::class, 'edit'])->name('detallemenus.edit');

    Route::get('/generar-pdf/{idComanda}', [PdfController::class, 'generarPdf'])->name('generar-pdf');

    //Personal
    Route::resource('personal', PersonalController::class)->names('personal');

    //Horario
    Route::resource('horario', HorarioController::class)->names('horario');

    //Asistencia
    Route::resource('asistencia', AsistenciaController::class)->names('asistencia');

});
