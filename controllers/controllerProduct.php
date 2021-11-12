<?php 

if(!isset($_SESSION)){
    session_start();
}

include("../models/DataBase.php");
include("../models/Product.php");

if(isset($_POST["register"])){
    $nameP=$_POST["nameAdd"];
    $category=$_POST["categoryAdd"];
    $valueP=$_POST["valueAdd"];
    $amount=$_POST["amountAdd"];
    $img=$_POST["imgAdd"];

    
        $product= new Product($nameP,$category,$valueP,$amount,$img);
        $dataBase= new DataBase();
        $result=$dataBase->insertRegisters($product->register());
    
        if($result){
            $_SESSION['mensaje']="¡Your product was registered!....";
            $_SESSION['mensaje1']="Congratulations";
            header("Location:../views/registerProducts.php");
        }else{
            $_SESSION['mensaje']="upss... We have a problem registering products";
            $_SESSION['mensaje1']="¡Error 400!";
            header("Location:../views/registerProducts.php");
        }

   
}else{
    echo("no deberias estar aquí");
}

?>