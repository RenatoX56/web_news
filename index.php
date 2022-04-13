<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | Inicio</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Noticias</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Introduce un tema..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li style="margin-left: 10px; ">
          <form action="login.php">
          <input type="submit" value="Iniciar Sesión" class="btn btn-success"/>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="card" style="margin:50px;">
  <div class="card-header">
    Ultimo Minuto
  </div>
  <div class="card-body">
    <h5 class="card-title">Title</h5>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid, voluptas! Inventore veritatis iste illum? Tenetur sint quam at accusantium adipisci beatae. Perspiciatis error repudiandae atque expedita voluptatum saepe unde ducimus!</p>
    <a href="#" class="btn btn-primary">Ver Más</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin:50px;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lore ipsum</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, reprehenderit sit voluptatibus tempora esse laboriosam aliquid quasi sequi nostrum! Totam cupiditate eaque odio a repudiandae. Dicta nobis eum et unde.</p>
    <a href="#" class="btn btn-primary">Ver Más</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin:50px;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lore ipsum</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, reprehenderit sit voluptatibus tempora esse laboriosam aliquid quasi sequi nostrum! Totam cupiditate eaque odio a repudiandae. Dicta nobis eum et unde.</p>
    <a href="#" class="btn btn-primary">Ver Más</a>
  </div>
</div>

    
</body>
</html>