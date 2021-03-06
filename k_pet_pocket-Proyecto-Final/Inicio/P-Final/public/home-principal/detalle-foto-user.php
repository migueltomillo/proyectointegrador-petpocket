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
  <link rel="stylesheet" href="../xdiseño/css/dropdown.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <title>Pet-Pocket - Info</title>
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
        <a href="home-principal.php" class="d-block text-dark p-3 border-0"><i class="fa fa-home mr-4"></i>
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
              <div class="row">
                  <div class="col-lg-9 col-md-8">
                      <h3 class="mt-3 font-weight-bold">Descripción</h3>
                  </div>
                  <div class="col-lg-3 col-md-4 d-flex">
                    <div class="align-self-end mb-1">
                      <a href="../home-principal/home-principal.php"><button class="btn btn-info w-100 align-self-center categoryItem"><i class="fas fa-times mr-2"></i>Cerrar</button></a>
                    </div>
                    
    
                    <!--<button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>-->
                  </div>
              </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-6 my-4">
                <div class="card rounded-0">
                  <div class="card-body">
                    <img id="detalle-img" src="../assets/img/3.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-6 my-4">
                <div class="card rounded-0">
                  <div class="card-body">
                          <div class="header">
                              <img src="../assets/prfil.jpg" id="imgCard" alt="">
                              <a href="../perfil-pet/perfil.php" id="nameUser" ><?php echo "" . $_SESSION['username'] . ""; ?></a>

                              <div class="dropdown" style="float:left;">
                                  <i class="fas fa-ellipsis-h" class="dropbtn"></i>
                                                               
                                   <div class="dropdown-content" style="left:0;">
                                     <a href="#"><i class="fas fa-trash-alt"></i>  Eliminar</a>
                                     <a href="post-foto-update.html"><i class="fas fa-pen"></i>  Actualizar</a>
                                     <a href="#"><i class="fas fa-times"></i>  Cerrar</a>
                                   </div>
                              </div>

                              <br>
                              <div class="comentUser">
                                  <label id="tl" for="">Que lindo perrito</label>
                              </div>
                            
                              <div class="footer">
                              
                                <div class="row">
                                    <div class="col-3">
                                        <a href="" id="itm" ><i class="fas fa-heart"></i> Me gusta </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="" id="itm" ><i class="fas fa-comment"></i> Comentar </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="" id="itm" ><i class="fas fa-share"></i> Compartir</a>
                                    </div>
                                </div>
                              </div>

                              <div class="coments">
                                <div class="card" id="coment">
                                    <form action="">
                                     <div class="form-group">
                                          <div class="input-group ">
                                            <input type="text" class="form-control" placeholder="Comenta Aquí"  aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                              <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-paper-plane"></i></button>
                                            </div>
                                          </div>
                                        
                                          <div class="users">
                                            <div class="col-6 w-100">
                                                <img  id="user1" src="../assets/img/user1.jpg" alt="">
                                                <div class="card" id="post">
                                                   <p href="" id="user1Com" ><a id="nameUser1" href="">Diego Paz </a>  Que lindo Cachorro</p>
                                                </div>
                                            </div>
                                          </div>
                                            
                                            <div class="users">
                                              <div class="col-6">
                                                  <img  id="user1" src="../assets/img/user2.jpg" alt="">
                                                  <div class="card" id="post">
                                                     <p href="" id="user1Com" ><a id="nameUser1" href="">Luis Mena </a> Muy lindo</p>
                                                  </div>
                                              </div>
                                            </div>

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
     
        <!--<div class="row">
           
          <div class="col-2"></div>
          <div class="col-8">
              <div class="tituloOf">
                  <h2>Descripción</h2>
                 <a id="cerrar" href="home-principal.html"><i class="fas fa-times fa-lg"></i></a> 
              </div>
              
              <div class="row">
                  
                  <div class="col-sm-6">
                      <div class="card" id="selImg">
                         <img id="fondo" src="/assets/img/3.jpg" alt="">
                         
                      </div>
                  </div>
                  <div class="col-sm-6">
                    
                          <div class="card" id="card2">
                              <div class="header">
                                  <img src="/assets/prfil.jpg" id="imgCard" alt="">
                                  <a href="perfil.html" id="nameUser" >Juan Alvear</a>
                              
                                  <div class="dropdown" style="float:left;">
                                      <i class="fas fa-ellipsis-h" class="dropbtn"></i>
                                                                   
                                       <div class="dropdown-content" style="left:0;">
                                         <a href="#"><i class="fas fa-trash-alt"></i>  Eliminar</a>
                                         <a href="post-foto-update.html"><i class="fas fa-pen"></i>  Actualizar</a>
                                         <a href="#"><i class="fas fa-times"></i>  Cerrar</a>
                                       </div>
                                 </div>

                                  <br>
                                  <div class="comentUser">
                                      <label id="tl" for="">Que lindo perrito</label>
                                  </div>
                                
                                  <div class="footer">
                                  
                                    <div class="row">
                                        <div class="col-3">
                                            <a href="" id="itm" ><i class="fas fa-heart"></i> Me gusta </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="" id="itm" ><i class="fas fa-comment"></i> Comentar </a>
                                        </div>
                                        <div class="col-3">
                                            <a href="" id="itm" ><i class="fas fa-share"></i> Compartir</a>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="coments">
                                    <div class="card" id="coment">
                                        <form action="">
                                         <div class="form-group">
                                                
                                            <div class="input-group ">
                                                <input type="text" class="form-control" placeholder="Comenta Aquí"  aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                  <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-paper-plane"></i></button>
                                                </div>
                                              </div>
                                            
                                              <div class="users">
                                                <div class="col-6">
                                                    <img  id="user1" src="/assets/img/user1.jpg" alt="">
                                                    <div class="card" id="post">
                                                       <p href="" id="user1Com" ><a id="nameUser1" href="">Diego Paz </a>  Que lindo Cachorro</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="users">
                                                  <div class="col-6">
                                                      <img  id="user1" src="/assets/img/user2.jpg" alt="">
                                                      <div class="card" id="post">
                                                         <p href="" id="user1Com" ><a id="nameUser1" href="">Luis Mena </a> Muy lindo</p>
                                                      </div>
                                                  </div>
                                                
                                                <div class="col-6">
                                                    
                                                </div>
                                              </div>

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
          
        </div>-->

       
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
  <script src="../js/store-pet/filtro-categories.js"></script>

</body>

</html>