<?php 

$sql= "select * from nguoidung ";
$thongtin=mysqli_query($con, $sql);

$array= array( 'idnguoidung', 'hoten', 'email', 'sotaikhoan', 'tentaikhoan', 'tennganhang', 'tenchinhanh');
$array1= array('Id người dùng', 'Họ tên:', 'Email:', 'Số tài khoản:', 'Tên tài khoản:', 'Tên ngân hàng:', 'Tên chi nhánh:');

//echo($rowthongtin['email']);
//echo($array[1]);
//die();
 ?>
 <!-- /.row -->
           
           <div class="card mb-3" style="width: 100%">
    <!-- Example DataTables Card-->
    
       <div class="card-header"> <h4><i class="fa fa-table"></i> Thông tin khách hàng</h4></div>
        <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                    <form method="get" action="">
                        <input type="hidden" name="hienthi" value="tinkiemgiaodich">
                    <input style="width: 90%" id="txtGlobalSearch" class="form-control form-control-ck" name="giaodich" type="text" placeholder="Search theo ID người dùng, tên, email,...">
                    <span class="input-group-append">
                        <button id="btnSearch" name="search_nguoidung" value="1" class="btn btn-success" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
        <div class="card-body">
            <div class="table-responsive">
      
            
            <!-- <form class="form-horizontal" method="GET" action="https://chietkhau.net/user/edit/252"> -->
               
               
                   <table class="table table-bordered" id="tblCashback" width="100%" cellspacing="0">
                        <tr>
                	<?php
                	 $i=0;
                	while ( $i<= 6) {
                		
                	?>
<td><?php echo($array1[$i])?></td>
                    <?php 
                    $i++;
                    } ?>
                </tr>
<?php while ($rowsthongtin=mysqli_fetch_array($thongtin)) {

    # code...
 ?>
 <tr>
                   <td><?php echo($rowsthongtin['idnguoidung']) ?> </td>

                   <td><?php echo($rowsthongtin['hoten']) ?> </td>
                   <td><?php echo($rowsthongtin['email']) ?> </td>

                   <td><?php echo($rowsthongtin['sotaikhoan']) ?> </td>

                   <td><?php echo($rowsthongtin['tentaikhoan']) ?> </td>

                   <td><?php echo($rowsthongtin['tennganhang']) ?> </td>
                   <td><?php echo($rowsthongtin['tenchinhanh']) ?> </td>

</tr>
                    <?php 
                    } ?>
               
        </table>
         </div>
         </div>
</div>

		
        <!-- /.row -->