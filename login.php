<?php 
	$email = $_POST['email'];
	$password = $_POST['password'];


	$conn = new mysqli('localhost','root','1234','jdbcdemo',3306);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select *from test where email = '$email' and password='$password'");
		
		$stmt->execute();
        $stmt_result=$stmt->get_result();
		$stmt_row=mysqli_fetch_row($stmt_result);
      if(mysqli_num_rows($stmt_result)>0){
		

		header("Location: http://localhost/profile1.html", true, 301);
		exit();
      }else{
        echo"invalid username or password";
      }
	}

?>