<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/detail.css">
    <link rel="stylesheet" href="view/picture/font awasome/fontawesome-free-5.13.0-web/css/all.css">
    <div id="fb-root"></div>
    <title>dang ky</title>
</head>
    <style>
        .dropmenu-content a {
            padding: 12px 65px;
        }
       .register-form{
            margin-top: 20px;
            max-width: 100%;
            max-height: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #000;
        }
        .register-form .form-group{
            margin-bottom: 20px;
        }
        .register-form .form-group input{
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 10px;
        }
        .register-form .form-group .btn{
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #00bfff;
            color: #fff;
            font-weight: bold;
        }
        .register-form .form-group .btn:hover{
            background-color: #3c763d;
            color: #fff;
            cursor: pointer;
        }
        .register-form .form-group .link-primary{
            margin-left: 47%;
            text-decoration: none;
            color: blue;
        }
        .register-form .form-group .link-primary:hover{
           color: #3c763d;
        }
        .a
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
        
        <div class="menu" style="background: black;">
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
        
                    <div class="register-form">
                    <?php
                          if (isset($error)&&$error!='') {
                            echo '<p class="alert alert-danger">'.$error.'</p>';
                        }elseif (isset($success)&&$success!='') {
                            echo '<p class="alert alert-success">'.$success.'</p>';
                        }else{
                            echo '';
                        }
                    ?>
                        <form action="index.php?act=dangky" method="post">
                            <div class="register-form-header">
                                <h3>Đăng Ký</h3>
                            </div>
                            <div class="register-form-body">
                            <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Tên đăng nhập</label>
                                    <input type="text" name="username" class="form-control" placeholder="Tài khoản">
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu</label>
                                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="">Họ Tên</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Họ Tên">
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Đăng Ký</button>
                                </div>
                                <div class="form-group">
                                    <a  href="index.php?act=login"  class="link-primary">Đăng Nhập</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
    
    </div>
</body>

</html>

