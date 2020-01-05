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
        SELECT  
        FROM 
        GROUP BY 
        ORDER BY 
        ")
        ->pipe($this->dataStore("totalpuntos"));        
    }
} 