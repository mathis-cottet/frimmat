<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="blackBack">
    <!-- HEADER -->
    <?php include "assets/layouts/header.html" ?>
    <?php include "assets/layouts/contact.php" ?>
    <?php include "assets/layouts/about.html" ?>
      <div class="carousel">
        <ul class="carousel__list">
          <li class="carousel__item" data-pos="-2">1</li>
          <li class="carousel__item" data-pos="-1">2</li>
          <li class="carousel__item" data-pos="0">3</li>
          <li class="carousel__item" data-pos="1">4</li>
          <li class="carousel__item" data-pos="2">5</li>
        </ul>
    </div>
  </div>
  <div>
    <img></img>
  </div>

  <script src="javascript/header.js"></script>
  <script src="javascript/carousel.js"></script>
  <script src="javascript/show.js"></script>
</body>
</html>

