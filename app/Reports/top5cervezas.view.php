<?php
use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
    
    </head>
    <body>
    <h1>Top 5 en eventos</h1>
        <?php
            \koolreport\widgets\google\columnchart::create(array(
                "dataSource"=>$this->dataStore("top5cervezas")
            ));
        ?>
    </body>
</html> 