<?php

include("../models/DataBase.php");
include("../models/Product.php");

$product= new Product(null,null,null,null,null);

$dataBase = new DataBase();
$products=$dataBase->searchRegisters($product->search());
$games=$dataBase->searchRegisters($product->searchGames());
$consoles=$dataBase->searchRegisters($product->searchConsoles());
$accesories=$dataBase->searchRegisters($product->searchAccessories());

?>