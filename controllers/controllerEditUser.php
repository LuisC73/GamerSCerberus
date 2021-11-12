<?php

if (!isset($_SESSION)) {
    session_start();
}

include("../models/DataBase.php");
include("../models/Users.php");

if (isset($_POST["btnEdit"])) {

    //Recibo los datos a editar
    
    $name = $_POST["nameUser"];
    $email = $_POST["email"];
    $address = $_POST["addressUser"];

    //Recibo el id
    $id = $_GET["id"];


    // Creo un objeto(variable) del modelo EMPLEADO
    $user = new Users($name, null, null ,$email,null,$address,null);


    //Ejecutar el metodo insertar registro de la bd
    $database = new DataBase();
    $resultado = $database->insertRegisters($user->update($id));

    //5. valido el resultado
    if ($resultado) {

        $_SESSION['mensaje'] = "exito editando el usuario";

        header("Location:../views/profile.php");
    } else {
        echo ("upss... Tenemos problemas para editar este usuario, por favor intente de nuevo");
    }



}
?>