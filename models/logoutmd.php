<?php 
class logout{
    //db stuff
    private $conn;

    //initialize class with a constructor with db
    public function __construct($db){
        $this->conn=$db;
    }

    public function logoutUser(){
        session_start();
        session_unset();
        session_destroy();
        return true;
    }
}