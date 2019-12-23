<?php
include './db.php';
include './error_check.php';
if(isset($_POST['submit'])){
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$email = $_POST['email_id'];
	print_r($lname);
	if(conNumbers($fname.$lname) || conSpecial($fname.$lname)){
		header('location:../index.php?error_code=101');
	}elseif($fname=="" || $lname=="" || $email == ""){
		header('location:../index.php?blank=true');
	
	}else{
		$query = "INSERT INTO users (first_name,last_name,email_id) VALUES('$fname','$lname','$email')";

$insert_data = mysqli_query($connection,$query);

if(!$insert_data){
	
die("something wrong with query");	
}else{
	
header('location:../index.php?success=true');	
}
	}
	
	
}




