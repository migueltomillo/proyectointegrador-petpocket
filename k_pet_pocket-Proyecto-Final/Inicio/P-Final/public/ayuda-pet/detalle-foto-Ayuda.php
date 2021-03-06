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
  <link rel="stylesheet" href="../xdiseño/css/detalleFUsuario.css">
  <link rel="stylesheet" href="../css/dropdown.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <title>Pet-Pocket - detalle - adop</title>
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
          <img src="../assets/prfil.jpg" />

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
         
        </div>
      </nav>
      <!-- Fin Navbar -->

      <div id="content" class="bg-grey w-100">
     <section class="bg-light py-3">
        <div class="container">
          <section class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <h3 class="mt-3 font-weight-bold">Descripción</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 d-flex">
                      <div class="align-self-end mb-1">
                        <a href="home-adopcion.php"><button class="btn btn-info w-100 align-self-center categoryItem"><i class="fas fa-times mr-2"></i>Cerrar</button></a>
                      </div>
                      
      
                      <!--<button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>-->
                    </div>
                </div>
            </div>
          </section>
        </div>
     </section>

    
     <section>
      <div class="container">
        <div class="row">
          <div class="col-6 my-4">
            <div class="card rounded-0">
              <div class="card-body">
                <img id="detalle-img" src="../xdiseño/assets/img/adp.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-6 my-4">
            <div class="card rounded-0">
              <div class="card-body">
                      <div class="header">
                          <img src="../xdiseño/assets/img/userA.jpg" id="imgCard" alt="">
                          <a href="perfil.html" id="nameUser" >Adop a Pet</a>
                      
                          <div class="dropdown" style="float:left;">
                              <i class="fas fa-ellipsis-h" class="dropbtn"></i>
                                                           
                               <div class="dropdown-content" style="left:0;">
                                 <a href="#"><i class="fas fa-trash-alt"></i>  Eliminar</a>
                                 <a href="post-foto-Adop-Update.php"><i class="fas fa-pen"></i>  Actualizar</a>
                                 <a href="#"><i class="fas fa-times"></i>  Cerrar</a>
                               </div>
                          </div>

                          <br>
                    
                            <div class="row" id="frm">
                              <div class="col-sm-12" >
                                <label  > Nombre de la Mascota </label>
                                  <p class="nameM">Lindo Cachorrito Busca Hogar</p>
                              </div>
                            
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-sm-6" >
                                <label > Tipo de Mascota </label>
                                <p class="nameM">Perro</p>
                               </div>
                              <div class="col-sm-6" >
                                <label > Raza de la Mascota </label>
                                <p class="nameM">Castellano</p>
                              </div>
                           
                            </div>
                            <br>
                            
                            <div class="row">
                              <div class="col-sm-6" >
                                <label > Numero de Contacto </label>
                               
                               </div>
                               <div class="col-sm-6" >  
                                  <p id="contacto">09********</p>
                               </div>
                            </div>
                            
                             <br>
                            <div class="row" >
                              <div class="col-sm-12">
                                <label > Descripcion General de la Mascota </label>
                                    <p>
                                      El Cachorrito tiene 1 mes de nacido, esta con todas sus vacuanas al día
                                      
                                    </p>
                              </div>
                            </div>
                            <br>
                            <br>
                            <div class="row" id="footer">
                              <div class="col-lg-6 ">
                                  <a href="" id="itm" ><i class="fas fa-heart"></i> Me gusta </a>
                              </div>                                       
                              <div class="col-lg-6 ">
                                  <a href="" id="itm" ><i class="fas fa-share"></i> Compartir</a>
                              </div>
                             
                          </div>
                          <br>
                          <div class="col-lg-12  ">
                            
                                <button  data-toggle="modal" data-target="#ventanaModal" class="btn btn-outline-dark btn-lg btn-block">  Adoptar </button>
                                              
                        </div>
                               <br>
                         

                      </div>
                      <br>
                      <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
       

          <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-label="tituloVentana" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header"> 
                  <h5 id="tituloVentana">Formulario de Adopcion</h5>
                  <button class="close" data-dismiss="modal" aria-label="Cerrar" >
                    <samp aria-hidden="true">&times;</samp>
                  </button>
                </div>

                <div class="modal-body">

                  

                  <div class="row">
                    <div class="col-sm-6" >
                      <label > Nombres: </label>
                      <input type="text"  placeholder="Karla"   class="form-control"> </input>
                    </div>
                    <div class="col-sm-6" >
                    <label > Apellidos: </label>
                      <input type="text" placeholder="Rojas"  class="form-control">  </input>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6" >
                      <label > Correo Electronico: </label>
                      <input type="text"  placeholder="karla@gmail.com" class="form-control"></input>
                    </div>
                    <div class="col-sm-6" >
                    <label > Telefono: </label>
                      <input type="text" placeholder="0987654321" class="form-control"></input>
                    </div>
                  </div>
                  <br>
                  <div class="row" >
                    <div class="col-sm-12">
                      <label >Direccion: </label>
                      <textarea class="form-control"> Quito, Av. Amazonas y Eloy Alfaro </textarea>
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-outline-dark " type="button" data-dismiss="modal" >
                      Enviar
                    </button>
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
    <script type="text/javascript" src="../js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script src="../js/store-pet/filtro-categories.js"></script>

</body>

</html>