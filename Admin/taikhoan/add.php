<h1 style="text-align: center;">Thêm tài khoản</h1>
<div class="container">
    <?php
    if ((isset($success)) && $success != "") {
        echo '<div class="alert alert-success">' . $success . '</div>';
    }elseif ((isset($error)) && $error != "") {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    }
    
    ?>
    <form action="index.php?act=add_tk" method="POST">
        <div class="login-form-header">
            <h3>Thêm tài khoản</h3>
        </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Tài khoản">
            </div><div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" name="fullname" class="form-control" placeholder="Họ tên">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" name="phone" class="form-control" placeholder="Số điện thoại" >
            </div>
            <div class="form-group">
                <label for="">Vai trò</label>
                <select name="vaitro" class="form-control">
                    <option selected value=""><--click để chọn--></option>
                    <option value="admin">Admin</option>
                    <option value="khach">Khách</option>
                </select>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <input type="submit" name="them" class="btn btn-success" value="Thêm">
                <a href="index.php?act=taikhoan" class="btn btn-secondary">Quay lại</a>
            </div>
    </form>

</div>