<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Top 10 Cervezas mas vendidas</h1>
        <?php
            \koolreport\widgets\google\columnchart::create(array(
                "dataSource"=>$this->dataStore("top10cervezas")
            ));
            Table::create([
                "dataSource"=>$this->dataStore("top10cervezas")
            ]);
        ?>
    </body>
</html> 