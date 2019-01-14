<?php 
$servername = 'localhost';
$username="root";
$password="";
$database="hoantien";
#create connection
$conn= new mysqli($servername, $username, $password, $database);
#check connection
if($conn->connect_error){
	die("Connect failed: ".$conn->connect_error);
}
echo "Connected successfully";

?>