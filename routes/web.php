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



Route::post('cambioclave','vistasControlador@cambiclave'); 


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

Route::get('vistas_supervision', function () {
    return view('vistas_supervision');
})->middleware('permiso:supervisor');

Route::get('/diarioReporteView', "ReportController@diarioReporteView")->middleware('permiso:diarioReporteView');
Route::get('/empleados_faltasView', "ReportController@empleados_faltasView")->middleware('permiso:empleados_faltasView');
Route::get('/fichaProveedoresView', "ReportController@fichaProveedoresView")->middleware('permiso:fichaProveedoresView');
Route::get('/movinventariosView', "ReportController@movinventariosView")->middleware('permiso:movinventariosView');
Route::get('/ordenesView', "ReportController@ordenesView")->middleware('permiso:ordenesView');
Route::get('/tipoMasVendidoView', "ReportController@tipoMasVendidoView")->middleware('permiso:tipoMasVendidoView');
Route::get('/top5cervezasView', "ReportController@top5cervezasView")->middleware('permiso:top5cervezasView');
Route::get('/top10cervezasView', "ReportController@top10cervezasView")->middleware('permiso:top10cervezasView');

Route::post('/top10cervezasView', "ReportController@top10cervezasView")->middleware('permiso:top10cervezasView');

Route::get('/top10clientesView', "ReportController@top10clientesView")->middleware('permiso:top10clientesView');
Route::get('/totalpuntosView', "ReportController@totalpuntosView")->middleware('permiso:totalpuntosView');
Route::get('/ordenesFacturasView', "ReportController@ordenesFacturasView")->middleware('permiso:ordenesFacturasView');
Route::get('/asistencia', "ReportController@asistenciaView")->middleware('permiso:asistenciaView');

