<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | Login</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../js/login.js"></script>
    <link rel="stylesheet" href="../../css/animado.css">
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  <h1></h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Noticias</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li style="margin-left: 10px; ">
          <button type="button" class="btn btn-success" onclick="location.href='register.php';">Registrarse</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<center>
<div class="card text-dark bg-light mb-3" style="max-width: 22rem; margin-top: 150px;">
  <div class="card-header">Iniciar Sesión</div>
  <div class="card-body text-secondary">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="mb-3 input-group">
                <input ID="txtPassword" type="Password" Class="form-control">
                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
            </div>
           <center style="margin-top: 10px; margin-bottom: 10px;"> <button type="submit" class="btn btn-primary">Iniciar Sesión</button></center>
        </form>
        <button type="button" class="btn btn-success" onclick="location.href='register.php';">Registrarse</button>
        <button type="button" class="btn btn-warning" onclick="location.href='lostpass.php';">Olvidé la contraseña</button>
  </div>
</div>
</center>


    
</body>
</html>