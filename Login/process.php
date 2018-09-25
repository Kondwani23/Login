<?php 
/*
	//getting info from login.php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	//connect to the server
	 mysqli_connect("localhost", "root", "");
	mysqli_select_db("login");

	//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($_POST['user']);
	$password = mysqli_real_escape_string($_POST['pass']);

	

	//query from the database
	$result=mysqli_query("SELECT * FROM `users`where username= '$username'  and password='$password'")
	                       or die("failed to query database".mysqli_error());
	$row=mysqli_fetch_array($result);
	if ($row ['username']== $username && $row['password']==$password ){
		echo "Login Successfully! Welcome".$row['username'];
	} else {
		echo "Wrong password or username";
	}
*/
	/*
        $host="localhost";
        $username="user";
        $password="pass";
        $databaseName = "login";
        $connect=mysqli_connect($host,$username,$password, $databaseName);
        
        $result=mysqli_query("SELECT * FROM `users`where username= '$username'  and password='$password'")
	                       or die("failed to query database".mysqli_error());

	         $row=mysqli_fetch_array($result);
	if ($row ['username']== $username && $row['password']==$password ){
		echo "Login Successfully! Welcome".$row['username'];
	} else {
		echo "Wrong password or username";
	}
	*/

	phpinfo();
?>