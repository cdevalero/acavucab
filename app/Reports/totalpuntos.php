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
        SElECT CJ.denominacion_comercial, PC.cantidad, PVE.cantidad
        FROM clienteJuridico CJ, puntoCompra PC, punto_puntoValor PPV, puntoValor PVA, puntoVenta PVE, venta V, presupuesto P
        WHERE P.FK_presupuesto_clienteJuridico = CJ.codigo_clienteJuridico
        AND V.FK_venta_presupuesto = P.codigo_presupuesto 
        AND V.FK_venta_puntoCompra = PC.codigo_puntoCompra
        AND PPV.FK_pp_puntoCompra = PC.codigo_puntoCompra
        AND PPV.FK_pp_puntoCompra = PVA.codigo_puntoValor
        AND PVE.FK_puntoVenta_puntoValor = PVA.codigo_puntoValor
        AND V.fecha_venta BETWEEN :inicio AND :fin
        UNION all
        SElECT CN.nombre, PC.cantidad, PVE.cantidad
        FROM clienteNatural CN, puntoCompra PC, punto_puntoValor PPV, puntoValor PVA, puntoVenta PVE, venta V, presupuesto P
        WHERE P.FK_presupuesto_clienteNatural = CN.codigo_clienteNatural
        AND V.FK_venta_presupuesto = P.codigo_presupuesto 
        AND V.FK_venta_puntoCompra = PC.codigo_puntoCompra
        AND PPV.FK_pp_puntoCompra = PC.codigo_puntoCompra
        AND PPV.FK_pp_puntoCompra = PVA.codigo_puntoValor
        AND PVE.FK_puntoVenta_puntoValor = PVA.codigo_puntoValor
        AND V.fecha_venta BETWEEN :iniciob AND :finb;
        ")->params($this->params)
        ->pipe($this->dataStore("totalpuntos"));        
    }
} 