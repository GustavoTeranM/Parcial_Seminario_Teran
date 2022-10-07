<?php
include 'conexion/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CINEMA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</head>

<body background="img/f3.jpg">

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">CINEMA </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Peliculas </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">AYUDA </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="text-center">
    <h2>CINEMARK IPIALES</h2>
  </div>


  <div class="container text-center p-5">
    <div class="row justify-content-center">
      <div class="col-sm-5 text-center">
        <form action="" method="POST">


          <div class="mb-3">
            <label for="cod" class="form-label">Id pelicula</label>
            <input type="text" class="form-control" id="idpelicula" name="idpelicula" />
          </div>
          <div class="mb-3">
            <label for="autor" class="form-label">Nombre Pelicula</label>
            <input type="text" class="form-control" id="nombre" name="nombre" />
          </div>
          <div class="mb-3">
            <label for="nomlib" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" />
          </div>
          <div class="mb-3">
            <label for="cant" class="form-label">Numero de voletas </label>
            <input type="number" class="form-control" id="numvoletas" name="numvoletas" />
          </div>

          <?php
                          #comprobar si los campos estan vacios o no 
                            if (!empty($_POST)) {

                                if (empty($_POST['idpelicula']) || empty($_POST['nombre'])|| empty($_POST['precio'])|| empty($_POST['numvoletas'])) {
                            ?>
          <script>
          alert("Todos los campos son obligatorios")
          </script>
          <?php
                                } else {

                                    $id = $_POST["idpelicula"];
                                    $nombre = $_POST["nombre"];
                                    $precio = $_POST["precio"];
                                    $numvoletas = $_POST["numvoletas"];
                                    $llenartabla = "INSERT INTO cinema (idpelicula,nombre,precio,numvoletas ) values('$id','$nombre','$precio','$numvoletas')";
                                    if ($conexion->query($llenartabla) === TRUE) {
                                    ?>
          <script>
          alert("REGISTRO CORRECTO")
          </script>
          <?php  } else {
                                    ?>
          <script>
          alert("REGISTRO INCORRECTO")
          </script>
          <?php
                                    }
                                }
                            }
                            ?>
          <input class="btn btn-success" type="submit" value="Registrarme">

        </form>
      </div>
    </div>
  </div>
  <div class="container text-center py-5">
    <div class="row align-items-start">
      <div class="col">
        <button type="button" class="btn btn-warning">Opción 2</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-danger">Opción 3</button>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="container-fluid bg-secondary text-center p-3 text-light">
      <p class="small">
        &copy; Todos los derechos reservados Cinemark Ipiales
      </p>
      <p class="small">2022</p>
    </div>
  </div>
</body>

</html>