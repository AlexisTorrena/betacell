<?php

$modulo = "index";

if ( isset($_REQUEST["m"]) ){

    switch ( $_REQUEST["m"] ){

        case "ingreso":
            $modulo = "ingreso";
            break;

        case "logout":
            $modulo = "logout";
            break;
        case "detalle":
            $modulo = "detalle";
            break;

    }

}

include "vistas/" . $modulo . "/index.php";


?>