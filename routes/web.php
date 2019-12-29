<?php

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

//Route::get('/', 'vistasControlador@inicio');

Route::get('/', function () {
    return redirect('main');
});

Route::get('/public/caracteristicas/eventos', function () {
    return redirect('eventos');
});

Route::get('registrar', function () {
    return view('login.registrar');
});
Route::get('olvido', function () {
    return view('login.olvido');
});
Route::get('eventos', function () {
    return view('eventos');
});
Route::get('recupera', function () {
    return view('login.recuperar');
});

Route::get('nosotros', function () {
    return view('nosotros');
});
Route::get('tiendas', function () {
    return view('tiendas');
});
Route::get('clickevento', function () {
    return view('clickevento');
});

Route::get('cajera', function () {
    return view('cajera');
});


Route::get('evento{id}','vistasControlador@eventoMostrar');

Route::get('main','vistasControlador@getCerveza2');

Route::get('diary','vistasControlador@diariolistar');

Route::get('eventos','vistasControlador@eventolistar');

Route::get('main/order/{id}','vistasControlador@getCerveza2');

Route::get('producto{id}', 'vistasControlador@getUnaCerveza');

Route::get('evento{id}', 'vistasControlador@eventoMostrar');

Route::post('afiliacionmanual', 'vistasControlador@afiliacionmanual');

Route::get('carro', function () {
    return view('compracliente');
});
Route::get('configuracion', function () {
    return view('configuracion');
});

Route::resource('lugar', 'lugarController');
Route::resource('proveedor', 'proveedorController');
Route::resource('evento', 'eventoController');
Route::resource('actividad', 'actividadController');
Route::resource('entrada', 'entradaController');
Route::resource('evento_proveedor', 'evento_proveedorController');
Route::resource('usuario', 'usuarioController');
Route::resource('clientejuridico', 'clientejuridicoController');
Route::resource('clientenatural', 'clientenaturalController');
Route::resource('telefono', 'telefonoController');
Route::resource('email', 'emailController');
Route::resource('personacontacto', 'personacontactoController');
Route::resource('afiliacionproveedor', 'afiliacionproveedorController');
Route::resource('almacen', 'almacenController');
Route::resource('anaquel', 'anaquelController');
Route::resource('pasillo', 'pasilloController');
Route::resource('cerveza', 'cervezaController');
Route::resource('tipocerveza', 'tipocervezaController');
Route::resource('horario', 'horarioController');
Route::resource('tienda', 'tiendaController');
Route::resource('puntovalor', 'puntovalorController');
Route::resource('beneficio', 'beneficioController');
Route::resource('vacacion', 'vacacionController');
Route::resource('privilegio', 'privilegioController');
Route::resource('rol', 'rolController');
Route::resource('rol_privilegio', 'rol_privilegioController');
Route::resource('efectivo', 'efectivoController');
Route::resource('banco', 'bancoController');
Route::resource('tarjetadebito', 'tarjetadebitoController');
Route::resource('tarjetacredito', 'tarjetacreditoController');
Route::resource('cheque', 'chequeController');
Route::resource('transferencia', 'transferenciaController');
Route::resource('monedaextranjera', 'monedaextranjeraController');
Route::resource('revista_cerveza', 'revista_cervezaController');
Route::resource('pagoweb', 'pagowebController');
Route::resource('pagoweb_puntoventa', 'pagoweb_puntoventaController');
Route::resource('ingrediente', 'ingredienteController');
Route::resource('caracteristicas', 'caracteristicasController');
Route::resource('tasacambiaria', 'tasacambiariaController');
Route::resource('tasa_monedaextranjera', 'tasa_monedaextranjeraController');
Route::resource('punto_puntovalor', 'punto_puntovalorController');
Route::resource('tipocerveza_ingrediente', 'tipocerveza_ingredienteController');
Route::resource('revista', 'revistaController');
Route::resource('venta', 'ventaController');
Route::resource('puntocompra', 'puntocompraController');
Route::resource('detalleventa', 'detalleventaController');
Route::resource('cargo', 'cargoController');
Route::resource('empleado', 'empleadoController');
Route::resource('empleado_horario', 'empleado_horarioController');
Route::resource('compra', 'compraController');
Route::resource('detalle_compra', 'detalle_compraController');
Route::resource('pagotienda', 'pagotiendaController');
Route::resource('inventarioarticulo', 'inventarioarticuloController');
Route::resource('presupuesto', 'presupuestoController');
Route::resource('estatus_conex', 'estatus_conexController');
Route::resource('estatus', 'estatusController');
Route::resource('inventario_cerveza', 'inventario_cervezaController');
Route::resource('comentario', 'comentarioController');
Route::resource('puntoventa', 'puntoventaController');
Route::resource('afiliacion_estatuspago', 'afiliacion_estatuspagoController');
Route::resource('estatuspago', 'estatuspagoController');
Route::resource('empleado_beneficio', 'empleado_beneficioController');
Route::resource('falta', 'faltaController');
Route::resource('pasopreparacion', 'pasopreparacionController');
Route::resource('proveedor_tipocerveza', 'proveedor_tipocervezaController');
Route::resource('imagencerveza', 'imagencervezaController');