<?php

include("../models/DataBase.php");
include("../models/Users.php");

$users= new Users(null,null,null,null,null,null,null);

$dataBase = new DataBase();
$users=$dataBase->searchRegisters($users->search());

//print_r($users);

//$usuario= "juan";

?>