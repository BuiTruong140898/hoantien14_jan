<?php if(isset($_REQUEST['quangcao'])){
       	require('../mysql/admin_conn.php');
       }

       ?>
          <div class="card mb-3" style="width: 100%" id="thongtincacquangcao"> 
            <div class="card-header">
                    <h4><i class="fa fa-table"></i>Các quảng cáo</h4>
                   
            </div>
            
            <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
              
                <!-- <input type="hidden" name="hienthi" value="timkiemdoitac"> -->

                <input id='inputquangcao' type="text" name="quangcao" style="width: 95%"  placeholder="Search tên đối tác quảng cáo, tên chương trình ">
               <span class="input-group-append">
                        <button  id="btnsearchquangcao" name="searchquangcao" value="1" class="btn btn-success" onclick="showHint()">
                            <i class="fa fa-search"></i>
                        </button>
                        
                    </span>
                 
            </div>
            <div class="table-responsive">
          <table class="table table-bordered" id="idtable_quangcao" width="100%" cellspacing="0">
            <tr>
              <td>IDquangcao</td>
              <td>Mô tả</td>
              <td>Đối tác</td>
              <td>URL Quảng cáo</td>
              <td>Hình</td>
              <td>Từ ngày</td>
              <td>Đến ngày</td>
              <td>Só click</td>
              <td><a href="quangcao/them.php"><button>Thêm</button></a></td>
              

            </tr>
            <?php 
            $quangcao=layquangcao();


            while ($row=mysqli_fetch_assoc($quangcao)) {
              ob_start(); 
             

              ?>
              <tr>
                <td>{idquangcao}</td>
                <td>{mota}</td>
                <td>{doitac}</td>
                <td>{urlquangcao}</td>
                <td>{hinh}</td>
                <td>{tungay}</td>
                <td>{denngay}</td>
                <td>{soclick}</td>
                <td><a href="quangcao/sua.php?idquangcao={idquangcao}"><button>Sửa</button></a><a href="quangcao/xoa.php?idquangcao={idquangcao}"><button style="background-color: red; color: white">Xoá</button></a></td>
              </tr>

              <?php 
               $s = ob_get_clean();
                $s = str_replace("{idquangcao}", $row['idquangcao'], $s);
                $s = str_replace("{mota}", $row['mota'], $s);
                $s = str_replace("{doitac}", $row['doitac'], $s);
                $s = str_replace("{urlquangcao}", $row['urlquangcao'], $s);
                $s = str_replace("{hinh}", $row['hinh'], $s);
                $s = str_replace("{tungay}", $row['tungay'], $s);
                $s = str_replace("{denngay}", $row['denngay'], $s);
                $s = str_replace("{soclick}", $row['soclick'], $s);
              echo $s;

              }
               
               ?>

          </table>
        </div>
      </div>

