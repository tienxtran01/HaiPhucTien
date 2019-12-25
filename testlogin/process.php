<?php
	$username = $_POST['username'];
	$password = $_POST['password'];



	$conn = mysqli_connect('localhost', 'root', '', 'logintest');

	$result ="SELECT * FROM signin where username = '$username' and password = '$password'";
	$query = mysqli_query($conn, $result);
	$row = mysqli_num_rows($query);
	if ($row == 0) {
		
		echo "sai tai khoan hoac mat khau!!!! <br>";
		echo "<a href='login.php'>quay lai</a>";
		
	}else{
		echo "dang nhap thanh cong!!!"; 
		
	}
?>
