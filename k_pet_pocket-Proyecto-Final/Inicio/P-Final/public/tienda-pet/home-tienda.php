<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/k_pet_pocket-Proyecto-Final/Inicio/index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="../xdiseño/css/style.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <title>Pet-Pocket - tienda</title>
</head>

<body>
  <div class="d-flex" id="content-wrapper">
    <!-- Sidebar -->
    <div id="sidebar-container" class="">
      <div class="logo bg-primary">
        <h2 class="text-dark text-center font-weight-bold mb-0">Pet Pocket</h2>
      </div>
      <div class="bck_perfil bg-primary">
        <center>
          <img src="../xdiseño/assets/prfil.jpg" />

          <p class="font-weight-bold nombre_perfil text-dark"><?php echo "" . $_SESSION['username'] . ""; ?></p>
        </center>
      </div>
      <div class="menu bg-primary">
        <a href="../home-principal/home-principal.php" class="d-block text-dark p-3 border-0"><i class="fa fa-home mr-4"></i>
          Home</a>

        <a href="../tienda-pet/home-tienda.php" class="d-block text-dark p-3 border-0"><i class="fas fa-shopping-bag mr-4"></i>
          Tienda Pet</a>

        <a href="../adopcion-pet/home-adopcion.php" class="d-block text-dark p-3 border-0"><i class="fas fa-paw mr-4"></i>
          Adopción</a>
        <a href="#" class="d-block text-dark p-3 border-0"><i class="fas fa-user-md mr-4"></i>
          Veterinaria</a>
      </div>
    </div>
    <!-- Fin sidebar -->
    <!-- Navbar -->
    <div class="w-100">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown mt-1">
                <img src="../xdiseño/assets/prfil.jpg" class="img-fluid rounded-circle avatar mr-2" />
                <?php echo "" . $_SESSION['username'] . ""; ?>
              </li>
              <li class="nav-item dropdown mt-1">
                <a class="dropdown-item" href=""><i class="fas fa-bell"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../perfil-pet/perfil.php"><i class="fas fa-user mr-2"></i>Mi perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="http://localhost/k_pet_pocket-Proyecto-Final/Inicio/logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Cerrar
                    sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->

      <div id="content" class="bg-grey w-100">
        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h3 class="mt-3 font-weight-bold">Categorias</h3>
              </div>
              <div class="col-lg-3 col-md-4 d-flex">
                <div class="align-self-end mb-1">
                  <button class="btn btn-info w-100 align-self-center categoryItem" category="todos"><i
                      class="fas fa-tags mr-2"></i>Ver Todos</button>
                </div>
                <div class="dropdown align-self-end mb-1">
                  <button class="dropdown-toggle btn btn-default btn-sinborde px-5" type="button" id="cambio_icono"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                    <a href="mis-productos.php"><button class="dropdown-item" type="button"><i
                          class="fas fa-store mr-2"></i>Mis Productos</button></a>
                  </div>
                </div>

                <!--<button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>-->
              </div>
            </div>
          </div>
        </section>

        <section class="py-3">
          <div class="container">
            <div class="card rounded-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-md-6 d-flex stat" id="">
                    <div class="mx-auto" id="banner">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria1/juguetes1.jpg" alt="Juguete 1">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria1/juguetes2.jpg" alt="Juguete 2">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria1/juguetes3_.jpg" alt="Juguete 3">
                          </div>
                        </div>
                        <div class="contenedor">
                          <h3 class="font-weight-bold">Juguetes</h3>
                        </div>
                      </div>
                      <button class="btn btn-info w-100 align-self-center mt-3 categoryItem" category="juguetes"><i
                          class="far fa-arrow-alt-circle-down mr-1"></i>Ver más...</button>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat" id="">
                    <div class="mx-auto" id="banner">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria2/ropa1.jpg" alt="Ropa 1">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria2/ropa2.jpg" alt="Ropa 2">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria2/ropa3.jpg" alt="Ropa 3">
                          </div>
                        </div>
                        <div class="contenedor">
                          <h3 class="font-weight-bold">Ropa</h3>
                        </div>
                      </div>
                      <button class="btn btn-info w-100 align-self-center mt-3 categoryItem" category="ropa"><i
                          class="far fa-arrow-alt-circle-down mr-1"></i>Ver más...</button>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat" id="">
                    <div class="mx-auto" id="banner">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria3/comida1.jpg" alt="Comida 1">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria3/comida2.jpg" alt="Comida 2">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria3/comida3.jpg" alt="Comida 3">
                          </div>
                        </div>
                        <div class="contenedor">
                          <h3 class="font-weight-bold">Comida</h3>
                        </div>
                      </div>
                      <button class="btn btn-info w-100 align-self-center mt-3 categoryItem" category="comida"><i
                          class="far fa-arrow-alt-circle-down mr-1"></i>Ver más...</button>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat" id="">
                    <div class="mx-auto" id="banner">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria4/articulo1.jpg" alt="Articulo 1">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria4/articulo2.png" alt="Articulo 2">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="../xdiseño/assets/categoria4/articulo3.jpg" alt="Articulo 3">
                          </div>
                        </div>
                        <div class="contenedor">
                          <h3 class="font-weight-bold">Articulos</h3>
                        </div>
                      </div>
                      <button class="btn btn-info w-100 align-self-center mt-3 categoryItem" category="articulos"><i
                          class="far fa-arrow-alt-circle-down mr-1"></i>Ver más...</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h3 class="mt-3 font-weight-bold">Todos los Productos</h3>
              </div>
            </div>
          </div>
        </section>

        <section class="py-3">
          <div class="container" id="">
            <div class="card rounded-0">
              <div class="card-body img_categories">
                <div class="row" id="">
                  <div class="col-lg-3 col-md-6 stat d-flex flex-wrap" id="">
                    <div class="mx-auto" id="">
                      <div class="card product_item" id="imagenes-productos" category="articulos">
                        <a href="informacion-producto.html"><img class="card-img-top" src="../xdiseño/assets/mis productos/collares.jpg" alt=""></a>
                        <div class="card-body">
                          <div class="">
                            <h6 class="card-title font-weight-bold mt-1">Collares</h6>
                          </div>
                          <div class="align-self-center">
                            <h5 class="d-inline-block mb-0">$ 8.50</h5>
                            <p class="d-block text-muted"><i class="fas fa-map-marker-alt mr-2"></i>Quito, Pichincha</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 stat d-flex flex-wrap" id="">
                    <div class="mx-auto">
                      <div class="card product_item" id="imagenes-productos" category="ropa">
                        <img class="card-img-top" src="../xdiseño/assets/all-Categorias/camisas_clasicas-ropa.jpg" alt="">
                        <div class="card-body">
                          <div class="">
                            <h6 class="card-title font-weight-bold mt-1">Camisas clásicas</h6>
                          </div>
                          <div class="align-self-center">
                            <h5 class="d-inline-block mb-0">$ 10.50</h5>
                            <p class="d-block text-muted"><i class="fas fa-map-marker-alt mr-2"></i>Quito, Pichincha</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 stat d-flex flex-wrap" id="">
                    <div class="mx-auto">
                      <div class="card product_item" id="imagenes-productos" category="comida">
                        <img class="card-img-top" src="../xdiseño/assets/all-Categorias/alcon-comida.jpg" alt="">
                        <div class="card-body">
                          <div class="">
                            <h6 class="card-title font-weight-bold mt-1">Alcon</h6>
                          </div>
                          <div class="align-self-center">
                            <h5 class="d-inline-block mb-0">$ 20.50</h5>
                            <p class="d-block text-muted"><i class="fas fa-map-marker-alt mr-2"></i>Quito, Pichincha</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 stat d-flex flex-wrap" id="">
                    <div class="mx-auto">
                      <div class="card product_item" id="imagenes-productos" category="juguetes">
                        <img class="card-img-top" src="../xdiseño/assets/all-Categorias/kit_juguetes.jpg" alt="">
                        <div class="card-body">
                          <div class="">
                            <h6 class="card-title font-weight-bold mt-1">Kit juguetes</h6>
                          </div>
                          <div class="align-self-center">
                            <h5 class="d-inline-block mb-0">$ 6.50</h5>
                            <p class="d-block text-muted"><i class="fas fa-map-marker-alt mr-2"></i>Quito, Pichincha</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="https://kit.fontawesome.com/f5f7905918.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  <script src="..xdiseño//js/store-pet/filtro-categories.js"></script>

</body>

</html>