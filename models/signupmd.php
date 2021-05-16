<?php 
class signUp{
    //db stuff
    private $conn;
    private $table='users';

    //add sign up properties
    public $username;
    public $address;
    public $age;
    public $email;
    public $password;
    public $confirmpassword;

    //initialize class with a constructor with db
    public function __construct($db){
        $this->conn=$db;
    }

    public function emptyInputSignup(){
        $result;
        
        if(empty($this->username) || empty($this->email) || empty($this->address)
        || empty($this->age) || empty($this->password) || empty($this->confirmpassword) ){
            $result=true;
            return $result;
           
        }
        
        if($this->username==" " || $this->email==" " || $this->password==" " 
        || $this->confirmpassword==" " || $this->age==" "|| $this->address==" "){
            $result=true;
            return $result;
            
        }
        else{ 
            $result=false;
            return $result;
        }
    }

    public function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result=true;
        }
        
        else $result=false;

        return $result;
    }

    public function emailExists() {
        $result;
        //create query 
        $query='SELECT * FROM ' . $this->table . ' WHERE Email=?;';
        
        //prepare statement 
        if(!$stmt= $this->conn->prepare($query)){
            $result=true;
            return $result;
        }

        //bind this email to the ? at the query
        $stmt->bindParam(1,$this->email);

        //execute query
        $stmt->execute();

        if($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            return $row;
        }
        else {
            $result=false;
            return $result;
        }
    }

    public function passwordMatch(){
        $result;
        if($this->password !== $this->confirmpassword){
            $result=true;
        }
        
        else $result=false;

        return $result;
    }

    public function passwordLength(){
        $result;
        if(strlen($this->password)<8 || strlen($this->confirmpassword)<8){
            $result=true;
        }
        
        else $result=false;

        return $result;
    }

    public function ageCheck(){
        $result;
        if($this->age<16){
            $result=true;
        }
        
        else $result=false;

        return $result;
    }

    public function createUser(){
        $result;
        //create query 
        $query='INSERT INTO '.$this->table. ' (Username, Email, Age, Address, Password) 
        VALUES (?, ?, ?, ?, ?);';
        
        //prepare statement 
        if(!$stmt= $this->conn->prepare($query)){
            /*true cuz i wanted to keep the same logic as the other functions,
            meaning its true when sth went wrong
            */
            $result=true;
            return $result;
        }

        //hashing the password
        $hashedPass=password_hash($this->password, PASSWORD_DEFAULT);

        //bind the values to the ? at the query
        $stmt->bindParam(1,$this->username);
        $stmt->bindParam(2,$this->email);
        $stmt->bindParam(3,$this->age);
        $stmt->bindParam(4,$this->address);
        $stmt->bindParam(5,$hashedPass);

        //execute query
        if($stmt->execute()){
            session_start();
            
            $query2='SELECT User_ID FROM ' . $this->table . ' WHERE Email=?;';
            $stmt2= $this->conn->prepare($query2);
            $stmt2->bindParam(1,$this->email);
            $stmt2->execute();
            $userId=$stmt2->fetch(PDO::FETCH_ASSOC);

            $_SESSION['User_ID']=$userId['User_ID'];
            $_SESSION['Username']=$this->username;
            
            $result=false;
            return $result;
        }

        $result=true;
        return $result;
    }
}