<?php
include './db.php';

if(isset($_GET['id'])){
$selected_id = $_GET['id'];
	
	$query = "DELETE FROM users WHERE id=$selected_id";
	
	$delete = mysqli_query($connection,$query);
header('location: ../index.php?del=true');	
}