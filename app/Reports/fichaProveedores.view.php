<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Ficha de Proveedores</h1>
        <?php
            \koolreport\widgets\google\table::create(array(
                "dataSource"=>$this->dataStore("fichaProveedores")
            ));
        ?>
    </body>
</html> 