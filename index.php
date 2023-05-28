
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de abarrotes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
  </head>
<body class="fondoindex">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <?php include("recursos/header.html");?>


<section> 
  <!--Carrucel de Ofertas pantallas pequeñas-->
  <div id="carouselExample" class="carousel slide d-block d-md-none">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1peq.png" class="d-block mx-auto img-fluid " alt="promo1">
      </div>
      <div class="carousel-item">
        <img src="img/prueba.png" class="d-block mx-auto img-fluid" alt="promo2">
      </div>
      <div class="carousel-item">
        <img src="img/prueba.png" class="d-block mx-auto img-fluid" alt="promo3">
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
  <!--Carrucel de Ofertas-->
  <div id="carouselExample2" class="carousel slide d-none d-md-block">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/2.png" class="d-block mx-auto img-fluid " alt="promo1">
      </div>
      <div class="carousel-item">
        <img src="img/3.png" class="d-block mx-auto img-fluid" alt="promo2">
      </div>
      <div class="carousel-item">
        <img src="img/4.png" class="d-block mx-auto img-fluid" alt="promo3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

    


<?php
include("recursos/footer.html");
?>

</body>
</html>