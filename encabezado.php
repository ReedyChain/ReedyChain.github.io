<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nutricion</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/Logo.jpg" alt="Logo de nutricion" width="70" height="80" class="d-inline-block align-text-top me-2">
            CALL OF DUTY
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="Tema1.php" aria-current="page" href="Tema1.php">Tema1</a>
                </li>
                <li class="nav-item">
                    <a class="login/Tema2.php" href="Tema2.php">Tema2</a>
                </li>
                <li class="nav-item">
                    <a class="login/Tema3.php" href="Tema3.php">Tema3</a>
                </li>
               
               
            </ul>
          
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-item" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/logo.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <<img src="img/descarga.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/login/lalala.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</br>
<div class="container">
    <div class="card">
    <figure>
        <img src="lalala.jpg">
    </figure>
        <h3>COD</h3>
        <p> Call of Duty: Black Ops II es un videojuego de disparos en primera persona desarrollado por Treyarch
y distribuido por Activision en 2012. 
<a href="https://www.callofduty.com/es/blackops2"> Leer mas</a>
    

    </div>
    <div class="card">
    <figure>
        <img src="img/logo.jpg">
    </figure>
        <h3>COD 2023</h3>
        <p> FECHA DE LANZAMIENTO DE CALL OF DUTY: MODERN WARFARE 3 (2023) </p>
<a href="https://www.youtube.com/watch?v=CEeVm-dGVKQ"> Leer mas</a>
    

    </div> <div class="card">
    <figure>
        <img src="lalala.jpg">
    </figure>
        <h3>COD</h3>
        <p> Activision publicó el primer avance de Call of Duty: Modern Warfare 3,
             la próxima entrega del juego de disparos en primera persona. 
<a href="https://hipertextual.com/2023/08/call-of-duty-modern-warfare-3-recrea-escena-polemica-videojuegos"> Leer mas</a>
    

    </div>
</div>
<div class="container">
<?php 
    $errorMensaje = $_GET['errorMensaje'] ?? null;
    $successMensaje = $_GET['successMensaje'] ?? null;
?>
<?php if($errorMensaje): ?>
    <br/><br/>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error:</strong> <?php echo htmlspecialchars($errorMensaje); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


    <?php endif; ?>
    <?php if($successMensaje): ?>
    <br/><br/>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Mensaje:</strong> <?php echo htmlspecialchars($successMensaje); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif;?>
</div>
