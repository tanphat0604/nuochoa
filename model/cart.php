<?php
    function tongdonhang(){
        $tongtien = 0;
        if (isset($_SESSION['giohang'])) {
            foreach ($_SESSION['giohang'] as $cart) {
                $tongtien += $cart[6];
            }
        }
        return $tongtien;
      
    }
    function insert_cart($iduser,$idpro,$name,$img,$price,$soluong,$thanhtien,$idbill){
        $sql = "INSERT INTO giohang(iduser,idpro,name,img,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$name','$img','$price','$soluong','$thanhtien','$idbill')";
         pdo_execute($sql);
    }

    function get_cart_byidbill($idbill){
        $sql = "SELECT * FROM giohang WHERE idbill = $idbill";
        return pdo_query($sql);
    }
?>