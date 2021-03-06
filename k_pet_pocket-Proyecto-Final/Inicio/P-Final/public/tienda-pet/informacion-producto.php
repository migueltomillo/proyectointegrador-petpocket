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

    <!-- Lightbox -->
    <link rel="stylesheet" href="../xdiseño/css/box/lightbox.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <title>Pet Pocket - Información del Producto</title>
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

                    <p class="font-weight-bold nombre_perfil text-dark"> <?php echo "" . $_SESSION['username'] . ""; ?></p>
                </center>
            </div>
            <div class="menu bg-primary">
                <a href="../home-principal/home-principal.php" class="d-block text-dark p-3 border-0"><i class="fa fa-home mr-2"></i>
                    Home</a>

                <a href="../tienda-pet/home-tienda.php" class="d-block text-dark p-3 border-0"><i class="fas fa-shopping-bag mr-2"></i>
                    Tienda Pet</a>

                <a href="../adopcion-pet/home-adopcion.php" class="d-block text-dark p-3 border-0"><i class="fas fa-paw mr-2"></i>
                    Adopción</a>
                <a href="#" class="d-block text-dark p-3 border-0"><i class="fas fa-user-md mr-2"></i>
                    Veterinaria</a>
            </div>
        </div>
        <!-- Fin sidebar -->
        <!-- Navbar -->
        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown mt-1">
                                <img src="../assets/prfil.jpg" class="img-fluid rounded-circle avatar mr-2" />
                                <label class="text-dark"><?php echo "" . $_SESSION['username'] . ""; ?></label>
                            </li>
                            <li class="nav-item dropdown mt-1">
                                <a class="dropdown-item" href=""><i class="fas fa-bell"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Mi perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="http://localhost/k_pet_pocket-Proyecto-Final/Inicio/logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión</a>
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
                                <h3 class="mt-3 font-weight-bold">Información del Producto</h3>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active img-carrousel">
                                                    <a href="../assets/mis productos/collares.jpg"
                                                        data-lightbox="infor"><img class="d-block w-100"
                                                            src="../xdiseño/assets/mis productos/collares.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-item img-carrousel">
                                                    <a href="../assets/informacion del producto/collar1.jpg"
                                                        data-lightbox="infor"><img class="d-block w-100"
                                                            src="../xdiseño/assets/informacion del producto/collar1.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="carousel-item img-carrousel">
                                                    <a href="../xdiseño/informacion del producto/collar2.jpg"
                                                        data-lightbox="infor"><img class="d-block w-100"
                                                            src="../xdiseño/assets/informacion del producto/collar2.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev text-primary"
                                                href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h3 class="font-weight-bold mb-0">Collares</h3>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="d-flex border-bottom py-1">
                                            <div class="align-self-center">
                                                <h5 class="d-inline-block mb-0 font-weight-bold">$ 8.50</h5>
                                                <p class="d-block text-muted">Articulos</p>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-1">
                                            <div class="align-self-center">
                                                <h5 class="d-inline-block mb-0 font-weight-bold">Descripción</h5>
                                                <p class="d-block text-muted">Tenemos de todos los colores y tamaños.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-1">
                                            <div class="align-self-center">
                                                <h5 class="d-inline-block mb-0 font-weight-bold">Información del
                                                    Vendedor</h5>
                                                <div class="float-left d-block text-muted">
                                                    <p>Alex Castro</p>
                                                </div>
                                                <div class="float-right d-block text-muted">
                                                    <p>098744198</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-1">
                                            <div class="align-self-center">
                                                <h5 class="d-inline-block mb-0 font-weight-bold">Ubicación</h5>
                                                <p class="d-block text-muted">Quito, Pichincha</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-info w-100"><i
                                                class="fas fa-user-friends mr-2"></i>Perfil del vendedor</button>
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
    <script src="../js/box/lightbox-plus-jquery.min.js"></script>
</body>

</html>