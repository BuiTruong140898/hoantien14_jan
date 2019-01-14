<?php session_start();
if(isset($_COOKIE['cookie_dangnhap']))
	$_SESSION['start']=$_COOKIE['cookie_dangnhap'];
  require 'mysql/conn.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hoantien.tk</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="slide/cssSlide.css" rel="stylesheet">
    <link href="scrolltop/scrolltop.css" rel="stylesheet">
</head>

<body style="margin-bottom:50px ">
    
    <?php 
          
           if(!isset($_SESSION["start"]))//{//echo($_SESSION['start']);}
           require ("homedangnhap.php");
         else 
         require('homeuser.php');

     ?>



<div style="margin-top: 0px" class="container">

 <div class="slideshow-container">

<div class="mySlides fade1">
  <div class="numbertext">1 / 3</div>
  <img src="slide/1.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext">2 / 3</div>
  <img src="slide/2.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade1">
  <div class="numbertext">3 / 3</div>
  <img src="slide/3.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot1"></span> 
  <span class="dot1"></span> 
  <span class="dot1"></span> 
</div>

            
            <!-- /.row -->
            <div class="row">
              
              <?php if(isset($_GET["hienthi"]))
        $hienthi=$_GET["hienthi"];
        else
            $hienthi="";
              switch ($hienthi) {
                  case 'thongtincanhan':
                  require "noidung/thongtincanhan.php";
                      # code...
                      break;
                  case 'thongtingiaodich':
                  require "noidung/thongtingiaodich.php";
                  break;
                  case 'timkiemgiaodich':
                  require "noidung/thongtingiaodich.php";
                    # code...
                    break;
              }
              
               ?>  
           </div>
           <div class="row">
            <div class="card-header">
                    <h4><i class="fa fa-table"></i> Các website liên kết</h4>
                   
            </div>
            <div id='hienthidoitac'>

            <?php
            
            $doitac=laydoitac();
            while($row=mysqli_fetch_assoc($doitac)){
             ?>
            
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div style="height: 110px" class="panel panel-primary" onmouseover="doiTacOver(this)" onmouseout="doiTacOut(this)">
                     <a  style="text-align: center; text-decoration: none; display: block" href=<?php echo '"'.$row['linkdoitac'].'"' ?>>
                    <div align="center" class="panel-white">
                        <img align="center" src=<?php echo '"'.$row['images'].'"' ?>width="180px" height="80px">
            
                               

                                 
                                <div class="clearfix"></div>
                            </div>
                            <span style=" text-align: center; text-decoration: none; display: block; float:bottom"><?php echo $row['thongtinchietkhau'] ?></span>
                        </a>
                </div>
            </div>
            <?php
            
        }
              ?>
  </div>     

      <button id="xemthemdoitac" onclick="xemthemdoitac()" class="btn-primary" style="height:30px;width:100%">Xem tất cả các website liên kết</button>
</div>
        <div class="row">

            <div class="card-header">
                    <h4><i class="fa fa-table"></i> Deal khủng</h4>
                   
            </div>
            <div>
            	<?php 
            	$rows=laydealkhung();
            	while ($row=mysqli_fetch_assoc($rows)) {
            		ob_start(); 


            	 ?>
            	<div class="col-lg-4 col-md-6 ">
            		<div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body" align="center" style="padding: auto">
                            <div class="list-group" >
                             <img src="{hinh}" height="270" width="315">
                                
                            </div>
                            <!-- /.list-group -->
                            <p style="height: 40px">{tendealkhung}</p>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-heading" align="center" >
                            <a class="deal" href=""> {mota}</a>
                        </div>
                    </div>
            	</div>
            	<?php 
            	$s = ob_get_clean();
                $s = str_replace("{tendealkhung}", $row['tendealkhung'], $s);
                $s = str_replace("{hinh}", $row['hinh'], $s);
                $s = str_replace("{mota}", $row['mota'], $s);
                echo $s;

            }?>
            		
            </div>
 </div> 
        
        <!-- /.row -->
        <!-- /.row -->
        <!-- /#page-wrapper -->
    </div>
<!--    nut scrolltop-->
   <button  onclick="topFunction()" id="myBtn" title="Go to top" ><i class="fa fa-2x fa-arrow-circle-up"></i></button>

    <script>
         function doiTacOver(a)
         {
          a.style.paddingTop="0px";
          a.style.fontSize='16px';
         }
         function doiTacOut(a)
         {
           a.style.paddingTop="0px";
          
          a.style.fontSize='';
         }

</script>
<script type="text/javascript">
  function xemthemdoitac() {
    document.getElementById('xemthemdoitac').style.display='none';
  var xhttp; 
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("hienthidoitac").innerHTML += this.responseText;
    }
  };
  xhttp.open("GET", "doitac/xemthemdoitac.php", true);
  xhttp.send();
}
</script>

<script type="text/javascript">
  function searchdoitac(str) {
    if(str.length!=0)
    document.getElementById('xemthemdoitac').style.display='none';//khi chuoi co gia tri thi an thanh xemthemdoitac
  else
    document.getElementById('xemthemdoitac').style.display='inline';//khi chuoi bi xoa thi hien lai thanh xemthemdoitac
     
  var xhttp; 
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("hienthidoitac").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "doitac/searchdoitac.php?q="+str, true);
  xhttp.send();
}

</script>
    <script type="text/javascript" src="slide/jsSlide.js">
	</script>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="scrolltop/scolltop.js"></script>
</body>

</html>