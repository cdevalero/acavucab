<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Ordenes Y Facturas</h1>
        <?php
            \koolreport\widgets\google\barchart::create(array(
                "dataSource"=>$this->dataStore("ordenesFacturas")
            ));
            Table::create([
                "dataSource"=>$this->dataStore("ordenesFacturas")
            ]);
            return $this->dataStore("ordenesFacturas");
        ?>
    </body>
</html> 