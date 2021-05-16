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
        }
        if($this->email==" " || $this->password==" " ){
            $result=true;
        }
        else{ 
            $result=false;
        }

        return $result;
    }

    public function loginUser(){
        $signup=new signUp($this->conn);

        $signup->email=$this->email;
        $signup->password=$this->password;
  
        $uexists=$signup->emailExists();

        if($uexists === false){
            echo json_encode(array(
                'message'=>'Email does not exist, try again.'
            ));
            exit();
        }

        //if i am here that means the email does exist, so i check the password
        $hashedpass=$uexists['password'];
        $checkpass=password_verify($this->password, $hashedpass);

        if($checkpass===false){
            echo json_encode(array(
                'message'=>'Incorrect password, try again.'
            ));
            exit();
        } else if($checkpass===true){
            session_start();
            $_SESSION['User_ID']=$uexists['User_ID'];
            $_SESSION['Username']=$uexists['Username'];
            echo json_encode(array(
                'message'=>'User logged in successfully.'
            ));
            exit();
        }
    }
}