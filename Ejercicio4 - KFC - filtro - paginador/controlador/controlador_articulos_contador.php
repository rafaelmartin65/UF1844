<?php
    // var_dump($_POST['familias']);
    require_once "../modelo/productos.php";
    $datos = new Articulos();
    $jsondata = $datos->contador($_POST['familias']);
    echo json_encode($jsondata, JSON_FORCE_OBJECT);
?>    