<?php 
 class database {
     //db params
     private $host='localhost';
     //the name of the db
     private $db_name='game_store';
     //database username
     private $username='root';
     //password for that
     private $password='';
     //this will represent the connection
     private $conn;

     //DB Connect
     public function connect(){
         $this->conn=null;

         try {
             //the connection for the database 
             //(dude uses pdo-php data objects but u can use mysqli_connect)
             $this->conn= new PDO('mysql:host='. $this->host. ';dbname='. $this->db_name,
             $this->username, $this->password);
             
             //set this db attribute cuz i want it to return errors
             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         }catch(PDOException $e){
             echo 'Connection Error: '.$e->getMessage();
         }

         return $this->conn;
     }

 }

?>