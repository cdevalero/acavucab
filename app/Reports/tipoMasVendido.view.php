<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Cerveza Mas vendida</h1>
        <?php
            \koolreport\widgets\google\piechart::create(array(
                "dataSource"=>$this->dataStore("tipoMasVendido")
            ));
            Table::create([
                "dataSource"=>$this->dataStore("tipoMasVendido")
            ]);
        ?>
    </body>
</html> 