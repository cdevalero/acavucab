<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Diario</h1>
        <?php
            \koolreport\widgets\google\table::create(array(
                "dataSource"=>$this->dataStore("diarioReporte")
            ));
        ?>
    </body>
</html> 