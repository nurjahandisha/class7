<?php
session_start();
	
	if (isset($_POST['submit'])) {

		$errors=[];
		
$request= $_POST;
	$fname=$request['fname'];	
	$lname=$request['lname'];	
	$email=$request['email'];

	if (empty($fname)) {
		$msg="plz give your fname";
		$errors["fname"]=$msg;
	}
	if (empty($lname)) {
		$msg="plz give your lname";
		$errors["lname"]=$msg;
	}

		$_SESSION['errors']=$errors;
		header("location:../index.php");

		
	}else{
		echo"you miss it";
	}