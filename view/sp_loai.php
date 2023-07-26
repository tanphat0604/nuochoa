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
        <div class="dropmenu">
            <button><i class="fas fa-list"></i> Danh mục sản phẩm <i class="fas fa-caret-down"></i></button>
            <div class="dropmenu-content">
               <?php
                    foreach($danhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<a href="index.php?act=sp_dm&id_dm='.$id.'"> <span>'.$ten_danhmuc.'</span> </a>';
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
        <div class="deal">
      <img class="deal-t" src="view/picture/deal.jpg" alt="">
      <?php
      extract($danhmuc_one);
        echo "<span>".$ten_danhmuc."</span>";
      ?>
    </div>
    <div class="dealsp">
      <?php
      include './model/funtion.php';
          foreach($sp_dm as $sanpham){
              extract($sanpham);
              echo '<div class="box">
              <a href="index.php?act=chitiet_sp&id='.$id.'"><img src="./upload/'.$hinh.'" alt="'.$hinh.'"></a>
              <div class="name">
                <a href="index.php?act=chitiet_sp&id='.$id.'" style="text-decoration: none; color: black;">
                  <p>'.$ten_sanpham.'</p>
                </a>
              </div>
              <div class="price">
                <p>'.currency_format($gia,'đ').' <del>'.currency_format($gia - 15,'đ').'</del></p> 
              </div>
            </div>';
          }
      ?>
    </div>

    </div>
   
</body>

</html>

