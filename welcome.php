<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="covid"; 

$ward=$_POST['name'];
$no1=$_POST['name1'];
$no2=$_POST['name2'];
$no3=$_POST['name3'];

$conn=mysqli_connect("localhost","root","root","covid");

if($conn->connect_error)
 	die("cannot connect"); 
else
	{
		$stmt= " INSERT INTO `1`( `Ward`, `Congested`, `Medium_congested`, `standalone`) VALUES ('$ward','$no1','$no2','$no3')";
		$run=mysqli_query($conn,$stmt)
		if($run==TRUE)
			echo"successfully added a new ward";
		else
			echo"error";
		
		$stmt->close();
		$conn->close();
	}

?>
