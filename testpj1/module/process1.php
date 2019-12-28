<?php
	if(isset($_POST['btn-login'])){
		$username = $_POST['username'];
		$password = $POST['password'];

		if(empty($username) || empty($password)){
			echo "Khong duoc de trong username hoac password";
		}else{
			$query = "SELECT * FROM signin WHERE username = '$username'";
			$result = mysqli_query($conn, $query);

			if($row = mysqli_fetch_assoc($result){
				$db_password = $row['password'];

				if ($password == $db_password) {
					header("location:index.php ");
				}else
				{
					header("location: index.php");
				}
			}else{
				echo "kiem tra lai username va password cua ban";
			}
		}
	}
?>

