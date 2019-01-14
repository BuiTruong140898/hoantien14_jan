<!-- Example DataTables Card-->

    <div class="card mb-3" style="width: 100%">
        <div class="card-header">
            <h4><i class="fa fa-table"></i> Xem Chiết Khấu |</h4>
            <div>Chiết khấu đã duyệt (approved):<?php 
            $sql="SELECT sum(sotien) from thongtingiaodich where trangthai='đã duyệt'";
            $chietkhaudaduyet=mysqli_query($con,$sql);
            $rowchietkhaudaduyet=mysqli_fetch_array($chietkhaudaduyet);
            echo $rowchietkhaudaduyet["0"].'đ';
             ?> <span id="lblApprovedCashback" class="badge badge-success"></span></div>

            <div>Chiết khấu đang chờ duyệt (pending):<?php 
            $sql="SELECT sum(sotien) from thongtingiaodich where trangthai='chờ duyệt'";
            $chietkhaudaduyet=mysqli_query($con,$sql);
            $rowchietkhaudaduyet=mysqli_fetch_array($chietkhaudaduyet);
            echo $rowchietkhaudaduyet["0"].'đ';
             ?> <span id="lblPendingCashback" class="badge badge-danger"></span></div>
            <div>Tổng số tiền:<?php 
            $sql="SELECT sum(sotien) from thongtingiaodich where trangthai='đã duyệt' or trangthai='chờ duyệt'";
            $chietkhaudaduyet=mysqli_query($con,$sql);
            $rowchietkhaudaduyet=mysqli_fetch_array($chietkhaudaduyet);
            echo $rowchietkhaudaduyet["0"].'đ';
             ?></div>
        </div>
        <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                    <form method="get" action="">
                        <input type="hidden" name="hienthi" value="tinkiemgiaodich">
                    <input style="width: 90%" id="txtGlobalSearch" class="form-control form-control-ck" name="giaodich" type="text" placeholder="Search theo ID đơn hàng, Đối tác, trạng thái ">
                    <span class="input-group-append">
                        <button id="btnSearch" name="search_giaodich" value="1" class="btn btn-success" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
        
            <div class="table-responsive">
                
                <table class="table table-bordered" id="tblCashback" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td width="10%">ID đơn hàng</td>
                            <td width="10%">Khách hàng</td>
                            <td width="10%">Đối tác</td>
                            <td width="10%">Số tiền</td>
                            <td width="10%">Chiết khấu</td>
                            <td width="10%">Ngày mua</td>
                            <td width="20%">Ngày dự kiến duyệt</td>
                            <td width="20%">Trạng thái</td>
                        </tr>
                    </thead>
                    <tbody>
                       
                            
                        <?php 
                         if(isset($_GET["search_giaodich"])){
                            $giaodich=$_GET["giaodich"];
                        
                            $sql="select * from thongtingiaodich where iddonhang like'%".$giaodich."%' or doitac like '%".$giaodich."%'  or trangthai like N'%".$giaodich."%'"  ; 
                          
                        }
                        else
                      $sql = "SELECT * FROM `thongtingiaodich`";
                       $rows = mysqli_query($con,$sql);
                       $i= mysqli_num_rows($rows);
                       
                       
                        while ($row=mysqli_fetch_assoc($rows)) {
                                            
                         
                          ?> 
                            <tr>
                            <td width="10%"><?php echo $row['iddonhang'] ?></td>
                            <td width="10%"><?php echo $row['nguoidung'] ?></td>
                            <td width="10%"><?php echo $row['doitac'] ?></td>
                            <td width="10%"><?php echo $row["sotien"] ?></td>
                            <td width="10%"><?php echo $row["hoantien"] ?></td>
                            <td width="10%"><?php echo $row['ngaymua'] ?></td>
                            <td width="20%"><?php echo $row["ngaydukienduyet"] ?></td>
                            <td width="20%"><?php echo $row["trangthai"] ?></td>
                            </tr>
                           <?php
                       
                   
                       
                   }
                         ?>
                     

                    </tbody>
                </table>
            </div> <!-- card-body-->
        <!-- card-->
    </div>
    <!-- End of Example DataTables Card-->