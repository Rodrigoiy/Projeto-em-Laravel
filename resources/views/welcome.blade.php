<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    
    <h1>Bem vindo!</h1>

    <p>Data atual:{{ Carbon\Carbon::now()-> format('d,m,Y H:i:s') }}</p>

</body>
</html>