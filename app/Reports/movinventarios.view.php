<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Movimientos</h1>
        <?php
            \koolreport\widgets\google\barchart::create(array(
                "dataSource"=>$this->dataStore("movinventarios")
            ));
        ?>
    </body>
</html> 