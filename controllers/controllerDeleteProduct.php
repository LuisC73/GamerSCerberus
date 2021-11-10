<?php


include("../models/DataBase.php");
include("../models/Product.php");

$id=$_GET["id"];
header("Location:../views/products.php");
$product= new Product(null,null,null,null,null);
$dataBase= new DataBase();
$result=$dataBase->insertRegisters($product->delete($id));

?>