<?php
namespace App\Reports;

class fichaProveedores extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        SELECT AP.fecha_afiliacion, P.denominacion_comercial, EP.nombre, AE.fecha
        FROM proveedor P, afiliacionproveedor AP, afiliacion_estatusPago AE, estatusPago EP
        WHERE AP.FK_afiliacionProveedor_proveedor = P.codigo_proveedor
        AND AE.FK_eap_afiliacionProveedor = AP.codigo_afiliacionProveedor
        AND AE.FK_aep_estatusPago = EP.codigo_estatusPago
        ")
        ->pipe($this->dataStore("fichaProveedores"));        
    }
} 