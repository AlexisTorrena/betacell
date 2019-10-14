  <div class="row">
    <div class="col-md-12">
      <div class="row">
          <?php

            $conexion = new mysqli("localhost", "root", "", "betacell");


            $sql = "SELECT * FROM productos";


            if ( isset( $_GET["id_marca"]) ){
              $sql .= " WHERE marca_id = " . $_GET["id_marca"];
            }
            else{
               if ( isset( $_GET["busqueda"]) ){
                  $sql .= " WHERE producto_nombre LIKE '%" . $_GET["busqueda"] . "%'";
               }

            }

           


            $sql .= " ORDER BY producto_nombre";

            $productos = $conexion->query($sql);

            foreach ($productos as $producto) {
          ?>

            <div class="col-md-3">
              <div class="card m-4">
                <img class="card-img-top" alt="Bootstrap Thumbnail First" src="imagenes/<?= $producto["producto_imagen"] ?>" />
                <div class="card-block">
                  <h5 class="card-title">
                    <?= $producto["producto_nombre"] ?>
                  </h5>
                  <p class="card-text">
                    <?=$producto["producto_detalle"]?>
                  </p>
                  <p>
                    <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="detalle.php?producto_id=<?=$producto['producto_id']?>">Ver Detalle</a>
                  </p>
                </div>
              </div>
            </div>


          <?php
            }
          ?>


      </div>
    </div>
  </div>