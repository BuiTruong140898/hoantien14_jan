 <div id="wrapper">
        <!-- Navigation -->
           <!-- Navigation -->
              <nav class="navbar navbar-default">
    <div class="container-fluid header-nav">
        <div class="container nav-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">HOANTIEN</a>
            </div><!--navbar-header-->
            <div class="search-menu-container">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="frontend-navbar-collapse">
                        <div class="search-form nav navbar-nav col-md-6 col-sm-6">
                            <form class="navbar-form navbar-left" action="">
  <div class="input-group">
    <input  onkeyup="searchdoitac(this.value)"  type="text" class="form-control" NAME="doitac" placeholder="Search website liên kết ">
    <div class="input-group-btn">
     
      <button class="btn btn-default" type="submit"  NAME="search_doitac" value="1" >
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  
</form>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                      
      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Xin chào <?php echo $_SESSION['start']; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user dropdown-content">
                        <li> <a href="home.php?hienthi=thongtingiaodich"><i class="fa fa-fw fa-area-chart"></i>Thông tin giao dịch</a></li>
                        <li> <a href="home.php?hienthi=thongtincanhan"><i class="fa fa-fw fa-info-circle"></i>Thông tin cá nhân</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Khiếu nại</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                        </ul>
                    </div><!--navbar-collapse-->
                </div>
            </div>
        </div>

    </div><!--container-->
</nav>
    </div>    