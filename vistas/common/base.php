<?php
        session_start();
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home Venta Mobile</title>
    <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">BETA-CELL</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <?php 

                if ( isset($_SESSION["usuario"] ) ){
                ?>

                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <?= $_SESSION["usuario"] ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Perfil</a>
                                          <a class="dropdown-item" href="index.php?m=logout">Cerrar sesión</a>
  
                                        </div>
                                </li>
            
                <?php
                        }
                        else{

                ?>
                        <li class="nav-item">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                  Iniciar sesíón
                                </button>
                        </li>
                <?php } ?>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                  <input type="hidden" name="m" value="search">
                  <input name="busqueda" class="form-control mr-sm-2" type="search" aria-label="Search">
                  
                  <button class="btn btn-outline-success mx-3 my-2 my-sm-0" type="submit">Buscar
                  </button>
            </form>
          </div>
        </nav>

      
        <?php
        include "nav_bar_abajo.php"
        ?>

        <?php
                include "carousel.php";
        
                include $contenido;
        ?>      

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">

                <form action="index.php" method="post">
                        
                  <input type="hidden" name="m" value="ingreso">

                  <div class="form-group">
                    <label for="email">E-mail</label> 
                    <input id="email" required name="email" type="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label> 
                    <input id="password" required name="password" type="password" class="form-control">
                  </div> 
                  <div class="form-group">
                    <input name="submit" type="submit" class="btn btn-primary" value="Ingresar"></input>

                  </div>
                </form>

              </div>

            </div>
          </div>
        </div>
                                
        <script src="vendor\jqueri\jquery-3.4.1.min.js"></script>
        <script src="vendor\popper\popper.min.js"></script>
        <script src="vendor\bootstrap\js\bootstrap.min.js"></script>
    
</body>
</html>