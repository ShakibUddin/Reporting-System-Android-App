<?php
$user_name = "root";
$user_pass="";
$host_name="localhost";
$db_name="report";

$con=mysqli_connect($host_name,$user_name,$user_pass,$db_name);

if($con){
	$username = $_POST["username"];
	$id = $_POST["id"];
	$password = $_POST["password"];
	$password = password_hash($password, PASSWORD_DEFAULT);
	$sql = "insert into signup(username,id,password) values('$username','$id','$password')";

	if(mysqli_query($con,$sql)){
		$result["success"]="1";
	}
	else{
		$result["success"]="0";
	}
	echo json_encode($result);
}
else{
	echo json_encode(array('response'=>'Error'));
}
mysqli_close($con);
?>