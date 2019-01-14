<?php 
include '../mysql/conn.php';
?>
<?php
if(isset($_REQUEST['iddoitac'])){
$iddoitac = $_GET['iddoitac'];
$sql = "select * from doitac where iddoitac='$iddoitac'";
$sql = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($sql)) {
    ?>

<form method="POST" action="doitac/suadoitac.php">
	<input type="hidden" name="iddoitac" value=" <?php echo $iddoitac?>">
	Thông tin đối tác<br>
	<input type="text" name="thongtindoitac" value="<?php echo $row['thongtindoitac']; ?>"><br>
	Hình ảnh<br>
    <input type="text" name="hinhdoitac" value="<?php echo $row['images']; ?>"><br>
	Thông tin chiết khấu<br>
	<input type="text" name="thongtinchietkhau" value="<?php echo $row['thongtinchietkhau']; ?>"><br>
	Link đối tác<br>
	<input type="text" name="linkdoitac" value="<?php echo $row['linkdoitac']; ?>"><br><br>
		
	<button name="suadoitac" value="1"  class="btn btn-info btn-lg">Lưu thay đổi</button>
	
</form>

<?php
}
}
if (isset($_POST['suadoitac'])) {
	$iddoitac=$_POST['iddoitac'];
	
	$thongtindoitac = $_POST['thongtindoitac'];
    $hinhdoitac = $_POST['hinhdoitac'];
    $thongtinchietkhau = $_POST['thongtinchietkhau'];
    $linkdoitac = $_POST['linkdoitac'];
    $sql = "update doitac set thongtindoitac='$thongtindoitac', images='$hinhdoitac',thongtinchietkhau='$thongtinchietkhau',linkdoitac='$linkdoitac' where iddoitac=$iddoitac";
    $doitac = mysqli_query($con, $sql);
  
    header('location: ../admin.php?hienthi=thongtincacdoitac');
}

?>