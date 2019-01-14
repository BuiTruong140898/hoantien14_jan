<?php 
session_start();
 ?>

<?php 

    if(isset($_POST["dangky"])){

         $hoten=$_POST["name"];
        $email=$_POST["email"];
        $matkhau=$_POST["password"];
        $xacnhanmatkhau=$_POST["password_confirmation"];
        $sotaikhoan=$_POST["bank_account_number"];
        $tentaikhoan=$_POST["bank_owner"];
        $nganhang=$_POST["bank_name"];
        $chinhanh=$_POST["bank_branch"];
        $quantri=0;
        if($matkhau==$xacnhanmatkhau)
        {
            //nhap dung mk xac nhan
            //luu thong tin vao database
           // require "mysql/dbcon.php";
    
//     $db=new DataAccessHelper;
// $db->connect();
// $stt=$db->executeQuery("select * from nguoidung");
// $stt=mysqli_num_rows($stt)+1;;
require "mysql/conn.php";
//kiem tra ton tai email trong du lieu nguoi dung chua
$sql1="select * from nguoidung where email='".$email."'";
$kiemtra1=mysqli_query($con,$sql1);
// echo(mysqli_num_rows($kiemtra1));
// die();
if(!mysqli_num_rows($kiemtra1)){

$sql="INSERT INTO nguoidung (matkhau, hoten, email, sotaikhoan, tentaikhoan, tennganhang, tenchinhanh, quantri)  VALUES ('".md5($matkhau)."','".$hoten."','".$email."','".$sotaikhoan."','".$tentaikhoan."','".$nganhang."','".$chinhanh."',".$quantri.")";

//$db->executeNonQuery($sql);
$them=mysqli_query($con,$sql);
}
else{
$them='';
echo ('<p align="center">Trùng email!</p>');
}
// if(query($sql)===true)
// {
//     require "home.html";
// }
mysqli_close($con);
if($them)
{
$_SESSION["start"]=$email;

    header("location:home.php");
    
}

        }
   
    }
     
     ?>
