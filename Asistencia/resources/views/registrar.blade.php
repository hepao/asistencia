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
        label{
            padding: 10px;
            margin: 10px;
            border: 1px solid;
            font-family: sans-serif;
            color: #1d68a7;
            background-color: #f9f9f9;
            text-decoration: none;
            font-size: 20px;
            align-items: ;
        }
        input, textarea, select, button {
            width : 150px;
            margin: 0;

            -webkit-box-sizing: border-box; /* For legacy WebKit based browsers */
            -moz-box-sizing: border-box; /* For legacy (Firefox <29) Gecko based browsers */
            box-sizing: border-box;
        }
    </style>
</head>
<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" align="center">
                <img src="css/inicio.jpg" alt="" style="height: 400px; padding: 30px; margin: 30px">
            </div>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <form action="/my-handling-form-page" method="post" >
                        action="{{route('route.contacto/store')}}" method="POST">
                        <div>
                            <label for="fecha">Fecha:</label>
                            <input type="text" id="fecha" name="" />

                        </div>
                        <br>
                        <br>

                        <div>
                            <label for="menu">Jornada:</label>
                            <select name="menu">
                               @foreach($jornadas as $jornada)
                                    <option value="{{ $jornada->id_jornada }}">{{ $jornada->nombre_jornada }}</option>
                                   @endforeach
                            </select>
                        </div>
                        <br>
                        <br>

                        <div>
                            <label for="menu">Ficha:</label>
                            <select name="menu">
                                @foreach($fichas as $ficha)
                                    <option value="{{ $ficha->id_ficha }}">{{ $ficha->numero_ficha }}></option>
                                    @endforeach
                            </select>
                        </div>
                        <br>
                        <br>

                        <div>
                            <label for="menu">Cantidad asistentes:</label>
                            <select name="menu">

                            </select>
                        </div>
                        <br><br><br>

                        <a href="{{route('route.registrado')}}">Registrar asistencia</a>
                    </form>
            </div>
            <br><br><br><br><br>
            <a href="">Salir</a>
        </div>
    </div>

</body>
</html>