<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Ficha de Proveedores</h1>
        <?php
            Table::create([
                "dataSource"=>$this->dataStore("fichaProveedores")
            ]);

            return $this->dataStore("fichaProveedores");
        ?>
    </body>
</html> 