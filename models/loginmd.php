<?php 
include_once 'signupmd.php';
class login{
    //db stuff
    private $conn;
    private $table='users';

    //add login properties
    public $email;
    public $password;

    //initialize class with a constructor with db
    public function __construct($db){
        $this->conn=$db;
    }

    public function emptyInputLogin(){
        $result;
        if(empty($this->email) || empty($this->password) ){
            $result=true;
            return $result;
        }
        if($this->email==" " || $this->password==" " ){
            $result=true;
            return $result;
        }
        else{ 
            $result=false;
            return $result;
        }

    }

    public function loginUser(){
        $result;
        $signup=new signUp($this->conn);

        $signup->email=$this->email;
        $signup->password=$this->password;
  
        $uexists=$signup->emailExists();

        if($uexists === false){
            $result=true;
            return $result;
        }
        else {
            //if i am here that means the email does exist, so i check the password
            $hashedpass=$uexists['Password'];
            $checkpass=password_verify($this->password, $hashedpass);
            
            if($checkpass===false){
                $result=true;
                return $result;    
            } else if($checkpass===true){
                session_start();
                $result=false;
                $_SESSION['User_ID']=$uexists['User_ID'];
                $_SESSION['Username']=$uexists['Username'];
                return $result;
            }
        }
    }
}