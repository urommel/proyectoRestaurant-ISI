<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComandaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoMenuController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RecepcionController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\DetallemenuController;
use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DetallecomandaController;
use App\Http\Controllers\DetalleproductoController;
use App\Http\Controllers\DetalleOrdenCompraController;
use App\Http\Controllers\CompraController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::get('detallecomandas/create/{idComanda}','App\Http\Controllers\DetallecomandaController@create')->name('detallecomandas.create');
    Route::delete('detallecomandas/{idcomanda}/{idplato}','App\Http\Controllers\DetallecomandaController@destroy')->name('detallecomandas.destroy');
    Route::get('detallecomandas/update/{idcomanda}/{idplato}','App\Http\Controllers\DetallecomandaController@show')->name('detallecomandas.show');
    Route::get('detallecomandas/{idcomanda}/{idplato}','App\Http\Controllers\DetallecomandaController@edit')->name('detallecomandas.edit');
    //detalle productos
    Route::get('detalleproductos/create/{idComanda}','App\Http\Controllers\DetalleproductoController@create')->name('detalleproductos.create');
    Route::delete('detalleproductos/{idcomanda}/{idprocudto}','App\Http\Controllers\DetalleproductoController@destroy')->name('detalleproductos.destroy');
    Route::get('detalleproductos/update/{idcomanda}/{idprocudto}','App\Http\Controllers\DetalleproductoController@show')->name('detalleproductos.show');
    Route::get('detalleproductos/{idcomanda}/{idprocudto}','App\Http\Controllers\DetalleproductoController@edit')->name('detalleproductos.edit');
    //detalle menus
    Route::delete('detallemenus/{idmenu}/{idDetalle}','App\Http\Controllers\DetallemenuController@destroy')->name('detallemenus.destroy');
    Route::get('detallemenus/update/{idmenu}/{idDetalle}','App\Http\Controllers\DetallemenuController@show')->name('detallemenus.show');
    Route::get('detallemenus/{idmenu}/{idDetalle}','App\Http\Controllers\DetallemenuController@edit')->name('detallemenus.edit');

    Route::get('/generar-pdf/{idComanda}', 'App\Http\Controllers\PdfController@generarPdf')->name('generar-pdf');

//Personal
    Route::resource('personal', PersonalController::class)->names('personal');
    // Route::get('/personal', [PersonalController::class, 'index'])->name('personal');
    // Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
    // Route::post('/personal/store', [PersonalController::class, 'store'])->name('personal.store');
    // Route::get('/personal/{id}/show', [PersonalController::class, 'show'])->name('personal.show');
    // Route::get('/personal/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
    // Route::put('/personal/{id}', [PersonalController::class, 'update'])->name('personal.update');
    // Route::delete('/personal/{id}', [PersonalController::class, 'destroy'])->name('personal.destroy');



    //Horario
    Route::resource('horario', HorarioController::class)->names('horario');
    Route::get('/horario/{horario}', [HorarioController::class,'show'])->name('horario.show');

    // Route::get('/horario', [HorarioController::class, 'index'])->name('horario');
    // Route::get('/horario/create', [HorarioController::class, 'create'])->name('horario.create');
    // Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');
    // Route::get('/horario/{id}/show', [HorarioController::class, 'show'])->name('horario.show');
    // Route::get('/horario/{id}/edit', [HorarioController::class, 'edit'])->name('horario.edit');
    // Route::put('/horario/{id}', [HorarioController::class, 'update'])->name('horario.update');
    // Route::delete('/horario/{id}', [HorarioController::class, 'destroy'])->name('horario.destroy');

    //Asistencia
    Route::resource('asistencia', AsistenciaController::class)->names('asistencia');
    // Route::get('/asistencia', [AsistenciaController::class, 'index'])->name('asistencia');
    // Route::get('/asistencia/create', [AsistenciaController::class, 'create'])->name('asistencia.create');
    // Route::post('/asistencia/store', [AsistenciaController::class, 'store'])->name('asistencia.store');
    // Route::get('/asistencia/{id}/show', [AsistenciaController::class, 'show'])->name('asistencia.show');
    // Route::get('/asistencia/{id}/edit', [AsistenciaController::class, 'edit'])->name('asistencia.edit');
    // Route::put('/asistencia/{id}', [AsistenciaController::class, 'update'])->name('asistencia.update');
    // Route::delete('/asistencia/{id}', [AsistenciaController::class, 'destroy'])->name('asistencia.destroy');

    Route::resource('orden-compras', OrdenCompraController::class);
    Route::resource('detalle-orden-compras', DetalleOrdenCompraController::class);
    Route::resource('administradors', AdministradorController::class);
    Route::resource('recepcions', RecepcionController::class);
    Route::resource('compras', CompraController::class);
    Route::get('/detalle-orden-compras/create2/{idOrden}', [App\Http\Controllers\DetalleOrdenCompraController::class, 'create2'])->name('detalle-orden-compras.create2');
    //Route::get('/detalle-orden-compras/update/', DetalleOrdenCompraController::class,'update')->name('detalle-orden-compras.update');
    Route::get('/detalle-orden-compras/create', [App\Http\Controllers\DetalleOrdenCompraController::class, 'create'])->name('detalle-orden-compras.create');
    Route::get('/detalle-orden-compras/edit/{idOrden},/{idProducto}', [App\Http\Controllers\DetalleOrdenCompraController::class, 'edit'])->name('detalle-orden-compras.edit');
    Route::delete('/detalle-orden-compras/destroy/{idOrden},/{idProducto}', [App\Http\Controllers\DetalleOrdenCompraController::class, 'destroy'])->name('detalle-orden-compras.destroy');
    Route::get('/orden-compras/index2', [App\Http\Controllers\OrdenCompraController::class, 'index2'])->name('orden-compras.index2');
});
