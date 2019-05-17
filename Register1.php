<?php

require "init.php";
        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];

$sql = "select * from registration where email like '".$email."';";   

    $result = mysqli_query($con,$sql);
	$response = array() ;



	if (mysqli_num_rows($result)>0)
	{
		$code = "Registration Failed";
		$message = "User already exist";
		array_push($response,array("code" => $code,"message"=>$message));
		 echo json_encode($response);
	}
else
{
	
        $sql = "insert into registration values ('".$firstname."','".$lastname."',,'".$password."',,'".$contact."',,'".$email."');";
        $result = mysqli_query($con,$sql);
        $code = "Registration Succes";
		$message = "Thank You! Now Log In";
		array_push($response,array("code" => $code,"message"=>$message));
		 echo json_encode($response); 
		  
} 

	mysqli_close($con);  	

	?> 