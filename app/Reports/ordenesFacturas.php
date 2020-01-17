<?php
namespace App\Reports;

class ordenesFacturas extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        SELECT 	V.fecha_venta, CJ.denominacion_comercial , DV.cantidad, C.nombre, C.precio, V.total
        FROM venta V, cerveza C, detalleVenta DV, presupuesto P, clienteJuridico CJ
        WHERE DV.FK_detalleVenta_cerveza = C.codigo_cerveza
        AND DV.FK_detalleVenta_venta = V.codigo_venta
        AND V.FK_venta_presupuesto = P.codigo_presupuesto
        AND P.FK_presupuesto_clienteJuridico = CJ.codigo_clienteJuridico
        AND V.numero_facturaVenta = 0001
        UNION all
        SELECT 	V.fecha_venta, CN.nombre, DV.cantidad, C.nombre, C.precio, V.total
        FROM venta V, cerveza C, detalleVenta DV, presupuesto P, clienteNatural CN
        WHERE DV.FK_detalleVenta_cerveza = C.codigo_cerveza
        AND DV.FK_detalleVenta_venta = V.codigo_venta
        AND V.FK_venta_presupuesto = P.codigo_presupuesto
        AND P.FK_presupuesto_clienteNatural = CN.codigo_clienteNatural
        AND V.numero_facturaVenta = 0001;      
        ")
        ->pipe($this->dataStore("ordenesFacturas"));        
    }
} 