
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="view/home.css"> -->
  <link rel="stylesheet" href="view/picture/font awasome/fontawesome-free-5.13.0-web/css/all.css">
  <title>Home</title>
</head>
  <style>
    <?php
      include "view/detail.css";
    ?>
    .name p{
      margin-left: 50px;
    }
    .price p{
     margin-left: 20px;
    }
  </style>
<body onload="setInterval(prev,5000)">

  

  <div class="container">
  <div class="dropmenu">
            <button><i class="fas fa-list"></i>Lọc theo thương hiệu <i class="fas fa-caret-down"></i></button>
            <div class="dropmenu-content">
               <?php
                    foreach($danhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<a href="index.php?act=sp_theodanhmuc&id_danhmuc='.$id.'"> <span>'.$ten_danhmuc.'</span> </a>';
                    }
               ?>
            </div>
        </div>
    <div class="right-menu">
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
      </div>
      <!-- <div class="slide">
        <img class="imgs" id="imgs" src="view/picture/slide1.png" alt="">
        <i id="prev" class="fas fa-backward" onclick="back()"></i>
        <i id="next" class="fas fa-forward" onclick="prev()"></i>
      </div> -->
    
    <!-- <div class="three-img">
      <img class="hover_scale transition lazy" src="view/picture/laptopcu.png" alt="sản phẩm laptop cũ" style="display: block;">
      <img class="hover_scale transition lazy" src="view/picture/laptopgm.png" alt="sản phẩm laptop cũ" style="display: block;">
      <img class="hover_scale transition lazy" src="view/picture/gaminggear.png" alt="sản phẩm laptop cũ" style="display: block;">
    </div> -->
    <!-- <div class="hr">
      <p>Lọc xem theo:</p>
      <ul>
        <li>Hãng <i class="fas fa-caret-down"></i> </li>
        <li>Mức Giá <i class="fas fa-caret-down"></i> </li>
        <li>CPU <i class="fas fa-caret-down"></i> </li>
        <li>RAM <i class="fas fa-caret-down"></i> </li>
        <li>VGA <i class="fas fa-caret-down"></i> </li>
        <li>Ổ Cứng <i class="fas fa-caret-down"></i> </li>
        <li>Màn Hình <i class="fas fa-caret-down"></i> </li>
        <li>Hệ Điều Hành <i class="fas fa-caret-down"></i> </li>
      </ul>
    </div> -->
    <!-- <div class="nhucau">
      <p>CHỌN LAPTOP THEO NHU CẦU</p>
      <ul>
        <li>
          <img src="view/picture/gm-v2_1.png" alt="">
          <span style="padding-left: 39px;">LAPTOP GAMING</span>
        </li>
        <li>
          <img src="view/picture/htvp-v2_1.png" alt="">
          <span style="padding-left: 20px;">HỌC TẬP - VĂN PHÒNG</span>
        </li>
        <li>
          <img src="view/picture/dhkt-v2_1.png" alt="">
          <span style="padding-left: 30px;">ĐỒ HỌA - KỸ THUẬT</span>
        </li>
        <li>
          <img src="view/picture/laptop-cao-cap-sang-trong-2.jpg" alt="">
          <span style="padding-left: 15px;">CAO CẤP SANG TRỌNG</span>
        </li>
        <li>
          <img src="view/picture/laptop-mong-nhe.jpg" alt="">
          <span style="padding-left: 60px;">MỎNG NHẸ</span>
        </li>
      </ul>
    </div> -->
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

  
  <script>
    //slide ảnh
    var imgId = document.getElementById("imgs")
    var i = 1;

    function prev() {
      i++
      if (i > 5) i = 1;
      imgId.src = `view/picture/slide${i}.png`
    }

    function back() {
      i--
      if (i < 1) i = 5;
      imgId.src = `view/picture/slide${i}.png`
    }
  </script>
</body>

</html>