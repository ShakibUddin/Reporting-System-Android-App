<?php
$user_name = "root";
$user_pass="";
$host_name="localhost";
$db_name="report";

$con=mysqli_connect($host_name,$user_name,$user_pass,$db_name);

if($con){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$id = $_POST["id"];
	$post = $_POST["post"];
	$password = password_hash($password, PASSWORD_DEFAULT);
	$sql = "insert into login_data(username,password,id,post) values('$username','$password','$id','$post')";

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