<?php 

session_start();
$pageTitle = 'Sign Up';

if(session_destroy()){
	header('location:signin.php');
}
