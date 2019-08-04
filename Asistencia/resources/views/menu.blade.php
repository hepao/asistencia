<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #1d68a7;
        }
        h1{
            padding: 50px;
            margin: 50px;
            font-family: sans-serif;
            font-size: 70px;
            color: #f9f9f9;
        }

        a{
            padding: 20px;
            margin: 20px;
            border: 1px solid;
            font-family: sans-serif;
            color: #1d68a7;
            background-color: #f9f9f9;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 50px;
            font-size: 20px;
        }

        ·pepe{
            padding: 10px;
            margin: 10px;
        }

    </style>
</head>
<body>
<center>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="css/inicio.jpg" alt="" style="height: 400px; padding: 30px; margin: 30px">
            </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('route.registrar')}}">Registrar nueva asitencia</a>
                    <br><br><br><br>
                    <a href="" class="">Ver asistencia</a>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            <a href="">Salir</a>
        </div>
    </div>
</center>
</body>
</html>