<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/detail.css">
    <link rel="stylesheet" href="view/picture/font awasome/fontawesome-free-5.13.0-web/css/all.css">
    <div id="fb-root"></div>
    <title>Detail</title>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=197473748008732&autoLogAppEvents=1" nonce="zpjqIFG8"></script>
</head>
    <style>
        <?php
            include 'view/detail.css';
        ?>
        .vaogio button{
            width: 100%;
            height: 49px;
            background-color: whitesmoke;
            cursor: pointer;
        }
        .dropmenu-content a {
            padding: 12px 65px;
        }
    </style>
<body>

    <div class="container">
        
        <div class="menu">
            <ul>
                <li>
                    <a href="http://localhost/DA1_NUOCHOA/index.php">TRANG CHỦ</a>
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
        <?php
            include './model/funtion.php';
            extract($sp);
            echo '<div class="left">
            <img style="width: 95%;" src="./upload/'.$hinh.'" alt="'.$hinh.'">
        </div>'
        ?>
        <div class="right">
         <?php
            echo ' <div class="name">
            '.$ten_sanpham.'
        </div>
        <div class="raiting-start">
            <ul id="start">
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
                <li><i class="fa fa-star fa-fw"></i></li>
            </ul>
        </div>
        <div class="row-item">
           <p id="gia-khuyen-mai">Giá: <span style="margin-left: 175px;">'.currency_format($gia,'đ').'</span></p>
           <p id="con-hang">Còn hàng: <span>còn</span></p>
           <p id="con-hang">Bảo hành: <span>bảo hành 12 tháng</span></p>
           <p id="con-hang">Mô tả:    <span style="margin-left: 165px;">'.$mota.'</span></p>
        </div>
        <div class="datmuangay" >
             <a href=""><p>ĐẶT MUA NGAY</p> </a>
        </div>
        <div class="muatragop">
            <p>MUA TRẢ GÓP</p>
        </div>
        <div onclick="" class="vaogio">
        <form action="index.php?act=addcart" method="post">
        <input type="hidden" name="id" value="'.$id.'">
        <input type="hidden" name="ten_sanpham" value="'.$ten_sanpham.'">
        <input type="hidden" name="gia" value="'.$gia.'">
        <input type="hidden" name="hinh" value="'.$hinh.'">
        <input type="hidden" name="mota" value="'.$mota.'">
        <button type="submit" name="addcart">
        <i class="fas fa-cart-plus"></i>
        <p >CHO VÀO GIỎ</p>
        </button>
    </form>
     </div>';
         ?>
        </div>
        <div class="breadcrumbs">
        </div>
        <div class="fb-comments" data-href="index.php?act=chitiet_sp&id=<?=$id?>" data-width="100%" data-numposts="1">a</div>
        <div id="fb-root"></div>
    </div>
   
</body>

</html>

