<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> /* Lo más recomendable para definir la estructura del email es definir el estilo explícitamente en la vista, para evitar que se pierda*/
        h1{
            color: rgb(27, 83, 27);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Hola {{ $name }}</h1>
    <p>This is an example mail</p>
</body>
</html>