<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivo</title>
</head>
<body>
    <form enctype="multipart/form-data" action="data_archivo" method="post">
    @csrf
        File:<input name="uploaded" type="file" maxlength="20" /><input type="submit" name="upfile" value="Upload File">
    </form>
</body>
</html>