
<?php 
$sql= "select * from nguoidung where email='".$_SESSION['start']."'";
$thongtin=mysqli_query($con, $sql);
$rowthongtin=mysqli_fetch_array($thongtin);
$array= array( 'hoten', 'email', 'sotaikhoan', 'tentaikhoan', 'tennganhang', 'tenchinhanh');
$array1= array( 'Họ tên:', 'Email:', 'Số tài khoản:', 'Tên tài khoản:', 'Tên ngân hàng:', 'Tên chi nhánh:');

//echo($rowthongtin['email']);
//echo($array[1]);
//die();
 ?>
 <!-- /.row -->
          
    <!-- Example DataTables Card-->
    <div class="card w-75">
       <h4> <div class="card-header"><i class="fa fa-table"></i> Thông tin cá nhân</h4></div>
        <div class="card-body">
            
            <!-- <form class="form-horizontal" method="GET" action="https://chietkhau.net/user/edit/252"> -->
                <input type="hidden" name="_token" value="59IOfPmndzBwI3POiqJLxKkfvUjyhvg0ab3Nt976">
             
                <div class="form-group">
                	<?php
                	 $i=0;
                	while ( $i<= 5) {
                		# code...
                	
                       
                	?>

                    <label align="right" for="name" class="col-md-4 control-label"><?php echo($array1[$i])?></label>

                    <div class="col-md-6">
                        <input id="" type="text" class="form-control" name="name" value=<?php echo('"'.$rowthongtin[$array[$i]].'"') ?> >

                    </div>
                    <?php $i++;
                    } ?>
                </div>
</div>
</div>    
        <!-- /.row -->