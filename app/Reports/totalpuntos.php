<?php
namespace App\Reports;

class totalpuntos extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        SElECT (CN.nombre||' '|| CN.apellido) AS Nombre_completo, (PC.cantidad) AS Puntos_Otorgados , (PVE.cantidad) AS Puntos_Canjeados
        FROM clienteNatural CN, puntoCompra PC, punto_puntoValor PPV, puntoValor PVA, puntoVenta PVE, venta V, presupuesto P
        WHERE P.FK_presupuesto_clienteNatural = CN.codigo_clienteNatural
        AND V.FK_venta_presupuesto = P.codigo_presupuesto 
        AND V.FK_venta_puntoCompra = PC.codigo_puntoCompra
        AND PPV.FK_pp_puntoCompra = PC.codigo_puntoCompra
        AND PPV.FK_pp_puntoCompra = PVA.codigo_puntoValor
        AND PVE.FK_puntoVenta_puntoValor = PVA.codigo_puntoValor
        AND V.fecha_venta BETWEEN :inicio AND :fin
        ")->params($this->params)
        ->pipe($this->dataStore("totalpuntos"));        
    }
} 