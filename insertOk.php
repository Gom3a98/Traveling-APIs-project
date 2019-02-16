<?php 
session_start();
if(isset($_POST)){
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];
$age = $_POST['age'];

}


$con=new mysqli("localhost","root","","Traveling");

if($con->connect_error){
	die("Connection failed".$con->connect_error);
}
$sql = "insert into users (email,userName,password) values
('$email','$username','$pass')";

if($con->query($sql)===TRUE){
	header('location:home.php');
}else{
	echo "error".$sql ."<br>".$connect_error;
}

$con->close();
?>