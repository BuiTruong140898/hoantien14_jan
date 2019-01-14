       <?php if(isset($_REQUEST['doitac'])){
       	require('../mysql/conn.php');
       }
       ?>
          <div class="card mb-3" style="width: 100%" id="thongtincacdoitac"> 
            <div class="card-header">
                    <h4><i class="fa fa-table"></i>Các đối tác</h4>
                   
            </div>
            
            <div class="input-group" style="background-color:#f7f7f7; width:98%; padding:20px; border: 1px solid #dee2e6; margin-left: auto; margin-right: auto; margin-bottom:10px">
              
                <!-- <input type="hidden" name="hienthi" value="timkiemdoitac"> -->

                <input id='inputdoitac' type="text" name="doitac" style="width: 95%"  placeholder="Search tên website | VD: lazada.vn">
               <span class="input-group-append">
                        <button  id="btnsearchdoitac" name="search_doitac" value="1" class="btn btn-success" onclick="showHint()">
                            <i class="fa fa-search"></i>
                        </button>
                        
                    </span>
                 
            </div>
            <div class="table-responsive">
          <table class="table table-bordered" id="tblCashback" width="100%" cellspacing="0">
                    
                        <tr>
                            <td>Id đối tác</td>
                        <td>Thông tin đối tác</td>
                        <td>Images</td>
                        <td>Thông tin chiết khấu</td>
                        <td>Link đối tác</td>
              <td><button data-toggle="modal" data-target="#myModal">Thêm</button></td>
                        
                    </tr>
            <?php
             if (isset($_GET['doitac'])) {
                 $search_doitac = $_GET['doitac'];

                 $sql = "select * from doitac where thongtindoitac LIKE '%".$search_doitac."%'";
             } else {
                 $sql = 'select * from doitac order by iddoitac desc';
             }

            $doitac = mysqli_query($con, $sql);

            while ($row = mysqli_fetch_assoc($doitac)) {
                ob_start(); ?>
            <tr>
                <td> ['iddoitac']</td>
                <td>['thongtindoitac']</td>
                <td><img width="100" height="50" src= "['images']"></td>
                <td> ['thongtinchietkhau']</td>
                <td> ['linkdoitac']</td>
                <td><button type="button" onclick="sua(this.value)"  value="['iddoitac']" data-toggle="modal" data-target="#myModal1" >Sửa</button></a><a onclick="return confirm('Bạn có chắc chắn muốn xoá dữ liệu này không!')" href="doitac/xoadoitac.php?iddoitac=['iddoitac']"><button style="background: red; color:white" type="button">Xoá</button></a></td>
           </tr>



            <?php 
           $s = ob_get_clean();
                $s = str_replace("['iddoitac']", $row['iddoitac'], $s);
                $s = str_replace("['thongtindoitac']", $row['thongtindoitac'], $s);
                $s = str_replace("['images']", $row['images'], $s);
                $s = str_replace("['thongtinchietkhau']", $row['thongtinchietkhau'], $s);
                $s = str_replace("['linkdoitac']", $row['linkdoitac'], $s);
                echo $s;
            }
              ?>
              </table>
</div>


</div>
<script type="text/javascript">
	var input = document.getElementById("inputdoitac");
input.addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
   showHint();
  }
});
	function showHint() {
		var str=document.getElementById('inputdoitac').value;

    if (str.length == 0) {
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("thongtincacdoitac").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "noidung/thongtincacdoitac.php?doitac=" + str, true);
        xmlhttp.send();
    }
}
</script>

  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm đối tác</h4>
      </div>
      <div align="center" class="modal-body">
        
    <form method="post" action="doitac/themdoitac.php">
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
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa đối tác</h4>
      </div>
      <div align="center" class="modal-body" id="formsuadoitac">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  function sua(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("formsuadoitac").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "doitac/suadoitac.php?iddoitac=" + str, true);
        xmlhttp.send();
}
</script>