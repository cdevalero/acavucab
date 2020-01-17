<?php
namespace App\Reports;

class ordenes extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        SELECT C.fecha, P.denominacion_comercial, C.total,E.nombre
        FROM estatus_conexe EC, estatus E, compra C, proveedor P
        WHERE EC.fk_ecx_estatus = E.codigo_estatus
        AND EC.FK_ecx_compra = C.codigo_compra
        AND C.FK_compra_proveedor = P.codigo_proveedor
        AND EC.fecha_hora BETWEEN :inicio AND :fin
        ")
        ->params($this->params)
        ->pipe($this->dataStore("ordenes"));        
    }
} 