Route::resource('lugar', 'lugarController')->middleware('permiso:lugarCRUD');
Route::resource('proveedor', 'proveedorController')->middleware('permiso:proveedorCRUD');
Route::resource('evento', 'eventoController')->middleware('permiso:eventoCRUD');
Route::resource('actividad', 'actividadController')->middleware('permiso:actividadCRUD');
Route::resource('entrada', 'entradaController')->middleware('permiso:entradaCRUD');
Route::resource('evento_proveedor', 'evento_proveedorController')->middleware('permiso:evento_proveedorCRUD');
Route::resource('usuario', 'usuarioController')->middleware('permiso:usuarioCRUD');
Route::resource('clientejuridico', 'clientejuridicoController')->middleware('permiso:clinetejuridicoCRUD');
Route::resource('clientenatural', 'clientenaturalController')->middleware('permiso:clientenaturalCRUD');
Route::resource('telefono', 'telefonoController')->middleware('permiso:telefonoCRUD');
Route::resource('email', 'emailController')->middleware('permiso:emailCRUD');
Route::resource('personacontacto', 'personacontactoController')->middleware('permiso:personacontactoCRUD');
Route::resource('afiliacionproveedor', 'afiliacionproveedorController')->middleware('permiso:afiliacionproveedorCRUD');
Route::resource('almacen', 'almacenController')->middleware('permiso:almacenCRUD');
Route::resource('anaquel', 'anaquelController')->middleware('permiso:anaquelCRUD');
Route::resource('pasillo', 'pasilloController')->middleware('permiso:pasilloCRUD');
Route::resource('cerveza', 'cervezaController')->middleware('permiso:cervezaCRUD');
Route::resource('tipocerveza', 'tipocervezaController')->middleware('permiso:tipocervezaCRUD');
Route::resource('horario', 'horarioController')->middleware('permiso:horarioCRUD');
Route::resource('tienda', 'tiendaController')->middleware('permiso:tiendaCRUD');
Route::resource('puntovalor', 'puntovalorController')->middleware('permiso:puntovalorCRUD');
Route::resource('beneficio', 'beneficioController')->middleware('permiso:beneficioCRUD');
Route::resource('vacacion', 'vacacionController')->middleware('permiso:vacacionCRUD');
Route::resource('privilegio', 'privilegioController')->middleware('permiso:privilegioCRUD');
Route::resource('rol', 'rolController')->middleware('permiso:rolCRUD');
Route::resource('rol_privilegio', 'rol_privilegioController')->middleware('permiso:rol_privilegioCRUD');
Route::resource('efectivo', 'efectivoController')->middleware('permiso:efectivoCRUD');
Route::resource('banco', 'bancoController')->middleware('permiso:bancoCRUD');
Route::resource('tarjetadebito', 'tarjetadebitoController')->middleware('permiso:tarjetadebitoCRUD');
Route::resource('tarjetacredito', 'tarjetacreditoController')->middleware('permiso:tarjetacreditoCRUD');
Route::resource('cheque', 'chequeController')->middleware('permiso:chequeCRUD');
Route::resource('transferencia', 'transferenciaController')->middleware('permiso:transferenciaCRUD');
Route::resource('monedaextranjera', 'monedaextranjeraController')->middleware('permiso:monedaextranjeraCRUD');
Route::resource('revista_cerveza', 'revista_cervezaController')->middleware('permiso:revista_cervezaCRUD');
Route::resource('pagoweb', 'pagowebController')->middleware('permiso:pagowebCRUD');
Route::resource('pagoweb_puntoventa', 'pagoweb_puntoventaController')->middleware('permiso:pagoweb_puntoventaCRUD');
Route::resource('ingrediente', 'ingredienteController')->middleware('permiso:ingredienteCRUD');
Route::resource('caracteristicas', 'caracteristicasController')->middleware('permiso:caracteristicasCRUD');
Route::resource('tasacambiaria', 'tasacambiariaController')->middleware('permiso:tasacambiariaCRUD');
Route::resource('tasa_monedaextranjera', 'tasa_monedaextranjeraController')->middleware('permiso:tasa_monedaextranjeraCRUD');
Route::resource('punto_puntovalor', 'punto_puntovalorController')->middleware('permiso:punto_puntovalorCRUD');
Route::resource('tipocerveza_ingrediente', 'tipocerveza_ingredienteController')->middleware('permiso:tipocerveza_ingredienteCRUD');
Route::resource('revista', 'revistaController')->middleware('permiso:revistaCRUD');
Route::resource('venta', 'ventaController')->middleware('permiso:ventaCRUD');
Route::resource('puntocompra', 'puntocompraController')->middleware('permiso:puntocompraCRUD');
Route::resource('detalleventa', 'detalleventaController')->middleware('permiso:detalleventaCRUD');
Route::resource('cargo', 'cargoController')->middleware('permiso:cargoCRUD');
Route::resource('empleado', 'empleadoController')->middleware('permiso:empleadoCRUD');
Route::resource('empleado_horario', 'empleado_horarioController')->middleware('permiso:empleado_horarioCRUD');
Route::resource('compra', 'compraController')->middleware('permiso:compraCRUD');
Route::resource('detalle_compra', 'detalle_compraController')->middleware('permiso:detalle_compraCRUD');
Route::resource('pagotienda', 'pagotiendaController')->middleware('permiso:pagotiendaCRUD');
Route::resource('inventarioarticulo', 'inventarioarticuloController')->middleware('permiso:inventarioarticuloCRUD');
Route::resource('presupuesto', 'presupuestoController')->middleware('permiso:presupuestoCRUD');
Route::resource('estatus_conex', 'estatus_conexController')->middleware('permiso:estatus_conexCRUD');
Route::resource('estatus', 'estatusController')->middleware('permiso:estatusCRUD');
Route::resource('inventario_cerveza', 'inventario_cervezaController')->middleware('permiso:inventariocervezaCRUD');
Route::resource('comentario', 'comentarioController')->middleware('permiso:comntarioCRUD');
Route::resource('puntoventa', 'puntoventaController')->middleware('permiso:puntoventaCRUD');
Route::resource('afiliacion_estatuspago', 'afiliacion_estatuspagoController')->middleware('permiso:afiliacion_estatuspagoCRUD');
Route::resource('estatuspago', 'estatuspagoController')->middleware('permiso:estatuspagoCRUD');
Route::resource('empleado_beneficio', 'empleado_beneficioController')->middleware('permiso:empleado_beneficioCRUD');
Route::resource('falta', 'faltaController')->middleware('permiso:faltaCRUD');
Route::resource('pasopreparacion', 'pasopreparacionController')->middleware('permiso:pasopreparacionCRUD');
Route::resource('proveedor_tipocerveza', 'proveedor_tipocervezaController')->middleware('permiso:proveedor_tipocervezaCRUD');
Route::resource('imagencerveza', 'imagencervezaController')->middleware('permiso:imagencervezaCRUD');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
