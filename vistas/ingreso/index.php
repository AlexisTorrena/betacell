<?php

    session_start();

    if (isset($_POST["email"]) && isset($_POST["password"]) ) {
     
      $conexion = new mysqli("localhost", "root", "", "betacell");   

      $sql = "SELECT * FROM usuarios WHERE usr_email = '" . $_POST["email"] . "' AND usr_password = '" . $_POST["password"] . "'";
      
      $resultado = $conexion->query($sql);


      if( $resultado-> num_rows == 1){

        $usuario = $resultado->fetch_assoc();

        $_SESSION["usuario"] = $_POST["email"];
        $_SESSION["usr_id"] = $usuario["usr_id"];
        
          header("Location: index.php");

      }
      else{
          header("Location: index.php?e=0");

      }
    }

?>
