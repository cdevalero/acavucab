<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Ordenes</h1>
        <?php
            \koolreport\widgets\google\barchart::create(array(
                "dataSource"=>$this->dataStore("ordenes")
            ));
        ?>
    </body>
</html> 