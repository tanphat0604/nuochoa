
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="view/home.css">
  <link rel="stylesheet" href="view/picture/font awasome/fontawesome-free-5.13.0-web/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <title>Home</title>
</head>
  <style>
    <?php
      include 'view/home.css';
    ?>
    .menu ul li a {
      margin-right: 2px;
    }
    .menu ul li a i {
      margin-top: 5px;
    }
    .name p{
      margin-left: 50px;
    }
    .price p{
     margin-left: 20px;
    }
  </style>
<body onload="setInterval(prev,5000)">
    
  

  <!-- <div class="container">
    <div class="dropmenu">
      <button><i class="fas fa-list"></i> Danh mục sản phẩm <i class="fas fa-caret-down"></i></button>
      <ul id="show">
        <?php
          foreach($danhmuc as $danhmuc){
            extract($danhmuc);
            echo '<li> <a href="index.php?act=sp_dm&id_dm='.$id.'"> <span>'.$ten_danhmuc.'</span> </a></li>';
          }
        ?>
      
      </ul>
    </div> -->
    <div class="right-menu">
      <div class="menu">
        <ul>
          <li>
            <a href="http://localhost/DA1_NUOCHOA/index.php">TRANG CHỦ</a>
            <a href="">VỀ CHÚNG TÔI</a>
            <a href="index.php?">SẢN PHẨM</a>

            <a href="">NƯỚC HOA NỮ</a>
            <a href="">NƯỚC HOA NAM</a>
            

           
          </li>
        </ul>
      </div>
      <div class="slide">
        <img src="view/picture/sale.jpg" alt="">

      </div>
    </div>
    
    <div class="nhucau">

      <ul>
        <li>
          <img src="view/picture/1.png" alt="">
        </li>
        <li>
          <img src="view/picture/2.png" alt="">
        </li>
        <li>
          <img src="view/picture/3.png" alt="">
        </li>
        <li>
          <img src="view/picture/4.png" alt="">
        </li>
        <li>
          <img src="view/picture/5.png" alt="">
        </li>
        <li>
          <img src="view/picture/6.png" alt="">
        </li>
      </ul>
    </div>
    <div class="deal">
      <
    <span> Sản phẩm bán chạy</span>
        
    </div>
    <div class="dealsp">
      <?php
      include './model/funtion.php';
          foreach($sanpham as $sanpham){
              extract($sanpham);
              echo '<div class="box">
              <a href="index.php?act=chitiet_sp&id='.$id.'"><img src="./upload/'.$hinh.'" alt="'.$hinh.'"></a>
              <div class="name">
                <a href="index.php?act=chitiet_sp&id='.$id.'" style="text-decoration: none; color:black;">
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