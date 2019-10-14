<?php

$modulo = "detalle";

if ( isset($_REQUEST["m"]) ){

    switch ( $_REQUEST["m"] ){

        case "search":
            $location = "Location: index.php?m=search&busqueda=" . $_REQUEST["busqueda"];
            header($location);  
            break;

    }
}
include "vistas/" . $modulo . "/index.php";


?>