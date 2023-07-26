<?php
    function insert_hoadon($name,$phone,$email,$total,$ngaydathang){
        $sql = "INSERT INTO hoadon(name,phone,email,total,ngaydathang) VALUES('$name','$phone','$email','$total','$ngaydathang')";
        return pdo_execute_lastInsertId($sql);
    }

    function get_hoadon_by_id($id){
        $sql = "SELECT * FROM hoadon WHERE id = $id";
        return pdo_query_one($sql);
    }
?>