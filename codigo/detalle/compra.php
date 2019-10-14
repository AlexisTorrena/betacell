<?php
    session_start();

    if( !isset($_POST["producto_id"]))
    {
        header("Location: /index.php?e=0");
    }

    //datos de compra
    $producto_id = $_POST["producto_id"];
    $user_id =  $_SESSION["usr_id"];
    $cantidad = $_POST["cantidad"];

    //datos de conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "betacell";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO ventas (venta_id, usr_id, producto_id, amount) VALUES (NULL, $user_id, $producto_id, $cantidad)";


    if ($conn->query($sql) === TRUE) {
        echo "Venta Concretada!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
        // header("Location: /index.php");   
?>