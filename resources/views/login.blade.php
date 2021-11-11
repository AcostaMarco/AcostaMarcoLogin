<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .header-b{
            background-color:khaki
        }
        .nav-b{
            background-color:lightblue
        }
        .content-b{
            background-color:mediumpurple
        }
        .footer-b{
            background-color:pink
        }
    </style>
</head>
<body class="header-b">
    <div>
        <h1>Ingresa a tu cuenta<h1>
    </div>

    <nav class="nav-b">
      <h2>Rellena los datos:</2>
    </nav>

    <div class="content-b">

    <form action="{{route('sesion')}}" method="POST">
    {{csrf_field()}}
    <div class="ab-3">
       <label for="inuser" class="form-label">Usuario</label>
       <input type="text" class="form-control" name="inuser" id="inuser">
    </div>
    <div class="ab-3">
       <label for="inpass" class="form-label">Contraseña</label>
       <input type="password" class="form-control" name="inpass" id="inpass">
    </div>
       <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>

    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
<footer class="footer-b">
Elaborado por Acosta Sanchez Marco Antonio 5-F
</footer>