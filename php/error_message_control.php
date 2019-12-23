<?php
$showsuccess = false;
$blank_entry = false;
$showerror = false;
$deleted = false;
$updated = false;
if(isset($_GET['error_code'])){
$showerror = true;
}elseif(isset($_GET['success'])){
$showsuccess = true;	
	
}elseif(isset($_GET['update'])){
$updated = true;	
	
}elseif(isset($_GET['blank'])){
$blank_entry = true;	
	
}elseif(isset($_GET['del'])){
$deleted = true;	
	
}