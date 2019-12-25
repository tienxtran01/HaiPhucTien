<form action="connect.php" method="post">

    <input type="text" name="username">
    <input type="password" name="pass">
    <input type="email" name="email">
    <input type="submit">
</form>

<?php
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    //data connection

    $conn = new mysqli('localhost','root','','igtdev1');
    if($conn->connect_error){
        die('Connect Failed...'.$conn->connect_error);
    }else{
        echo "Connect successfully";
    }

    $stmt = $conn->prepare("insert into registration(username, pass, email) value(?, ?, ?)");
    $stmt->bind_param("sss", $username, $pass, $email);
    $stmt->execute();// lenh thuc thi cau lenh sql

    
    $stmt->close();
    echo "Da dang ky thanh cong chuc mung ban";
    $conn->close();
?>
select * registration w here id= 1{

}