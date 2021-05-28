<?php 
session_start();
//Headers
header('Access-Control-Allow-Origin: *');

include_once '../config/database.php';
//include_once '../models/getproducts.php';

//instantiate db and connect
$database= new database();
$conn= $database->connect(); 

if(isset($_SESSION['User_ID'])){
    $query='SELECT usr.address, usr.username, usr.age, usr.email 
        FROM  users usr WHERE usr.user_id=?;';
        
        //prepare statement 
        $stmt= $conn->prepare($query);

        //bind this id to the ? at the query
        $stmt->bindParam(1, $_SESSION['User_ID']);
        if(!$stmt->execute()){
            echo json_encode(array(
                'message'=> 'Error...'
            ));
        }

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        //set properties
        $address=$row['address'];
        $username=$row['username'];
        $age=$row['age'];
        $email=$row['email'];
        
        $user_arr=array(
            'username'=> $username,
            'address'=> $address,
            'age'=> $age,
            'email'=> $email
        );
    
        //make json
        print_r(json_encode($user_arr));
} else header("location: ../forms/LogInform.php?message2=User%20Not%20Logged%20in");
?>