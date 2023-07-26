<h1 style="text-align: center;">Trang chủ Admin</h1>
<div class="container" style="text-align: center">
<?php
    if(isset($_SESSION['user']['vaitro'])=='admin'){
        echo '<h3>Xin chào '.$_SESSION['user']['username'].'</h3>';
    }else{
       echo '<h3>Bạn phải là admin mới được vô</h3>';
    }
 ?>
<a href="http://localhost/DA1_NUOCHOA/index.php" class="btn btn-primary">Về phía site</a> <a href="http://localhost/DA1_NUOCHOA/index.php?act=logout" class="btn btn-danger">Đăng xuất</a>
</div>
