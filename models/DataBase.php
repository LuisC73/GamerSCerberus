<?php
    class DataBase{
        public $user="root";
        public $passwordDB="";
        public $servidorDB="mysql:host=localhost;";
        public $nameDB="dbname=gamerscerberus";

        public function __construct(){}

        public function conectDB(){
            try{

                $informationDB=$this->servidorDB.$this->nameDB;
                $connection= new PDO($informationDB,$this->user,$this->passwordDB);
                // echo("exito conectandonos a la bd");
                return $connection;

            }catch(PDOException $error){

                die("We have a problem!!".$error->getMessage());

            }

        }

        public function insertRegisters($querySQL){

            try{
                $connection=$this->conectDB();

                $operation=$connection->prepare($querySQL);
                $result=$operation->execute();

                return $result;

            }catch(PDOException $error){

                die("We have a problem!!".$error->getMessage());

            }

        }

        public function searchRegisters($querySQL){

             try{
                $connection=$this->conectDB();

                $operation=$connection->prepare($querySQL);

                $operation->setFetchMode(PDO::FETCH_ASSOC);

                $operation->execute();

                return $operation->fetchAll();

            }catch(PDOException $error){

                die("We have a problem!!".$error->getMessage());

            }

        }
    }

?>   