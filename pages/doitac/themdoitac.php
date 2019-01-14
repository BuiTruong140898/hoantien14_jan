<?php 
include '../mysql/conn.php';
?>

<?php 
if (isset($_POST['themdoitac'])) {
    $thongtindoitac = $_POST['thongtindoitac'];
    $hinhdoitac = $_POST['hinhdoitac'];
    $thongtinchietkhau = $_POST['thongtinchietkhau'];
    $linkdoitac = $_POST['linkdoitac'];
    $sql = "insert into doitac values(NULL, '$thongtindoitac','$hinhdoitac','$thongtinchietkhau','$linkdoitac')";
    $doitac = mysqli_query($con, $sql);
    echo $sql;
    header('location: ../admin.php?hienthi=thongtincacdoitac');
}

?>
