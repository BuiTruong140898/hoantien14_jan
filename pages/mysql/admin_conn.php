<?php 
$con = mysqli_connect("localhost:3306","root","","hoantien");
mysqli_set_charset($con, 'UTF8');

function layquangcao(){
	$sql="select * from quangcao";
	global $con;
	return mysqli_query($con, $sql);
}
function laydealkhung(){
	$sql="select * from dealkhung";
	global $con;
	return mysqli_query($con, $sql);
}

?>
