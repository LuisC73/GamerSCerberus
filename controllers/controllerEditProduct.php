<?php 


if(!isset($_SESSION)){
    session_start();
}

include("../models/DataBase.php");
include("../models/Product.php");

if(isset($_POST["edit"])){
    $valueP=$_POST["valueAdd"];
    $amount=$_POST["amountAdd"];
    

    $id=$_GET["id"];
    $product= new Product(null,null,$valueP,$amount,null);
    $dataBase= new DataBase();
    $result=$dataBase->insertRegisters($product->update($id));
    if($result){
        $_SESSION['mensaje']="¡Your product was edited!....";
        $_SESSION['mensaje1']="Congratulations";
        header("Location:../views/products.php");
    }else{
        $_SESSION['mensaje']="upss... We have problems editing your product...";
        $_SESSION['mensaje1']="¡Error 400!";
        header("Location:../views/products.php");
    }
}else{
    echo("no deberias estar aquí");
}


?>