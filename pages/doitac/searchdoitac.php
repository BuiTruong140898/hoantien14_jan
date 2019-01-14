
                 <?php
            require '../mysql/conn.php';
             if( $_REQUEST["q"])
              {
                $search_doitac= $_REQUEST["q"];

              
                $sql="select * from doitac where thongtindoitac LIKE '%".$search_doitac."%'";
                
            }
                else 
            $sql="select * from doitac limit 0,12";

            $doitac=mysqli_query($con,$sql);
            $i=mysqli_num_rows($doitac);
            while($i>0){
                 $row=mysqli_fetch_assoc($doitac);
             ?>
            
            <div  class="col-lg-3 col-md-4 col-sm-6">
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
            $i--;
        }
              ?>
