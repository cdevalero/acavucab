<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Asistencia de empleados</h1>
        <?php
            \koolreport\widgets\google\barchart::create(array(
                "dataSource"=>$this->dataStore("asistencia")
            ));
        ?>
    </body>
</html> 