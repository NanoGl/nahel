<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1 {
            color: #00134B;
        }

        body {
            font-family: Arial;
            background-color: #ffffff;
        }

        #card {
            padding-top: 0.25rem;
            padding-right: 1rem;
            padding-bottom: 1rem;
            padding-left: 1rem;
            margin: 0 1rem 1rem 1rem;
            border-radius: 0 0 0.75rem 0.75rem;
            background-color: #f6f6f6;
        }

        #img {
            padding: 1rem;
            margin: 1rem 1rem 0 1rem;
            border-radius: 0.75rem 0.75rem 0 0;
            background-color: #00134B;
        }

        #img img {
            max-width: 33%;
        }

        .btn{
          border-radius: 0.5rem;
          padding: 0.75rem;
          background-color: #00134B;
          color: white;
          text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="img">
        <img src="{{ $message->embed(public_path('images/store/NAHEL_NUEVO.png')) }}" alt="">
    </div>
    <div id="card">
        <h1>
            Nueva solicitud de contacto:
        </h1>
        <p>
            <strong>
                Nombre completo:
            </strong>
            <br>
            {{ $data['name'] . ' ' . $data['last_name'] }}
        </p>
        <p>
            <strong>
                Correo:
            </strong>
            <br>
            {{ $data['email'] }}
        </p>
        <p>
            <strong>
                Teléfono:
            </strong>
            <br>
            {{ $data['phone'] }}
        </p>
        <p>
            <strong>
                Mensaje:
            </strong>
            <br>
            {{ $data['message'] }}
        </p>
        <div style="margin-top: 40px; margin-bottom: 20px">
            <a class="btn"
                href="mailto:{{ $data['email'] }}?subject={{ rawurlencode('Respuesta a tu contacto') }}&body={{ rawurlencode('Hola ' . $data['name'] . ' ' . $data['last_name'] . ", te estamos contactando por tu mensaje: \n--------------------------------------------\n" . $data['message'] . "\n--------------------------------------------\nNuestra respuesta: ") }}">
                Responder
            </a>
        </div>
    </div>
</body>

</html>
