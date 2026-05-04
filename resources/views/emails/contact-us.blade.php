<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
            /* color: #00134B; */
            color: blue;
        }
    </style>
</head>
<body>
    <h1>
        Nueva solicitud de contacto:
    </h1>
    <p>
        <strong>
            Nombre completo: 
        </strong>
        {{ $data['name'] . " " . $data['last_name'] }}
    </p>
    <p>
        <strong>
            Correo: 
        </strong>
        {{ $data['email'] }}
    </p>
    <p>
        <strong>
            Teléfono: 
        </strong>
        {{ $data['phone'] }}
    </p>
    <p>
        <strong>
            Mensaje: 
        </strong>
        {{ $data['message'] }}
    </p>
</body>
</html>