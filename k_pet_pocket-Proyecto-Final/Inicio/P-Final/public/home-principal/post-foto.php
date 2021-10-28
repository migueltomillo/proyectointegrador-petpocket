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
  <link rel="stylesheet" href="../xdiseño/css/postAdop.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <title>Pet-Pocket - Presume - Home</title>
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
                      <h3 class="mt-3 font-weight-bold">Presume a tu mascota</h3>
                  </div>
                  <div class="col-lg-3 col-md-4 d-flex">
                    <div class="align-self-end mb-1">
                      <a href="home-principal.php"><button class="btn btn-info w-100 align-self-center categoryItem"><i class="fas fa-times mr-2"></i>Cerrar</button></a>
                    </div>
                    
    
                    <!--<button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>-->
                  </div>
              </div>
          </div>
        </section>
        <section>
        <form action="proceso-guardar.php" method="POST"  enctype="multipart/form-data">          
          <div class="container">
            <div class="row">
              <div class="col-6 my-4">
                <div class="card rounded-0">
                  <div class="card-body">
                    <img id="detalle-img-2" src="../xdiseño/assets/img/fondo.png" alt="" >
                    <br><br>
                    <center>
                    <div class="button">
                    <input type="file" REQUIRED name="imagen"><br><br>                  
                     </div>
                  </div>
                  </center>
                </div>
              </div>
              <div class="col-6 my-4">
                <div class="card rounded-0">
                  <div class="card-body">
                          <div class="header">
                              <img src="../xdiseño/assets/img/mimo.jpg" id="imgCard" alt="">
                              <a href="../perfil-pet/perfil.php" id="nameUser" >Presume</a>
                              <br>                  
                              <div class="coments2">
                                 <div class="card" id="coment">
                                        <div class="coments">
                                          <div class="row">
                                            <div class="col-sm-6" >
                                              <label id="label"> Titulo </label>
                                              <input type="text" name="nombre_mascota" placeholder="Ej: 'Max' o deje en blanco "  class="form-control"></input>
                                            </div>
                                            <div class="col-sm-6" >
                                             <label id="label" > Tipo de Mascota </label>
                                              <input type="text" name="tipo_mascota" placeholder="Ej: 'Max' o deje en blanco "  class="form-control"></input>
                                            </div>
                                          </div>
                                          <br>
                                      
                                          <div class="row" >
                                            <div class="col-sm-12">
                                             <center> <label id="label" > Descripcion General de la Mascota </label></center>
                                              <textarea class="form-control" name="descripcion" placeholder=""  ></textarea>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="button2 mt-2">
                                            <button type="sumit" class="btn btn-outline-dark">Publicar</button>
                                          </div>
                                    </form>
                                 </div>
                              </div>

                          </div>
                          <br>
                          <br>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
  <script src="../js/store-pet/image.js"></script>

</body>

</html>