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
use Illuminate\Http\Request;

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
        $db = pg_connect("host=localhost port=5432 dbname=git user=postgres password=1234");
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
        return redirect('archivo');
    }
}