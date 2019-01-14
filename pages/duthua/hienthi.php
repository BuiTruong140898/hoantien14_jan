            <div class="card-header">
                    <h4><i class="fa fa-table"></i> Nhận hoàn tiền</h4>
                    <div>1. Search tên website </div>
                    <div>2. Click "Tiếp tục để được chuyển đến website"</div>
                    <div>3. Mua sắm như bình thường</div>
                    <div>4. Nhận hoàn tiền vào tài khoản</div>
            </div>
            
            <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                <form  >
                <input type="text" style="width: 900px"  placeholder="Search tên website | VD: lazada.vn">
                <span class="input-group-append">
                        <button  name="search_doitac" class="btn btn-success">
                            <i class="fa fa-search"></i>
                        </button>
                        
                    </span>
                    </form>
            </div>
            <?php
            require 'mysql/conn.php';
            $sql="select * from doitac";

            $doitac=mysqli_query($con,$sql);
            $i=mysqli_num_rows($doitac);
            while($i>0){
                 $row=mysqli_fetch_assoc($doitac);
             ?>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div align="center" class="panel-white">
                        <img align="center" src=<?php echo '"'.$row['images'].'"' ?>width="100px" height="50px">
                        <p>
                            <p align="center"><?php echo $row['thongtinchietkhau'] ?></p>
                    </div>
                    <a href=<?php echo '"'.$row['linkdoitac'].'"' ?>>
                            <div class="panel-footer">
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                <span class="pull-right">Tiếp tục <i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                </div>
            </div>
            <?php
            $i--;
        }
              ?>
             