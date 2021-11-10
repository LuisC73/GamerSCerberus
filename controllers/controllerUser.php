<?php
if(!isset($_SESSION)){
    session_start();
}

    include("../models/DataBase.php");
    include("../models/Users.php");

    if(isset($_POST["buttonUser"])){

        $nameUser=$_POST["name"];
        $lastName=$_POST["lastname"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $passwordUser=$_POST["password"];
        $addressUser=$_POST["addressUser"];
        $photo=$_POST["photo"];

        $user= new Users($nameUser,$lastName,$age,$email,$passwordUser,$addressUser,$photo);
        $dataBase= new DataBase();
        $result=$dataBase->insertRegisters($user->register());


    if($result){
        $_SESSION['mensaje']="¡Your user was registered correctly!....";
        $_SESSION['mensaje1']="Congratulations";
        header("Location:../views/register.php");
    }else{
        $_SESSION['mensaje']="upss... We have a problem registering";
        $_SESSION['mensaje1']="¡Error 400!";
        header("Location:../views/register.php");
    }

    }else{
        echo("no deberias estar aquí");
    }


?>