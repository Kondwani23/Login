<?php 

if (isset($_POST['submit'])) {
	
include_once 'dbh.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//error handlers
//check for empty fields
if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
	header("Location: ../sign.php?sign=empty");
	exit();
} else {
  //check if caharacters are correct
	if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
		header("Location: ../sign.php?sign=invalid");
	exit();
		
	}else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../sign.php?sign=email");
	exit();
		} else {
			$sql = "SELECT * FROM users WHERE user_uid='$uid'";
			$result = mysqli_query($conn,$sql);
			$resultcheck = mysqli_num_rows($result); 

			if ($resultcheck > 0) {
				
				header("Location: ../sign.php?sign=usernametaken");
	           exit();
			} else {
				// hashing the password
				$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES('$first','$last','$email','$uid','$hashedpwd');";
				mysqli_query($conn,$sql);
				header("Location: ../sign.php?sign=success");
	exit();
			}
		}
	}
}



} else {
	header("Location: ../sign.php");
	exit();
}