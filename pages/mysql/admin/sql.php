<?php
$con = mysqli_connect("localhost:3306","root","","hoantien");
mysqli_set_charset($con, 'UTF8');
//danh sach cac doi tac
function dachsachcacdoitac(){
	$qr="select * from doitac 
	order by iddoitac desc";
	return(mysqli_query($qr));
		
}
?>