<?php 

	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];

	//Database Connection
	$conn = new mysqli('localhost','root','','shafa');
	if($conn->connect_error){
		die('Connection Failed  : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(Name,Email,Message) values(?,?,?)");
		$stmt->bind_param("sss",$Name, $Email, $Message);
		$stmt->execute();
		echo "Message Sent Successfully";
		$stmt->close();
		$conn->close();
	}

?>