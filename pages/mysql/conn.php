<?php 
$con = mysqli_connect("localhost:3306","root","","hoantien");
mysqli_set_charset($con, 'UTF8');
function laydoitac(){
	$sql="select * from doitac limit 0,12";
	global $con;
	return mysqli_query($con, $sql);
}
function laydealkhung(){
	$sql="select * from dealkhung";
	global $con;
	return mysqli_query($con, $sql);
}
?>
