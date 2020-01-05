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
        AND V.fecha_venta BETWEEN '09/10/2019' AND '28/10/2019'
        GROUP BY C.nombre
        ORDER BY SUM(DV.cantidad) DESC
        limit 10; 
        ")
        ->pipe($this->dataStore("top10cervezas"));        
    }
} 