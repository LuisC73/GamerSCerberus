<?php
    class Users{
        public $nameUser;
        public $lastName;
        public $age;
        public $email;
        public $passwordUser;
        public $addressUser;
        public $photo;

        public function __construct($nameUserForm,$lastNameForm,$ageForm,$emailForm,$passwordForm,$addressForm,$photoForm){

            $this->nameUser=$nameUserForm;
            $this->lastName=$lastNameForm;
            $this->age=$ageForm;
            $this->email=$emailForm;
            $this->password=$passwordForm;
            $this->address=$addressForm;
            $this->photo=$photoForm;
        }

        public function register(){

            $querySQL="INSERT INTO users(nameUser,lastName,age,email,passwordUser,addressUser,photoUser) 
            VALUES ('$this->nameUser','$this->lastName',' $this->age','$this->email','$this->passwordUser','$this->addressUser','$this->photo')";
            return $querySQL; 
    
        }
    
        public function search(){
    
            $querySQL="SELECT * FROM users";
            return $querySQL;
        }
    
        public function delete($id){
            $querySQL="DELETE FROM users WHERE id_user='$id'";
            return $querySQL;
        }
    
        public function update($id){
    
            $querySQL="UPDATE users SET nameUser='$this->nameUser', lastName='$this->lastName', age='$this->age', email='$this->age', passwordUser='$this->passwordUser', addressUser='$this->addressUser', photo='$this->photo'  WHERE id_user='$id'";
    
            return $querySQL;
        }
    }

?>