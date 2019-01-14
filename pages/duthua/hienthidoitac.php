           
            <div class="card-header">
                    <h4><i class="fa fa-table"></i> Các website liên kết</h4>
                   
            </div>
            
<!--
            <div class="input-group" style="background-color:#f7f7f7; width:100%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
                <form name="a" method="get" target="" action="">
                 <input type="hidden" name="hienthi" value="timkiemdoitac"> 

                <input type="text" name="doitac" style="width: 90%"  placeholder="Search tên website | VD: lazada.vn">
               <span class="input-group-append">
                        <button id="btnSearch" name="search_doitac" class="btn btn-success" value="1" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </form>
            </div>
-->
            <?php
            require 'mysql/conn.php';
             if( isset($_GET['search_doitac']))
              {
                $search_doitac=$_GET['doitac'];
              
                $sql="select * from doitac where thongtindoitac LIKE '%".$search_doitac."%'";
                
            }
                else
            $sql="select * from doitac";

            $doitac=mysqli_query($con,$sql);
            $i=mysqli_num_rows($doitac);
            while($i>0){
                 $row=mysqli_fetch_assoc($doitac);
             ?>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div style="height: 110px" class="panel panel-primary" onmouseover="doiTacOver(this)" onmouseout="doiTacOut(this)">
                     <a  style="text-align: center; text-decoration: none; display: block" href=<?php echo '"'.$row['linkdoitac'].'"' ?>>
                    <div align="center" class="panel-white">
                        <img align="center" src=<?php echo '"'.$row['images'].'"' ?>width="180px" height="80px">
						
                                  <!--<span class="pull-left">Chi tiết</span>-->

                                 
                                <div class="clearfix"></div>
                            </div>
                            <span style=" text-align: center; text-decoration: none; display: block; float:bottom"><?php echo $row['thongtinchietkhau'] ?></span>
                        </a>
                </div>
            </div>
            <?php
            $i--;
        }
              ?>
           
             <script>
				 function doiTacOver(a)
				 {
					  a.style.color="red";
					a.style.paddingTop="0px";
					a.style.fontSize='20px';
				 }
				 function doiTacOut(a)
				 {
					 a.style.paddingTop="2px";
					
					a.style.fontSize='';
				 }
</script>