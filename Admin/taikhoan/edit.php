<h1 style="text-align: center;">Sửa thông tin tài khoản</h1>
<div class="container">
    <?php
    if (isset($taikhoan)&& is_array($taikhoan) ) {
        extract($taikhoan);
        
    }
    if ((isset($success)) && $success != "") {
        echo '<div class="alert alert-success">' . $success . '</div>';
    }elseif ((isset($error)) && $error != "") {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    }
    
    ?>
    <form action="index.php?act=update_tk" method="POST">
        <div class="login-form-header">
            <h3>Thông tin tài khoản</h3>
        </div>
        <div class="login-form-body">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="password" value="<?= $password ?>">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Tài khoản" value="<?=  $username ?>">
            </div>
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" name="fullname" class="form-control" placeholder="Họ tên" value="<?=  $fullname ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?=  $email ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" value="<?=  $phone ?>">
            </div>
            <div class="form-group">
                <label for="">Vai trò</label>
                <select name="vaitro" class="form-control">
                    <option value="admin" <?php if ($vaitro == 'admin') echo 'selected' ?>>Admin</option>
                    <option value="khach" <?php if ($vaitro == 'khach') echo 'selected' ?>>Khách</option>
                </select>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <input type="submit" name="submit" class="btn btn-success" value="Lưu">
                <a href="index.php?act=taikhoan" class="btn btn-secondary">Quay lại</a>
            </div>
    </form>

</div>