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
        SELECT  
        FROM 
        GROUP BY 
        ORDER BY 
        ")
        ->pipe($this->dataStore("tipoMasVendido"));        
    }
} 