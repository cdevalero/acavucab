<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Total Puntos de clientes</h1>
        <?php
            \koolreport\widgets\google\columnchart::create(array(
                "dataSource"=>$this->dataStore("totalpuntos")
            ));
        ?>
    </body>
</html> 