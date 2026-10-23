<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4to Mñ Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Bienvenidos a la página de inicio</h1>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="productos.php">PRODUCTOS</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/imagen1.jpeg" class="d-block w-100" alt="Imagen 1">
    </div>
    <div class="carousel-item">
      <img src="img/imagen2.jpeg" class="d-block w-100" alt="Imagen 2">
    </div>
    <div class="carousel-item">
      <img src="img/imagen3.jpeg" class="d-block w-100" alt="Imagen 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="img/hot.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels Formula 1</h5>
    <p class="card-text">Auto moderno de la fórmula 1 de la serie Hot Wheels.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="img/hot2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels Invierno?</h5>
    <p class="card-text">Auto hot wheels estilo trineo de las olimpiadas de invierno?.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="img/hot3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels Ford</h5>
    <p class="card-text">Auto Hot Wheels Ford Mustang.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/hot4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels Pack</h5>
    <p class="card-text">Pack de autos Hot Wheels, modernos y clasicos.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/hot5.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels Pack</h5>
    <p class="card-text">Autos hot wheels, miticos.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/hot6.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels</h5>
    <p class="card-text">Auto Hot Wheels especial descuento de dia del padre.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="img/hot7.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels race</h5>
    <p class="card-text">Pack de carreras Hot Wheels, el pack solo contiene la pista y un auto.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="img/hot8.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels fire</h5>
    <p class="card-text">Pack de carreras completa, con mas de 5 autos y una mega pista.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="img/hot9.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hot Wheels clasico</h5>
    <p class="card-text">Auto clasico y de coleccion de hot wheels.</p>
    <a href="#" class="btn btn-primary">Ver Producto</a>
  </div>
</div>
    </div>
  </div>
</div>
</body>
</html>