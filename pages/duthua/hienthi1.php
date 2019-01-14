<?php if(isset($_GET["hienthi"]))
        $hienthi=$_GET["hienthi"];
        else
            $hienthi="";
              switch ($hienthi) {
                  case 'thongtincanhan':
                  require "noidung/thongtincanhan.php";
                      # code...
                      break;
                  case 'thongtingiaodich':
                  require "noidung/thongtingiaodich.php";
                  break;
                  case 'timkiemdoitac':
                  require "trangchu/hienthidoitac.php";
                    # code...
                    break;
                  
    
                  default:
                  require "trangchu/hienthi.php";
                      # code...
                      break;
              }
              ?>