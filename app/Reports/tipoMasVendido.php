<?php
namespace App\Reports;

class tipoMasVendido extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        SELECT TC.nombre, SUM(DV.cantidad)
        FROM tipoCerveza TC, cerveza C, detalleVenta DV, venta V 
        WHERE C.FK_cerveza_tipoCerveza = TC.codigo_tipoCerveza
        AND DV.FK_detalleVenta_cerveza = C.codigo_cerveza
        AND DV.FK_detalleVenta_venta = codigo_venta
        AND V.fecha_venta BETWEEN :inicio AND :fin
        GROUP BY TC.nombre
        ORDER BY SUM(DV.cantidad) DESC 
        limit 10; 
        ")->params($this->params)
        ->pipe($this->dataStore("tipoMasVendido"));        
    }
} 