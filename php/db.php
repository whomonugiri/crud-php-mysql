<?php
$connection = mysqli_connect('localhost','root','','accounts');

if(!$connection){
	
die("Something wrong with database connection!");	
}