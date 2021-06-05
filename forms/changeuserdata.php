<?php 
session_start();
include_once '../config/database.php';

$database= new database();
$conn= $database->connect(); 

if(isset($_SESSION['User_ID'])){
    $username= $_POST['username'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $address=$_POST['address'];

    if(trim($username)=='' || trim($email)=='' || trim($age)=='' || trim($address)=='' ){
        header("location: User.php?message2=You%20need%20to%20type%20something...");
    } 
    else {
    $query='UPDATE users usr SET usr.address=? , usr.username=?, usr.age=?, usr.email=? 
        WHERE usr.user_id=?;';
        //prepare statement 
        $stmt= $conn->prepare($query);

        //bind this id to the ? at the query
        $stmt->bindParam(1, $address);
        $stmt->bindParam(2, $username);
        $stmt->bindParam(3, $age);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $_SESSION['User_ID']);

        if(!$stmt->execute()){
            header("location: User.php?message2=An%20error%20occurred");
        }else{
            if(session_start()) {
                session_unset();
                session_destroy();
            header("location: LogInform.php?message2=User%20data%20has%20been%20changed");
            }
        }  
    }

    } else header("location: LogInform.php?message2=User%20Not%20Logged%20in");

?>