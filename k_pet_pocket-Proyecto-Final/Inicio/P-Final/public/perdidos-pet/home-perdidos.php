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
    <link rel="stylesheet" href="../xdiseño/css/home.css">
    <link rel="stylesheet" href="../xdiseño/css/noticias.css">


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <title>Pet-Pocket - Home - Perdidos</title>
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

                    <p class="font-weight-bold nombre_perfil text-dark"><?php echo "" . $_SESSION['username'] . ""; ?>
                    </p>

                </center>
            </div>
            <div class="menu bg-primary">
                <a href="../home-principal/home-principal.php" class="d-block text-dark p-3 border-0"><i
                        class="fa fa-home mr-4"></i>
                    Home</a>

                <a href="../tienda-pet/home-tienda.php" class="d-block text-dark p-3 border-0"><i
                        class="fas fa-shopping-bag mr-4"></i>
                    Tienda Pet</a>

                <a href="../adopcion-pet/home-adopcion.php" class="d-block text-dark p-3 border-0"><i
                        class="fas fa-paw mr-4"></i>
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="dropdown-item" href="../perfil-pet/perfil.php"><i
                                            class="fas fa-user mr-2"></i>Mi perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                        href="http://localhost/k_pet_pocket-Proyecto-Final/Inicio/logout.php"><i
                                            class="fas fa-sign-out-alt mr-2"></i>Cerrar
                                        sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <div id="content" class="bg-grey w-100">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 my-4">
                                <div class="card rounded-2">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label id="pstr" for="">¿Publica a tu amigo perdido?</label>
                                            <div class="card" id="post">
                                                <i class="fas fa-comment-alt fa-lg" id="coment"></i> <a
                                                    href="post-foto-perdidos.php" id="enPost">Detalla aqui a la mascota que
                                                    perdiste..</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Seccion while -->
                                <?php
    include("../../../config.php");

    $query = "SELECT * FROM tabla_perdidos";
    $resultado = $conn->query($query);
    while ($row = $resultado->fetch_assoc()) {   
    ?>
                                    <div class="card rounded-2">
                                        <div class="card-body">
                                            <div class="header">
                                                <img src="../xdiseño/assets/img/userA.jpg" id="imgCard" alt="">
                                                <a href="../perfil-pet/perfil.php" id="nameUser">Adop a Pet</a>
                                          
                                                <br>
                                                <div class="comentUser">
                                                    <label class="" id="tl" for="">Nombre: <?php echo $row['nombre_mascota']; ?>
                                                    </label>
                                                    <br>
                                                    <label class="" id="tl" for="">Tipo de mascota: <?php echo $row['tipo_mascota']; ?>
                                                    </label>
                                                    <br>
                                                    <label class="" id="tl" for="">Raza de la mascota: <?php echo $row['raza_mascota']; ?>
                                                    </label>
                                                    <br>
                                                    <label class="" id="tl" for="">Contacto: <?php echo $row['contacto']; ?>
                                                    </label>
                                                    <br>
                                                    <label class="" id="tl" for="">Descripcion general:
                                                        <br> <?php echo $row['descripcion']; ?>
                                                    </label>

                                                </div>
                                                <br>
                                                <center>
                                                    <a href="detalle-foto-perdido.php" class="mt-4">
                                                        <img class="mx-auto d-block img-fluid" id="imgPost" alt=""
                                                            src="data:image/jpg;base64,<?php echo base64_encode ($row['imagen']); ?>">

                                                    </a>
                                                </center>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <a href="" id="itm"><i class="fas fa-heart"></i> Me gusta </a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="" id="itm"><i class="fas fa-comment"></i> Comentar </a>
                                                </div>
                                                <div class="col-3">
                                                <a id="itm" href="eliminar.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                   
                </section>
                <?php
    }
    ?>
        </div>

    </div>
    </div>

    <div class="row">
        <div class="col-lg-2">
            <div class="row">
                <div class="col-2" id="not">
                    <div class="search">
                        <i id="i" class="fas fa-search"></i>
                        <input class="form-control" id="search" placeholder="Busca aqui..." type="text"
                            aria-label="Search">
                    </div>
                    <div class="info">
                        <h5 class="mt-1 ml-3">Pet Recomendaciones</h5>
                        <div class="card mt-3" id="cardInfo">
                            <p> Recuerda que debes sacar a tu mascota por lo menos una hora diariaria </p>
                        </div>
                    </div>
                    <br>
                    <div class="tienda">
                        <h5 id="title2"> Pet Tienda</h5>
                        <div class="card1">
                            <div class="cardImg">
                                <a href="home-tienda.html"><img src="../xdiseño/assets/img/j1.jpg" id="produc" alt=""></a>
                                <div class="infor">
                                    <h6>Chompa</h6>
                                    <p>$20.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="card2">
                            <div class="cardImg">
                                <a href="home-tienda.html"> <img src="../xdiseño/assets/img/j2.jpg" id="produc" alt=""></a>
                                <div class="infor">
                                    <h6 class="mr-3">Hueso Goma</h6>
                                    <p>$4.00</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
    <script src="../xdiseño/js/store-pet/filtro-categories.js"></script>
    

</body>

</html>