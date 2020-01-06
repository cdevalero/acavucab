<?php
namespace App\Reports;

class top10cervezas extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        Select C.nombre, SUM(DV.cantidad) as Ventas
        FROM cerveza C, detalleVenta DV, venta V
        WHERE DV.FK_detalleVenta_venta = V.codigo_venta
        AND DV.FK_detalleVenta_cerveza = C.codigo_cerveza
        AND V.fecha_venta BETWEEN :inicio AND :fin
        GROUP BY C.nombre
        ORDER BY SUM(DV.cantidad) DESC
        limit 10; 
        ")
        ->params($this->params)
        ->pipe($this->dataStore("top10cervezas"));        
    }
} 