<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/detail.css">
    <link rel="stylesheet" href="view/picture/font awasome/fontawesome-free-5.13.0-web/css/all.css">
    <div id="fb-root"></div>
    <title>Login</title>
</head>
    <style>
        <?php
            include 'view/detail.css';
        ?>
        .dropmenu-content a {
            padding: 12px 65px;
        }
        .login-form{
            margin-top: 20px;
            max-width: 100%;
            max-height: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #000;
        }
        .login-form .form-group{
            margin-bottom: 20px;
        }
        .login-form .form-group input{
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 10px;
        }
        .login-form .form-group .btn-primary{
            text-decoration: none;
            font-size: 15pt;
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #00bfff;
            color: #fff;
            font-weight: bold;
        }
        .login-form .form-group .btn-secondary{
            text-decoration: none;
            font-size: 15pt;
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: brown;
            color: #fff;
            font-weight: bold;
        }
        .login-form .form-group .btn:hover{
            background-color: #3c763d;
            color: #fff;
            cursor: pointer;
        }
        .login-form .form-group .link-primary{
            margin-left: 47%;
            text-decoration: none;
            color: blue;
        }
        .login-form .form-group .link-primary:hover{
           color: #3c763d;
        }
        .login-form .form-group .link-secondary{
            margin-left: 47%;
            text-decoration: none;
            color: blue;
        }
        .login-form .form-group .link-secondary:hover{
           color: #3c763d;
        }
        .alert {
            margin-bottom: 0;
            text-align: center;
        }
        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
<body>
    <div class="container">
        
        <div class="menu">
            <ul>
                <li>
                    <a href="">TRANG CHỦ</a>
                    <a href="">VỀ CHÚNG TÔI</a>
                    <a href="">SẢN PHẨM</a>
                    <a href="">NƯỚC HOA NỮ</a>
                    <a href="">NƯỚC HOA NAM</a>
                    <a href=""><img src="view/picture/icon_cart.png" alt=""><span id="span" style="background-color: white; color: red;">0</span></a>
                </li>
            </ul>
        </div>
       
                    <div class="login-form">
                    <?php
                        if ((isset($error)) && $error != "" ) {
                            echo '<div class="alert alert-danger">'.$error.'</div>';
                        }elseif (isset($success)&& $success != "") {
                            echo '<div class="alert alert-success">'.$success.'</div>';
                        }
                    ?>           
                        <form action="index.php?act=info_edit" method="post" enctype="multipart/form-data">
                            <div class="login-form-header">
                                <h3>Sửa thông tin tài khoản</h3>
                            </div>
                            <div class="login-form-body">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Tài khoản" value="<?php echo $_SESSION['user']['username'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" readonly name="password" class="form-control" placeholder="Password"  value="<?php echo $_SESSION['user']['password'] ?>">
                                    
                                </div>
                                <div class="form-group">                                  
                                    <input type="hidden" name="id" class="form-control"  placeholder="Mật khẩu"  value="<?php echo $_SESSION['user']['id'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Họ tên</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Họ tên"  value="<?php echo $_SESSION['user']['fullname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email"  value="<?php echo $_SESSION['user']['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Số điện thoại"  value="<?php echo $_SESSION['user']['phone'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Vai trò</label>
                                    <input type="text" name="vaitro" class="form-control" readonly placeholder="Vai trò"  value="<?php echo $_SESSION['user']['vaitro'] ?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="luu" class="btn btn-primary" value="Cập nhật"></input>
                                    <a href="index.php?act=info" style="text-align: center; text-decoration:none; line-height:35px"><p class="btn btn-secondary">Quay lại</p></a>
                                </div>
                            </div>
                        </form>
                    </div>
    </div>
</body>

</html>

