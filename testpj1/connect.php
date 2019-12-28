<?php
    //Database connection
    $conn = new mysqli('localhost','root', '','registest');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    //require_once("connect.php");
 // $username = $_POST['username'];
 // $password = $_POST['password'];
//  $password2 = md5($password, true);
 // $email = $_POST['email'];
//
 // $stmt = $conn->prepare("insert into registration(username, password, email) value(?, ?, ?)");
  //      $stmt->bind_param("sss",$username, $password, $emails);
  //      $stmt->execute();
  //      $stmt->close();
   //     $conn->close();
?>
 