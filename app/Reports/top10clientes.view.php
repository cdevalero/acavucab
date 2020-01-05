<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Top 10 Clientes</h1>
        <?php
            \koolreport\widgets\google\columnchart::create(array(
                "dataSource"=>$this->dataStore("top10clientes")
            ));
        ?>
    </body>
</html> 