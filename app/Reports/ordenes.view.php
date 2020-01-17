<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Ordenes</h1>
        <?php
           Table::create([
            "dataSource"=>$this->dataStore("ordenes")
        ]);
        
        return $this->dataStore("ordenes");
        ?>
    </body>
</html> 