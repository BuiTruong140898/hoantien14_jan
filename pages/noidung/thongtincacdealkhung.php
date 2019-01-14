<?php if(isset($_REQUEST['dealkhung'])){
       	require('../mysql/admin_conn.php');
       }

       ?>
          <div class="card mb-3" style="width: 100%" id="thongtincacdealkhung"> 
            <div class="card-header">
                    <h4><i class="fa fa-table"></i>Các deal khủng</h4>
                   
            </div>
            
            <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
              
                <!-- <input type="hidden" name="hienthi" value="timkiemdoitac"> -->

                <input id='inputdealkhung' type="text" name="dealkhung" style="width: 95%"  placeholder="Search tên đối tác dealkhung, tên chương trình ">
               <span class="input-group-append">
                        <button  id="btnsearchdealkhung" name="searchdealkhung" value="1" class="btn btn-success" onclick="showHint()">
                            <i class="fa fa-search"></i>
                        </button>
                        
                    </span>
                 
            </div>
            <div class="table-responsive">
          <table class="table table-bordered" id="idtable_dealkhung" width="100%" cellspacing="0">
            <tr>
              <td>IDdealkhung</td>
              <td>Tên deal</td>
              <td>Mô tả</td>
              <td>Đối tác</td>
              <td>URL dealkhung</td>
              <td>Hình</td>
              <td>Từ ngày</td>
              <td>Đến ngày</td>
              <td>Só click</td>
              <td><button data-toggle="modal" data-target="#myModal">Thêm</button></td>
            </tr>
            <?php 
            $dealkhung=laydealkhung();


            while ($row=mysqli_fetch_assoc($dealkhung)) {
              ob_start(); 
             

              ?>
              <tr>
                <td>{iddealkhung}</td>
                <td>{tendealkhung}</td>
                <td>{mota}</td>
                <td>{doitac}</td>
                <td>{urldealkhung}</td>
                <td>{hinh}</td>
                <td>{tungay}</td>
                <td>{denngay}</td>
                <td>{soclick}</td>
                <td><a href="dealkhung/sua.php?iddealkhung={iddealkhung}"><button>Sửa</button></a><a href="dealkhung/xoa.php?iddealkhung={iddealkhung}"><button style="background-color: red; color: white">Xoá</button></a></td>
              </tr>

              <?php 
               $s = ob_get_clean();
                $s = str_replace("{iddealkhung}", $row['iddealkhung'], $s);
                $s = str_replace("{tendealkhung}", $row['tendealkhung'], $s);                
                $s = str_replace("{mota}", $row['mota'], $s);
                $s = str_replace("{doitac}", $row['doitac'], $s);
                $s = str_replace("{urldealkhung}", $row['urldealkhung'], $s);
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

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div align="center" class="modal-body">
        
    <form method="post">
      Thông tin đối tác<br>
      <input type="text" name="thongtindoitac"><br>
    
     
            Hình ảnh<br>
             <input type="text" name="hinhdoitac">
      <br>
    
    
        Thông tin chiết khấu<br>
        <input type="text" name="thongtinchietkhau">
    <br>
    
        Link đối tác<br>
        <input type="text" name="linkdoitac">
    <br>
    <br>
    <button  class="btn btn-info btn-lg"  name="themdoitac" value="1">Thêm đối tác</button> 
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>