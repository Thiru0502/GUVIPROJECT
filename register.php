<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Database connection
	$conn = new mysqli('localhost','root','1234','jdbcdemo',3306);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into test(firstName, lastName, gender, email, password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $lastName, $gender, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		header("Location: http://localhost/login.html", true, 301);
exit();
		$stmt->close();
		$conn->close();
	}
?>