<?php
namespace App\Reports;

class empleados_faltas extends \koolreport\KoolReport
{
    use \koolreport\laravel\Friendship;
    use \koolreport\clients\Bootstrap;



    function setup()
    {
        $this->src("pgsql")
        ->query("
        SELECT E.nombre, E.apellido, F.tipo
        FROM empleado E, falta F
        WHERE FK_falta_empleado = codigo_empleado
        AND F.fecha BETWEEN :inicio AND :fin;
        ")
        ->params($this->params)
        ->pipe($this->dataStore("empleados_faltas"));        
    }
} 