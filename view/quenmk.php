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
        .dropmenu-content a {
            padding: 12px 65px;
        }
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px; 
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 100px;
        }
        .form-group {
            margin-bottom: 15px;
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
        <div class="dropmenu">
            <button><i class="fas fa-list"></i> Danh mục sản phẩm <i class="fas fa-caret-down"></i></button>
            <div class="dropmenu-content">
               <?php
                    foreach($danhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<a href="index.php?act=sp_theodanhmuc&id_danhmuc='.$id.'"> <span>'.$ten_danhmuc.'</span> </a>';
                    }
               ?>
            </div>
        </div>
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
        <div class="breadcrumbs">
        </div>
                    <div class="login-form">
                        <form action="index.php?act=quenmk" method="post">
                            <div class="login-form-header">
                                <h3>Quên mật khẩu</h3>
                            </div>
                            <div class="login-form-body">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                        if ((isset($error)) && $error != "" ) {
                            echo '<p class="alert alert-danger">'.$error.'</p>';
                        }elseif ((isset($success)) && $success != "" ) {
                            echo '<p class="alert alert-success">'.$success.'</p>';
                        }else{
                            echo '';
                        }
                    ?>
        <div class="breadcrumbs">
        </div>
    </div>
</body>

</html>

