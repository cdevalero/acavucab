<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$db = pg_connect("host=localhost port=5432 dbname=git user=postgres password=1234");

$handle = fopen($_FILES["uploaded"]["tmp_name"], "r");
if ($handle)
{
while (($line = fgets($handle)) !== false) 
    {
     $lineArr = explode("|", "$line");
     var_dump($lineArr);
                
     list($codigo_falta,$tipo,$fecha,$fk_falta_empleado) = $lineArr;

     $query_insert = "INSERT INTO falta (codigo_falta,tipo,fecha,fk_falta_empleado) VALUES ('$codigo_falta','$tipo','$fecha','$fk_falta_empleado')";
    
     $insert = pg_query($query_insert);
    }   
}
$content.= <<<EOF
<form enctype="multipart/form-data" action="" method="post">
    File:<input name="uploaded" type="file" maxlength="20" /><input type="submit" name="upfile" value="Upload File">
</form>
EOF;
echo $content;
?>
</body>
</html>