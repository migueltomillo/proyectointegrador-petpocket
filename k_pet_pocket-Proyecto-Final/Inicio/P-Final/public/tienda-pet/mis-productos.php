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

    <title>Pet Pocket - Mis Productos</title>
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
                                <label class="text-dark"> <?php echo "" . $_SESSION['username'] . ""; ?></label>
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
                                <h3 class="mt-3 font-weight-bold">Mis Productos</h3>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button
                                    class="btn btn-default w-100 text-primary align-self-end mb-1 font-weight-bold btn-sinborde"
                                    data-toggle="modal" data-target="#exampleModalCenter">Crear<i
                                        class="fas fa-plus ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body img_productos">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 d-flex stat" id="">
                                        <div class="mx-auto" id="">
                                            <div class="card" id="imagenes-productos">
                                                <img class="card-img-top" src="../xdiseño/assets/mis productos/collares.jpg" alt="">
                                                <div class="card-body">
                                                    <div class="float-left">
                                                        <h5 class="card-title font-weight-bold mt-1">Collares</h5>
                                                    </div>
                                                    <div class="float-right">
                                                        <!-- Default dropup button -->
                                                        <div class="btn-group dropup">
                                                            <button type="button" class="dropdown-toggle btn btn-default btn-sinborde" id="cambio_icono" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <!-- Dropdown menu links -->
                                                                <a class="dropdown-item" href="informacion-producto.php"><i class="fas fa-eye mr-2"></i>Ver Producto</a>
                                                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter2" href="#"><i class="fas fa-pen mr-2"></i>Editar</a>
                                                                <a class="dropdown-item" href="#" onclick="eliminar()"><i class="fas fa-trash-alt mr-2"></i>Eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 d-flex stat" id="">
                                        <div class="mx-auto">
                                            <div class="card" id="imagenes-productos">
                                                <img class="card-img-top" src="../xdiseño/assets/mis productos/mancuerdas.jpg" alt="">
                                                <div class="card-body">
                                                    <div class="float-left">
                                                        <h5 class="card-title font-weight-bold mt-1">Mancuerdas</h5>
                                                    </div>
                                                    <div class="float-right">
                                                        <!-- Default dropup button -->
                                                        <div class="btn-group dropup">
                                                            <button type="button" class="dropdown-toggle btn btn-default btn-sinborde" id="cambio_icono" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <!-- Dropdown menu links -->
                                                                <a class="dropdown-item" href="informacion-producto.php"><i class="fas fa-eye mr-2"></i>Ver Producto</a>
                                                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter2" href="#"><i class="fas fa-pen mr-2"></i>Editar</a>
                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash-alt mr-2"></i>Eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 d-flex" id="">
                                        <div class="mx-auto">
                                            <div class="card" id="imagenes-productos">
                                                <img class="card-img-top" src="../xdiseño/assets/mis productos/pedigree-cachorro.jpg" alt="">
                                                <div class="card-body">
                                                    <div class="float-left">
                                                        <h5 class="card-title font-weight-bold mt-1">Pedigree Cachorro</h5>
                                                    </div>
                                                    <div class="float-right">
                                                        <!-- Default dropup button -->
                                                        <div class="btn-group dropup">
                                                            <button type="button" class="dropdown-toggle btn btn-default btn-sinborde" id="cambio_icono" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <!-- Dropdown menu links -->
                                                                <a class="dropdown-item" href="informacion-producto.php"><i class="fas fa-eye mr-2"></i>Ver Producto</a>
                                                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter2" href="#"><i class="fas fa-pen mr-2"></i>Editar</a>
                                                                <a class="dropdown-item" href="#"><i class="fas fa-trash-alt mr-2"></i>Eliminar</a>
                                                            </div>
                                                        </div>
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
                <!-- Modal Create-->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Nuevo Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 ml-auto">
                                            <div class="row">
                                                <div class="col-6" id="no-image">
                                                    <img src="../xdiseño/assets/no-image.png" id="changeImage1" alt="">
                                                </div>
                                                <div class="col-6" id="no-image">
                                                    <img src="../xdiseño/assets/no-image.png" id="changeImage2" alt="">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6" id="no-image">
                                                    <img src="../xdiseño/assets/no-image.png" id="changeImage3" alt="">
                                                </div>
                                                <div class="col-6" id="no-image">
                                                    <img src="../xdiseño/assets/no-image.png" id="changeImage4" alt="">
                                                </div>
                                            </div>
                                            <label class="btn btn-info w-100 align-self-center mt-3" for="uploadImage"><i class="fas fa-cloud-upload-alt mr-2"></i>Subir Imágen
                                                <input type="file" id="uploadImage" onchange="imagePreview()">
                                            </label>
                                   
                                        <!--<button class="btn btn-info w-100 align-self-center">Imágen</button>-->
                                    </div>
                                    <div class="col-md-6 ml-auto">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="">
                                                <option>Seleccione</option>
                                                <option>Juguetes</option>
                                                <option>Ropa</option>
                                                <option>Comida</option>
                                                <option>Articulos</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Precio">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Ubicación">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Contacto">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12 ml-auto">
                                        <div class="form-group">
                                            <textarea class="form-control" id="" placeholder="Descripción"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Update-->

                <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Actualizar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 ml-auto">
                                        <div class="row">
                                            <div class="col-6" id="no-image">
                                                <img src="../xdiseño/assets/no-image.png" id="changeImage1" alt="">
                                            </div>
                                            <div class="col-6" id="no-image">
                                                <img src="../xdiseño/assets/no-image.png" id="changeImage2" alt="">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6" id="no-image">
                                                <img src="../xdiseño/assets/no-image.png" id="changeImage3" alt="">
                                            </div>
                                            <div class="col-6" id="no-image">
                                                <img src="../xdiseño/assets/no-image.png" id="changeImage4" alt="">
                                            </div>
                                        </div>
                                        <label class="btn btn-info w-100 align-self-center mt-3" for="uploadImage"><i class="fas fa-cloud-upload-alt mr-2"></i>Subir Imágen
                                            <input type="file" id="uploadImage" onchange="imagePreview()">
                                        </label>
                               
                                    <!--<button class="btn btn-info w-100 align-self-center">Imágen</button>-->
                                </div>
                                    <div class="col-md-6 ml-auto">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="">
                                                <option>Juguetes</option>
                                                <option>Ropa</option>
                                                <option>Comida</option>
                                                <option>Articulos</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Precio">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Ubicación">
                                        </div>
                                    </div>
                                    <div class="col-md-12 ml-auto">
                                        <div class="form-group">
                                            <textarea class="form-control" id="" placeholder="Descripción"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                <button type="button" class="btn btn-success" onclick="actualizar()">Actualizar</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="../js/store-pet/image.js"></script>
    <script src="../js/store-pet/actions.js"></script>
</body>

</html>