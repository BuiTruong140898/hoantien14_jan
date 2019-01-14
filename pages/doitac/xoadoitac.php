<?php 
include '../mysql/conn.php';
?>
<?php 
$doitac = $_GET['iddoitac']; settype($doitac, 'int');
$sql = "delete from doitac where iddoitac='$doitac'; ";//xoa doi tac duoc chon
//begin thuc hien reset lai AUTO_INCREMENT
mysqli_query($con, $sql);
$sql = " ALTER TABLE doitac DROP iddoitac;";
mysqli_query($con, $sql);
$sql = " 
ALTER TABLE doitac
    ADD iddoitac INT NOT NULL AUTO_INCREMENT FIRST,
    ADD PRIMARY KEY (iddoitac); ";
mysqli_query($con, $sql);
//end thuc hien reset lai AUTO_INCREMENT
header('location: ../admin?hienthi=thongtincacdoitac');
?>