<?php


class Product{
    public $nameP;
    public $category;
    public $valueP;
    public $amount;
    public $img;

    public function __construct($nameForm,$categoryForm,$valueForm,$amountForm,$imgForm){
        $this->nameP=$nameForm;
        $this->category=$categoryForm;
        $this->valueP=$valueForm;
        $this->amount=$amountForm;
        $this->img=$imgForm;
        
    }

    public function register(){

        $querySQL="INSERT INTO products(nameP,amount,category,valueP,img) 
        VALUES ('$this->nameP','$this->amount',' $this->category','$this->valueP','$this->img')";
        return $querySQL; 

    }

    public function search(){

        $querySQL="SELECT * FROM products";
        return $querySQL;
    }

    public function delete($id){
        $querySQL="DELETE FROM products WHERE id='$id'";
        return $querySQL;
    }

    public function update($id){

        $querySQL="UPDATE products SET amount='$this->amount',valueP='$this->valueP' WHERE id='$id'";

        return $querySQL;

    }

    public function searchGames(){

        $querySQL="SELECT * FROM products WHERE category= ' Game'";
        return $querySQL;
    }

    public function searchConsoles(){

        $querySQL="SELECT * FROM products WHERE category= ' Console'";
        return $querySQL;
    }

    public function searchAccessories(){

        $querySQL="SELECT * FROM products WHERE category= ' Accesories'";
        return $querySQL;
    }
}

?>