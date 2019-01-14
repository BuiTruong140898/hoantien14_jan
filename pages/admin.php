<?php session_start();
if(isset($_COOKIE['cookie_admin']))
  $_SESSION['admin']=$_COOKIE['cookie_admin'];
if(!isset($_SESSION["admin"]))//{//echo($_SESSION['start']);}
header('location:homedangnhap.php');
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hoantien.tk-Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
</head>

<body >
    
    <?php 
    
    require 'mysql/admin_conn.php';
     ?>
    <div id="wrapper">
        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation"  style="margin-bottom: 0px">
           
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="admin.php">Hoàn tiền - Admin</a>

            </div>
            <!-- /.navbar-header -->
      <ul class="nav navbar-top-links navbar-right">

      <li><span class="glyphicon glyphicon-user"></span> <?php echo($_SESSION["admin"]);?></li>
      
     <li><a href="logout.php?q=1"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
          </li>
    </ul>
          
            <!-- /.navbar-top-links -->
            <div class="navbar-basic sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?hienthi=thongtincacdoitac">
                
                <span class="nav-link-text"><i class="fa fa-fw fa-area-chart"></i>Thông tin các đối tác</span>
              </a>
                        </li>
<li>
                        
                            <a href="?hienthi=thongtincacquangcao"><i class="fa fa-fw fa-area-chart"></i>Thông tin các quảng cáo</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        
                            <a href="?hienthi=thongtincacdealkhung"><i class="fa fa-fw fa-area-chart"></i>Thông tin các deal khủng
              </a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        
                            <a href="?hienthi=thongtincacgiaodich"><i class="fa fa-fw fa-area-chart"></i>Thông tin các giao dịch</a>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       
                        <li>
                            <a  href="?hienthi=thongtinnguoidung"><i class="fa fa-fw fa-area-chart"></i>Thông tin người dùng</a>
                           
                        </li>
                    </ul>
               
                </div>
                <!-- /.sidebar-collapse -->   
           
         </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
              
              <?php if (isset($_GET['hienthi'])) {
                    $hienthi = $_GET['hienthi'];
                } else {
            $hienthi = '';
        }
              switch ($hienthi) {
                  case 'thongtincacgiaodich':
                      require 'noidung/thongtincacgiaodich.php';
                      break;
				  case 'thongtincacquangcao':
					  require('noidung/thongtincacquangcao.php');
					  break;
				  case 'thongtincacdealkhung':
					  require('noidung/thongtincacdealkhung.php');
					  break;
                  case 'thongtincacdoitac':
                      require 'noidung/thongtincacdoitac.php';
                      break;
                  case 'thongtinnguoidung':
                      require 'noidung/thongtinnguoidung.php';
                      break;
                  case 'timkiemdoitac':
                      require 'noidung/thongtincacdoitac.php';
                      break;
                  case 'timkiemgiaodich':
                    require 'noidung/thongtincacgiaodich.php';
                    // code...
                    break;

                  default:
                  require 'noidung/thongtincacdoitac.php';

                      // code...
                      break;
              }

               ?>  
        </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /#page-wrapper -->
    </div>
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
</body>

</html>