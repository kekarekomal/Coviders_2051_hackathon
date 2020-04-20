<?php 

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="coviders"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$insert = "INSERT INTO 

        (name, address)

        VALUES

        ('$name',

        '$address')";


$result = mysql_query($order);
?>