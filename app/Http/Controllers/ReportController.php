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
        return view("diarioReporte",["diarioReporte"=>$report]);
    }

    public function empleados_faltasView(){
        $reporte = new empleados_faltas;
        $reporte->run();
        return view("empleados_faltas",["empleados_faltas"=>$reporte]);
    }

    public function fichaProveedoresView()
    {
        $reporte = new fichaProveedores;
        $reporte->run();
        return view("fichaProveedores",["fichaProveedores"=>$report]);
    }

    public function movinventariosView(){
        $reporte = new movinventarios;
        $reporte->run();
        return view("movinventarios",["movinventarios"=>$reporte]);
    }

    public function ordenesView(){
        $reporte = new ordenes;
        $reporte->run();
        return view("ordenes",["ordenes"=>$reporte]);
    }

    public function tipoMasVendidoView()
    {
        $reporte = new tipoMasVendido;
        $reporte->run();
        return view("tipoMasVendido",["tipoMasVendido"=>$report]);
    }

    public function top5cervezasView(){
        $reporte = new top5cervezas;
        $reporte->run();
        return view("top5cervezas",["top5cervezas"=>$reporte]);
    }

    public function top10cervezasView()
    {
        $reporte = new top10cervezas;
        $reporte->run();
        return view("top10cervezas",["top10cervezas"=>$report]);
    }

    public function top10clientesView(){
        $reporte = new top10clientes;
        $reporte->run();
        return view("top10clientes",["top10clientes"=>$reporte]);
    }

    public function totalpuntosView(){
        $reporte = new totalpuntos;
        $reporte->run();
        return view("totalpuntos",["totalpuntos"=>$reporte]);
    }

}