<?php

if (!isset($_SESSION)) {
    session_start();
}

include("../models/DataBase.php");
include("../models/Users.php");

$id = $_GET["id"];

$user = new Users(null,null,null,null,null,null,null);

$database = new DataBase();

$resultado = $database->insertRegisters($user->delete($id));

if ($resultado) {

    $_SESSION['mensaje'] = "exito eliminando el perfil";

    header("Location:../views/profile.php");
} else {
    echo ("upss... Tenemos problemas para registrar datos");
}






?>