<?php

namespace App\Http\Controllers;

use App\cerveza;
use App\revistum;
use App\revista_cerveza;
use App\tipocerveza;
use App\imagencerveza;
use App\comentario;
use App\clientejuridico;
use App\clientenatural;
use App\proveedor;
use App\lugar;
use App\evento;
use App\entrada;
use App\banco;
use App\puntovalor;
use App\tarjetacredito;
use App\tarjetadebito;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vistasControlador extends Controller{

    public function inicio(){

        $proveedores = $this->getImagenProveedores();
        $comentarios = $this->getComentarioInicio();
        $descuentos = $this->getDescuentosDestacados();

        return view('acavucab_inicio',compact($proveedores,$comentarios,$descuentos));
    }

    public function getImagenProveedores(){
        $proveedor1=NULL;
        $proveedor2=NULL;
        $proveedor3=NULL;
        $proveedor4=NULL;

        $max = proveedor::count();
        if ($max > 0){
            $id = rand (1,$max);
            $proveedor1 = proveedor::find($id);
            if ($proveedor1 == NULL){
                $proveedor1 = proveedor:: first();
            }
            $id = rand (1,$max);
            $proveedor2 = proveedor::find($id);
            if ($proveedor2 == NULL){
                $proveedor2 = proveedor:: first();
            }
            $id = rand (1,$max);
            $proveedor3 = proveedor::find($id);
            if ($proveedor3 == NULL){
                $proveedor3 = proveedor:: first();
            }
            $id = rand (1,$max);
            $proveedor4 = proveedor::find($id);
            if ($proveedor4 == NULL){
                $proveedor4 = proveedor:: first();
            }
            return $proveedores = array($proveedor1->imagenproveedor, $proveedor2->imagenproveedor, $proveedor3->imagenproveedor, $proveedor4->imagenproveedor);
        }
        return $proveedores = array();
    }

    public function getComentarioInicio(){
        $comentario1 = NULL;
        $comentario2 = NULL;
        $max = comentario::count();
        if ($max > 0){
            $id = rand (1,$max);
            $comentario1 = comentario::find($id);
            if ($comentario1 == NULL)
                $comentario1 = comentario:: first();
            $nombre1 = $this->nombreCliente($comentario1);
            $id = rand (1,$max);
            $comentario2 = comentario::find($id);
            if ($comentario2 == NULL)
                $comentario2 = comentario:: first();
            $nombre2 = $this->nombreCliente($comentario2);
            return compact('comentario1','comentario2','nombre1','nombre2');
        }
        return $comentarios = array();
    }

    public function nombreCliente($comentario){
        $nombre = NULL;
        if ($comentario->fk_comentario_clientejuririco <> NULL){
            $cliente = clientejuridico::where('codigo_clientejuridico',$comentario->fk_comentario_clientejuririco);
            if ($cliente <> NULL) 
                $nombre = $cliente->denominacion_comercial;
        }        
        else if ($comentario->fk_comentario_clientenatural <> NULL){
            $cliente = clientenatural::where('codigo_clientenatural',$comentario->fk_comentario_clientenatural);
            if ($cliente <> NULL)
                $nombre = $cliente->nombre;
        }
        return ($nombre);
    }

    public function getDescuentosDestacados(){
        $descuento1 = NULL;
        $descuento2 = NULL;
        $descuento3 = NULL;

        $max = revista_cerveza::count();
        if (max > 0){

            $id = rand(1,$max);
            $descuento1 = revista_cerveza::find($id);
            if ($descuento1 == NULL)
                $descuento1 = revista_cerveza:: first();
            $id = rand(1,$max);
            $descuento2 = revista_cerveza::find($id);
            if ($descuento2 == NULL)
                $descuento2 = revista_cerveza:: first();
            $id = rand(1,$max);
            $descuento3 = revista_cerveza::find($id);
            if ($descuento3 == NULL)
                $descuento3 = revista_cerveza:: first();
            
            $cerveza1=$this->getNombreCerveza($descuento1);
            $cervezaNombre1= $cerveza1->nombre;
            $cervezaPrecio1= $cerveza1->precio;
            $cerveza1=$this->getNombreCerveza($descuento1);
            $cervezaNombre2= $cerveza2->nombre;
            $cervezaPrecio2= $cerveza2->precio;
            $cerveza1=$this->getNombreCerveza($descuento1);
            $cervezaNombre3= $cerveza3->nombre;
            $cervezaPrecio3= $cerveza3->precio;

            $imagenCerveza1=$this->getImagenCerveza($cerveza1);
            $imagenCerveza2=$this->getImagenCerveza($cerveza2);
            $imagenCerveza3=$this->getImagenCerveza($cerveza3);

            return compact('decuento1','descuento2','descuento3','cervezaNombre1','cervezaNombre2','cervezaPrecio1','cervezaPrecio2','cervezaNombre3','cervezaPrecio3','imagenCerveza1','imagenCerveza2','imagenCerveza3');
        }

        return array();
    }

    public function getNombreCerveza($descuento){
        $cerveza = cerveza::where('codigo_cerveza',$descuento->fk_rc_cerveza);
        return $cerveza;
    }

    public function getImagenCerveza($cerveza){
        $imagenCerveza = NULL;
        $imagenCerveza = imagencerveza::where('fk_imagencerveza_cerveza', $cerveza->codigo_cerveza)->first();
        if ($imagenCerveza == NULL)
            return NULL;
        return $imagenCerveza->imagen;
    }

    public function inicioChino(){

        $cerveza = $this->getCerveza();
        $imagenCerveza = $this->getImagen();
        return view('main',compact('cerveza','imagenCerveza'));
    }

    public function getCerveza(){
        $max = cerveza::count();
        if ($max > 0){
            $id = rand (1,$max);
            $cerveza1 = cerveza::find($id);
            if ($cerveza1 == NULL)
                $cerveza1 = cerveza:: first();
            $imagenCerveza1 = $this->getImagenCerveza($cerveza1);
            $id = rand (1,$max);
            $cerveza2 = cerveza::find($id);
            if ($cerveza2 == NULL)
                $cerveza2 = cerveza:: first();
            $imagenCerveza2 = $this->getImagenCerveza($cerveza2);
            $id = rand (1,$max);
            $cerveza3 = cerveza::find($id);
            if ($cerveza3 == NULL)
                $cerveza3 = cerveza:: first();
            $imagenCerveza3 = $this->getImagenCerveza($cerveza3);
            $id = rand (1,$max);
            $cerveza4 = cerveza::find($id);
            if ($cerveza4 == NULL)
                $cerveza4 = cerveza:: first();
            $imagenCerveza4 = $this->getImagenCerveza($cerveza4);
            $id = rand (1,$max);
            $cerveza5 = cerveza::find($id);
            if ($cerveza5 == NULL)
                $cerveza5 = cerveza:: first();
            $imagenCerveza5 = $this->getImagenCerveza($cerveza5);
            $id = rand (1,$max);
            $cerveza6 = cerveza::find($id);
            if ($cerveza6 == NULL)
                $cerveza6 = cerveza:: first();   
            $imagenCerveza6 = $this->getImagenCerveza($cerveza6); 
            return view('main',compact('cerveza1','cerveza2','cerveza3','cerveza4','cerveza5','cerveza6','imagenCerveza1','imagenCerveza2','imagenCerveza3','imagenCerveza4','imagenCerveza5','imagenCerveza6'));
            
        }
        return view('error');
    }

    public function getCerveza2(){
        $max = cerveza::count();
        if ($max > 0){
            $id = rand (1,$max);
            $cerveza = cerveza::all();
            $tipocerveza = tipocerveza:: all();
            $imagencerveza = imagencerveza::all();
            return view('main',compact('cerveza','imagencerveza','tipocerveza'));          
        }
        return view('error');
    }

    public function getUnaCerveza($id){
        $cerveza = cerveza::findOrFail($id);
        $revista = revistum::all();
        $revista = $revista->last();
        $descuento= revista_cerveza::all();
        $imagenCerveza = $this->getImagenCerveza($cerveza);
        return view('clickproducto',compact('cerveza','imagenCerveza','descuento','revista'));
    }

    public function diariolistar(){
        $revista= revistum::all();
        $revista=$revista->last();
        $descuento= revista_cerveza::all();
        $cerveza= cerveza::all();
        $imagencerveza = imagencerveza::all();

        return view('diario',compact('revista','descuento','cerveza','imagencerveza'));
    }

    public function eventolistar(){
        $eventos=evento::all();
        $entrada=entrada::all();
        $lugar=lugar::all();
        $eventolugar = evento::groupBy('fk_evento_lugar')->pluck('fk_evento_lugar');
        return view('eventos',compact('eventos','lugar','entrada','eventolugar'));
    }

    public function eventoMostrar($id){
        $evento = evento::findOrFail($id);
        $direccion = $this->direccion($evento->fk_evento_lugar);
        $tiket = entrada::where('fk_entrada_evento',$evento->codigo_evento)->first();
        return view('clickevento',compact('direccion','evento','tiket'));
    }

    public function direccion($fk){
        if ($fk <> null){
            $nombre = lugar::where('codigo_lugar',$fk)->first();
            $nombre2 = $this->direccion($nombre->fk_lugar_lugar);
            if ($nombre2 == NULL)
                $nombre3 = " ";
            else
                $nombre3 =$nombre2;
            return $nombre->nombre.". ".$nombre3;
        }
        return NULL;
    }

    public function cambiclave(Request $objeto){
        if ($objeto['claveN'] <> $objeto['claveN2'])
            return redirect()->back();
        return redirect('main');
    }
    

    public function archivo(Request $handle){
        $db = pg_connect("host=localhost port=5432 dbname=entrega user=postgres password=1234");
        $handle = fopen($_FILES["uploaded"]["tmp_name"], "r");
        if ($handle){
            while (($line = fgets($handle)) !== false) {
                $lineArr = explode("|", "$line");
                var_dump($lineArr);    
                list($codigo_falta,$tipo,$fecha,$fk_falta_empleado) = $lineArr;
                $query_insert = "INSERT INTO falta (codigo_falta,tipo,fecha,fk_falta_empleado) VALUES ('$codigo_falta','$tipo','$fecha','$fk_falta_empleado')";
                $insert = pg_query($query_insert);
            }   
        }
        return redirect('main');
    }

    public function cajera(){
        $cerveza = cerveza::all();
        $imagencerveza = imagencerveza::all();
        $entrada = entrada::all();
        $banco = banco::all(); 
        return view('cajera',compact('cerveza','imagencerveza','entrada', 'banco'));
    }

    public function config(){
        $tipoCerveza = tipoCerveza::all();
        $cerveza = cerveza::all();
        $proveedor_tipoCerveza = proveedor_tipoCerveza::all();
        $afiliacionproveedor = afiliacionproveedor::all();
        $afiliacion_estatusPago = afiliacion_estatusPago::all();
        $estatusPago = estatusPago::all();
        return view('configuracion',compact('tipoCerveza','cerveza','proveedor_tipoCerveza', 'afiliacionproveedor', 'afiliacion_estatusPago', 'estatusPago'));
    }

    public function insertVentaT(){
        $precioTotal = $_POST["precioTotal"];
        $cantidadTotal = $_POST["cantidadTotal"];
        $cod_user = Auth::id();
        //$bank = $_POST["selectB"];
        $tarjetacredito = tarjetacredito::all();
        $tarjetadebito = tarjetadebito::all();

        $banco = banco::all();    
        $puntoValor = puntoValor::all();
        foreach ($puntoValor as $pv){
            if ($pv->fecha = date('d/m/Y')){
                $divide = $pv->valor;
            }
        }
    
        $puntos = $precioTotal / $divide;
    
        $ins = DB::table("puntocompra")->insertGetId(['cantidad'=>$puntos], "codigo_puntocompra");

        $presu = DB::table("presupuesto")->insertGetId(['fecha'=>date("d/m/Y"), 'total'=>$cantidadTotal], "codigo_presupuesto");

        DB::insert("INSERT INTO venta (numero_facturaVenta, fecha_venta, total, FK_venta_puntoCompra, FK_venta_presupuesto, FK_venta_empleado)
                VALUES (?, ?, ?, ?, ?, ?)", [rand ( 10 , 99999 ), date('d/m/Y'), $precioTotal, $ins, $presu, $cod_user]);     
    
        DB::update("UPDATE inventario_cerveza SET cantidad = cantidad - $cantidadTotal");
    
        if(isset($_POST["creditPagoT"])){
            $bank = $_POST["selectB"];
            DB::insert("INSERT INTO pagoWeb (monto_total, fk_pagoweb_tarjetaCredito)
                    VALUES (?, ?)", [$precioTotal, $_POST["numberCT"]]);
        }
    
        if(isset($_POST["debitPagoT"])){
            $bank = $_POST["selectB"];
            DB::insert("INSERT INTO pagoWeb (monto_total, fk_pagoweb_tarjetaDebito)
                    VALUES (?, ?)", [$precioTotal, $_POST["numberDT"]]);
        }
    
        if(isset($_POST["chequePagoT"])){
            $bank = $_POST["selectB"];
        //numero y banco
            DB::insert("INSERT INTO cheque (numero_cheque, FK_cheque_banco)
                    VALUES (?, ?)", [$_POST["numCh"], $bank]);
        }
    /*
        if(isset($_POST["monedaPagoT"])){
        //tipo, denominacion y numero_billete
            DB::insert("INSERT INTO pagoweb (tipo, denominacion, numero_billete)
                    VALUES (?, ?)", [$_POST["tipo"], $_POST["denom"], $_POST["numbill"]]);
        }
    
        if(isset($_POST["efectivoPagoT"])){
        //cantidad
            $efe = DB::table("efectivo")->insertGetId(['cantidad'=>$cantidadTotal], "codigo_efectivo");
            DB::insert("INSERT INTO pagotienda (monto, fk_pagotienda_efectivo)
                    VALUES ?", [$precioTotal, $efe]);
        }*/
        return redirect('main');
    }
    
    public function insertVenta(Request $hola){
        //dd($hola->all());
        $precioTotal = $_POST["precioTotal"];
        $cantidadTotal = $_POST["cantidadTotal"];

        $banco = banco::all(); 
        $puntoValor = puntoValor::all();
    
        foreach ($puntoValor as $pv){
            if ($pv->fecha = date('d/m/Y')){
                $divide = $pv->valor;
            }
        }
        
        $puntos = $precioTotal / $divide;
    
        $ins = DB::table("puntocompra")->insertGetId(['cantidad'=>$puntos], "codigo_puntocompra");

        $presu = DB::table("presupuesto")->insertGetId(['fecha'=>date("d/m/Y"), 'total'=>$cantidadTotal], "codigo_presupuesto");
    
        DB::insert("INSERT INTO venta (numero_facturaVenta, fecha_venta, total, FK_venta_puntoCompra, FK_venta_presupuesto, FK_venta_empleado)
                VALUES (?, ?, ?, ?, ?, ?)", [rand ( 11119 , 99999999 ), date('d/m/Y'), $precioTotal, $ins, $presu, NULL]);     
    
        DB::update("UPDATE inventario_cerveza SET cantidad = cantidad - $cantidadTotal");
    
        if(isset($_POST["creditPago"])){
            $bank = $_POST["selectB"];
            DB::insert("INSERT INTO pagoWeb (monto_total, fk_pagoweb_tarjetaCredito)
                    VALUES (?, ?)", [$precioTotal, $_POST["numberC"]]);
        }
    
        if(isset($_POST["debitPago"])){
            $bank = $_POST["selectB"];
            DB::insert("INSERT INTO pagoWeb (monto_total, fk_pagoweb_tarjetaDebito)
                    VALUES (?, ?)", [$precioTotal, $_POST["numberD"]]);
        }
    
        if(isset($_POST["chequePago"])){
        //numero y banco
        $bank = $_POST["selectB"];
            DB::insert("INSERT INTO cheque (numero_cheque, FK_cheque_banco)
                    VALUES (?, ?)", [$_POST["numCh"], $bank]);
        }
        //dd($hola->puntosT);
        if(isset($_POST["puntoPago"])){
        //cantidad
            DB::insert("INSERT INTO puntoVenta (cantidad)
                    VALUES ?", [$hola->puntosT]);
        }
    
        if(isset($_POST["monedaPago"])){
        //tipo, denominacion y numero_billete
            DB::insert("INSERT INTO pagoWeb (tipo, denominacion, numero_billete)
                    VALUES (?, ?)", [$_POST["tipo"], $_POST["denom"], $_POST["numbill"]]);
        }
    
        if(isset($_POST["transfPago"])){
        //numero y banco
        $bank = $_POST["selectB"];
            DB::insert("INSERT INTO transferencia (numero_transferencia, FK_transferencia_banco)
                    VALUES (?, ?)", [$_POST["numT"], $bank]);   
        }
    
        if(isset($_POST["efectivoPago"])){
        //cantidad
            $efe = DB::table("efectivo")->insertGetId(['cantidad'=>$cantidadTotal], "codigo_efectivo");
            DB::insert("INSERT INTO pagoTienda (monto, FK_pagoTienda_efectivo)
                    VALUES ?", [$precioTotal, $efe]);
        }
        return redirect('main');
    }
    
    public function insertCompra(){
    $tipoC = $_POST["seleCer"];
    $cantidadC = $_POST["cantidadP"];
    $precio = $_POST["precio"];
    $precioTotal = $cantidadC * $precio;
    
    DB::update("UPDATE inventario_cerveza SET cantidad += $cantidadC WHERE codigo_tipoCerveza = $tipoC");
    
    DB::insert("INSERT INTO compra (fecha, total, FK_compra_proveedor)
                VALUES (?, ?, ?)", [date("d/m/Y"), $precioTotal, $_POST["prov"]]);
    
    DB::insert("INSERT INTO detalle_Compra (cantidad, precio, tipo, FK_compra_proveedor)
                VALUES (?, ?, ?, ?)", [$cantidadC, $precioTotal, 'Compra', $_POST["prov"]]);
    }
    
    public function autoCompra(){
        $inventario_cerveza = inventario_cerveza::all();
        $cerveza = cerveza::all();
        $proveedor_tipoCerveza = proveedor_tipoCerveza::all();
    
        foreach ($inventario_cerveza as $i){
            foreach ($cerveza as $c){
                foreach ($proveedor_tipoCerveza as $p){
                    foreach ($tipoCerveza as $tc){
                        if (($i->FK_inCer_cerveza == $c->codigo_cerveza) && ($i->cantidad <= 100) && ($c->FK_tipoCerveza == $tc->codigo_tipoCerveza) && ($tc->codigo_tipoCerveza == $p->FK_ptc_tipoCerveza)){
                            $total = 10000 * $c->precio;
                            DB::insert("INSERT INTO compra (fecha, total, FK_compra_proveedor)
                                        VALUES (?, ?, ?)", [date("d/m/Y"), $total, $p->FK_ptc_proveedor]);
    
                            DB::insert("INSERT INTO detalle_Compra (cantidad, precio, tipo, FK_compra_proveedor)
                                        VALUES (?, ?, ?, ?)", [10000, $total, 'Compra', $p->FK_ptc_proveedor]);
    
                            DB::update("UPDATE inventario_cerveza SET cantidad += 10000");
                        }
                    }
                }
            }
        }
        return NULL;
    }    

    public function pagoAfiliacion(){
        $codigo = $_POST["estatus"];
        $date = date("d/m/Y");

        DB::update("UPDATE estatusPago SET nombre = 'Pagado' WHERE codigo_estatusPago = $codigo; ");

        DB::update("UPDATE afiliacion_estatusPago SET fecha = $date WHERE FK_aep_estatusPago = $codigo; ");
    }
}