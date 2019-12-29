<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inicio de acavucab</h1>
    <br>
    @if ($cerveza1 <> NULL)
        <h2>{{$cerveza1 ->nombre}}</h2>
        <br>
    @endif
    @if ($cerveza2 <> NULL)
        <h2>{{$cerveza2 ->nombre}}</h2>
        <br>
    @endif
    @if ($cerveza3 <> NULL)
        <h2>{{$cerveza3 ->nombre}}</h2>
        <br>
    @endif
</body>
</html>