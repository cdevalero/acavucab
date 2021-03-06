<?php

namespace App\Http\Controllers;

use App\Reports\diarioReporte;
use App\Reports\empleados_faltas;
use App\Reports\fichaProveedores;
use App\Reports\movinventarios;
use App\Reports\ordenes;
use App\Reports\tipoMasVendido;
use App\Reports\top5cervezas;
use App\Reports\top10cervezas;
use App\Reports\top10clientes;
use App\Reports\totalpuntos;
use App\Reports\asistencia;
use Illuminate\Http\Request;
use App\Reports\ordenesFacturas;

class ReportController extends Controller
{
    public function __contruct()
    {
        $this->middleware("guest");
    }

    public function diarioReporteView()
    {
        $reporte = new diarioReporte;
        $reporte->run();
        return view("reporte.diarioReporte",["diarioReporte"=>$reporte]);
    }

    public function top10cervezasView(Request $request)
    { 
        $fecha=$request->all(":fin",":inicio");
        if ($fecha[":inicio"]==null)
            $fecha[":inicio"]="01-01-1900";
        if ($fecha[":fin"]==null)
            $fecha[":fin"]="31-12-2100";
        $reporte = new top10cervezas($fecha);
        $reporte->run();
        return view("reporte.top10cervezas",["top10cervezas"=>$reporte]);
    }

    public function totalpuntosView(Request $request){
        
        $fecha=$request->all(":fin",":inicio");
        if ($fecha[":inicio"]==null){
            $fecha[":inicio"]="01-01-1900";
        }
        if ($fecha[":fin"]==null){
            $fecha[":fin"]="31-12-2100";
        }
        $reporte = new totalpuntos($fecha);
        $reporte->run();
        return view("reporte.totalpuntos",["totalpuntos"=>$reporte]);
    }

    public function fichaProveedoresView()
    {   $reporte = new fichaProveedores;
        $reporte->run();
        return view("reporte.fichaProveedores",["fichaProveedores"=>$reporte]);
    }

    public function movinventariosView(){
        $reporte = new movinventarios;
        $reporte->run();
        return view("reporte.movinventarios",["movinventarios"=>$reporte]);
    }

    public function ordenesView(Request $request){
        $fecha=$request->all(":fin",":inicio");
        if ($fecha[":inicio"]==null)
            $fecha[":inicio"]="01-01-1900";
        if ($fecha[":fin"]==null)
            $fecha[":fin"]="31-12-2100";
        $reporte = new ordenes($fecha);
        $reporte->run();
        return view("reporte.ordenes",["ordenes"=>$reporte]);
    }

    public function tipoMasVendidoView(Request $request)
    {
        $fecha=$request->all(":fin",":inicio");
        if ($fecha[":inicio"]==null)
            $fecha[":inicio"]="01-01-1900";
        if ($fecha[":fin"]==null)
            $fecha[":fin"]="31-12-2100";
        $reporte = new tipoMasVendido($fecha);
        $reporte->run();
        return view("reporte.tipoMasVendido",["tipoMasVendido"=>$reporte]);
    }

    public function top5cervezasView(){
        $reporte = new top5cervezas;
        $reporte->run();
        return view("reporte.top5cervezas",["top5cervezas"=>$reporte]);
    }

    public function top10clientesView(){
        $reporte = new top10clientes;
        $reporte->run();
        return view("reporte.top10clientes",["top10clientes"=>$reporte]);
    }



    public function empleados_faltasView(Request $request){
        $fecha=$request->all(":fin",":inicio");
        if ($fecha[":inicio"]==null)
            $fecha[":inicio"]="01-01-1900";
        if ($fecha[":fin"]==null)
            $fecha[":fin"]="31-12-2100";
        $reporte = new empleados_faltas($fecha);
        $reporte->run();
        return view("reporte.empelados_faltas",["empleados_faltas"=>$reporte]);
    }

    public function ordenesFacturasView(){
        $reporte = new ordenesFacturas;
        $reporte->run();
        return view("reporte.ordenesFacturas",["ordenesFacturas"=>$reporte]);
    }

    public function asistenciaView(){
        $reporte = new asistencia;
        $reporte->run();
        return view("reporte.asistencia",["asistencia"=>$reporte]);
    }
}
/*
        $fecha=$request->all(":fin",":inicio");
        if ($fecha[":inicio"]==null){
            $fecha[":inicio"]="01-01-1900";
            $fecha[":iniciob"]="01-01-1900";
        }
        else $fecha[":iniciob"]=$fecha[":inicio"];
        if ($fecha[":fin"]==null){
            $fecha[":finb"]="31-12-2100";
            $fecha[":fin"]="31-12-2100";
        }
        else $fecha[":finb"]=$fecha[":fin"];*/