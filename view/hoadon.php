<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/picture/font awasome/fontawesome-free-5.13.0-web/css/all.css">

    <link rel="stylesheet" href="view/giohang.css">
    <link rel="stylesheet" href="view/home.css">
    <title>Document</title>
</head>
<style>
    <?php
    include 'view/home.css';
    ?>
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
                    <a href="index.php?act=giohang"><img src="view/picture/icon_cart.png" alt=""><span id="span" style="background-color: white; color: red;"><?php if (isset($_SESSION['giohang'])) {
                                                                                                                                                                    echo count($_SESSION['giohang']);
                                                                                                                                                                } else {
                                                                                                                                                                    echo 0;
                                                                                                                                                                } ?></span></a>
                </li>
            </ul>
        </div>
        <div class="breadcrumbs" style="margin-bottom: 50px;">
        </div>
        <h2 id="text" style="color: #1143cf; font-family:'Times New Roman', Times, serif;">Cảm ơn quý khách đã mua hàng đưới đây là thông tin Hóa đơn</h2>
        <table>
            <?php
            include './model/funtion.php';
            if (isset($bill) && is_array($bill)) {
                extract($bill);
            }
            ?>
            <tr>
                <td>Mã Hóa Đơn</td>
                <td><?php echo $id ?></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Tổng tiền:</td>
                <td><?php echo currency_format($total); ?></td>
            </tr>
            <tr>
                <td>Ngày đặt hàng:</td>
                <td><?php echo $ngaydathang; ?></td>
            </tr>
        </table>
        
        <h2 id="text" style="color: #1143cf; font-family:'Times New Roman', Times, serif;">Sản Phẩm bạn đã mua</h2>
        <table class="card" cellspacing="0">

            <thead>

                <tr>


                    <th>Hình</th>
                    <th>Tên</th>
                    <th >Đơn Giá</th>
                    <th>Số lượng</th>
                    <th >Thành tiền</th>

                </tr>

            </thead>


            <tbody  id="kq">
                     <?php
                     include './model/funtion.php';
                            foreach ($carts as $cart) {
                                extract($cart);
                                ?>
                                <tr>
                                    <td><img src="./upload/<?php echo $img ?>" alt="" style="width: 100px;"></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo currency_format($price) ?></td>
                                    <td><?php echo $soluong ?></td>
                                    <td><?php echo currency_format($thanhtien) ?></td>
                                </tr>
                                <?php
                            }
                     ?>
            </tbody>



        </table> 
    </div>


</body>

</html>