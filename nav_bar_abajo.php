<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <!--  <a class="navbar-brand" href="#">INICIO</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          
                    
           <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Marcas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                  <a class="dropdown-item" href="index.php">Todas</a>

                  <?php

                    $conexion = new mysqli("localhost", "root", "", "betacell");

                    $sql = "SELECT * FROM marcas ORDER BY marca_nombre";

                    $marcas = $conexion->query($sql);

                    foreach ($marcas as $marca) {
                  ?>
                    <a class="dropdown-item" href="index.php?id_marca=<?=$marca['marca_id']?>"><?=$marca["marca_nombre"]?></a>
                  <?php
                    }
                  ?>

                  


                </div>
              </li>
            </ul>
            </div>



              
      </nav>
