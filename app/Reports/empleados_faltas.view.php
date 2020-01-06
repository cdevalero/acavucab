<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Faltas</h1>
        <?php
            
            Table::create([
                "dataSource"=>$this->dataStore("empleados_faltas")
            ]);
        ?>
    </body>
</html> 