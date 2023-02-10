<?php
   /*tipos de variables*/ 
   $string = "TEXTO";
   $int = 1;
   $suma = 1+1;
   echo $suma;
   $rest = 16-6;
   echo $rest;
   $mult = 8*10;
   echo $mult;
   $divic = 15/3;
   echo $divic;

   /*Condicionales*/
   $a = 1;
   $b = 2;
  if ($a > $b){
    $resultado = "Es menor";
  }
  else{
    $resultado = "Es mayor";
  }
  elseif ($a=$b) {
    $resultado = "Es igual";
  }

  /*Ciclos*/
  $c = 0;
  while ($c <= 10) {
    $c++;

    if ($c = 4) {
      $texto = "Gano";
    }
  }

  //Ejercicio - ingrese 15 notas del 1 al 5 y texto segun la nota
  $nota = 1;
  while ($nota <= 15) {

    if ($nota<1 ) {
      $resultado = "no se aceptan numeros menores a 1 ";
    }
    if ($nota>1 && $nota<3) {
      $resultado = "perdio";
    }

    if ($nota=3) {
      $resultado = "paso raspado";
    }

    if ($nota=4 ) {
      $resultado = "bien ";
    }

    if ($nota=5 ) {
      $resultado = "superior ";
    }

    if ($nota=10 ) {
      $resultado = "Aprovado ";
    }
    $nota++;

  }
  

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>hola mundo!</title>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>

      <div class="row">
        <div class="col-3">
          <ul class="list-group">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
          </ul>
        </div>

        <div class="col-6">
          <div class="card" style="width: 18rem;">
            <img src="../proyecto/images/el ema edward.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-3">
          <ul class="list-group">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
          </ul>
        </div>
      </div>
    </div>

    
  </body>
</html>