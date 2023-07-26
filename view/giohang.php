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
                    <a href="index.php?act=giohang"><img src="view/picture/icon_cart.png" alt=""><span id="span"
                            style="background-color: white; color: red;"><?php if(isset($_SESSION['giohang'])){
                            echo count($_SESSION['giohang']);
                            }else{
                                echo 0;
                            } ?></span></a>
                </li>
            </ul>
        </div>
        <div class="breadcrumbs" style="margin-bottom: 50px;">
        </div>
        <h2 id="text" style="color: #1143cf; font-family:'Times New Roman', Times, serif;">Giỏ Hàng</h2>
        <table class="card" cellspacing="0">

            <thead>

                <tr>

                    <th>Xóa</th>

                    <th>Hình</th>

                    <th>Tên</th>

                    <th>Bảo Hành</th>

                    <th align="right">Đơn Giá</th>

                

                    <th>Số lượng</th>

                    <th align="right">Thành tiền</th>

                </tr>

            </thead>


            <tbody  id="kq">
                     <?php
                     include './model/funtion.php';
                     
                        if (isset($_SESSION['giohang'])) {
                            $i = 0;
                            $tongtien = 0;
                            foreach ($_SESSION['giohang'] as $cart){
                                $tongtien += $cart[2] * $cart[5];
                                echo '
                                    <tr>
                                    <td width="2%" align="center" >
    
                                    <a href="index.php?act=xoaCart&idCart='.$i.'" class="del-item" onclick="removeItem(${item.product.id})" >
                        
                                        <img src="https://kimlongcenter.com/template/img/icon_delete.png" width="25">
                        
                                    </a>
                        
                                </td>
                        
                                <td width="8%" align="center" >
                        
                                        <img src="./upload/'.$cart[3].'" style="width: 80%; max-height: 10%;
                                            alt="">
                        
                                    </a>
                        
                                </td>
                        
                            
                        
                                <td width="18%" align="left" >
                        
                                    <a href=""
                                       '.$cart[4].'
                                        ></a>
                        
                                       '.$cart[1].'
                                    </a>
                        
                                </td>
                        
                                <td width="12%" >
                        
                                    Bảo hành hãng - 12 tháng
                                    <div class="red">(+0)
                        
                        
                        
                                    </div>
                        
                                </td>
                        
                            
                        
                                <td width="8%" align="right" >
                                    <p class="price">'.currency_format($cart[2]).'</p>
                                </td>
                        
                           
                                <td width="6%" align="center" >
                        
                                   
                        
                                    <input type="number" id="soluong" value="'.$cart[5].'">
                                 
                        
                                </td>
                        
                                <td width="8%" align="right" >
                        
                                    <span class="price">'.currency_format($cart[6]).'</span>
                        
                                </td>
                                    </tr>
                                ';
                                $i+=1;
                            }
                            echo '<tr>
                            <td colspan="7" align="right" >
                                <p class="price">Tổng tiền: '.currency_format($tongtien).'</p>
                            </td>
                            </tr>';
                        }else{
                            echo '<tr><td colspan="7">Không có sản phẩm nào trong giỏ hàng</td></tr>';
                        };
                        
                     ?>
            </tbody>



        </table> 
        <div class="thongtin">
            <?php
               if (isset($_SESSION['user'])) {
                  echo ' <h1>Thông tin người mua</h1>
                    <form action="index.php?act=hoadon" method="POST">
                  <input type="text" placeholder="'.$_SESSION['user']['fullname'].'" name="fullname" value="'.$_SESSION['user']['fullname'].'" readonly>
                  <br>
                  <input type="number" placeholder="'.$_SESSION['user']['phone'].'" name="phone" value="'.$_SESSION['user']['phone'].'" readonly>
                    <br>
                    <input type="text" placeholder="'.$_SESSION['user']['email'].'" name="email" value="'.$_SESSION['user']['email'].'" readonly>
                    <br>
                  <button type="submit" name="dathang" style="color: white;  cursor: pointer; font-size: 14px; font-weight: bold; width: 200px; height: 50px; background: red;">Đặt hàng</button>
                    </form>';
               }else{
                   echo 'Mời đăng nhập để đặt hàng';
               }
            ?>
           


        </div>
       
        
    </div>

</body>

</html>