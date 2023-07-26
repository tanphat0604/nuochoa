<div class="header">
    
    <input type="text" placeholder="Tìm kiếm..." class="timkiem">
    
    <i class="fas fa-search"></i>
<div class="headright">
    <a href="index.php?act=addcart"><img src="./view/picture/icon_cart.png" alt=""><span id="span" style="background-color: white; color: red;"><?php if(isset($_SESSION['giohang'])){
                            echo count($_SESSION['giohang']);
                            }else{
                                echo 0;
                            } ?></span></a>

            <?php
              if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                echo '<a href="index.php?act=info"> <i class="fa-solid fa-user"></i>'.$username.'</a>';
                 if ($_SESSION['user']['vaitro'] == 'admin') {
                  echo '<a href="admin"><i class="fas fa-cog"></i></a>';
                 }
                echo "<a href='index.php?act=logout'><i class='fas fa-sign-out-alt'></i></a>";
              }else{
                echo '<a href="index.php?act=login"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>';
              }
            ?>
          </li>
        </ul>
  </div>    
  </div>