<?php

            if ( !isset( $_GET["producto_id"]) ){
              header("Location:index.php");
            }
            $conexion = new mysqli("localhost", "root", "", "betacell");
            $sql = "SELECT * FROM productos";
            $sql .= " WHERE producto_id = " . $_GET["producto_id"];


            $productos = $conexion->query($sql);

            if( $productos-> num_rows == 0){
              header("Location: index.php?e=0");  
            }
?>
            <h1>Detalle</h1>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                <?php
            foreach ($productos as $producto) {
          ?>
          <form action="/codigo/detalle/compra.php" method="post">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="imagenes/<?= $producto["producto_imagen"] ?>" class="card-img" alt="phone">
                </div>
                <div class="col-md-8">
                  <div class="card-body">  
                    <h5 class="card-title">
                    <?= $producto["producto_nombre"] ?> 
                    <input type="hidden" name="producto_id" value= <?= $producto["producto_id"] ?> >
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Precio: <?= $producto["producto_precio"] ?>
                    </h6>
                    <p class="card-text">Detalles: <?=$producto["producto_detalle"]?></p>
                    <p> Cantidad:
                    <select name="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    </p>
                    <p>
                      <input name="submit" type="submit" class="btn btn-primary" value="Comprar"></input>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            </form>
          <?php
            }
          ?>
      </div>
    </div>
  </div>