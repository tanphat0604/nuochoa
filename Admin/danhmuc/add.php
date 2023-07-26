<?php
        if (isset($error)&&$error!='') {
            echo '<p class="alert alert-danger">'.$error.'</p>';
        }elseif (isset($success)&&$success!='') {
            echo '<p class="alert alert-success">'.$success.'</p>';
        }else{
            echo '';
        }
?>
<div class="addproduct">
       <div class="addproduct__title">
           <h2>Thêm danh mục mới</h2>
       </div>
       <form action="#" action="index.php?act=add_danhmuc" class="addproduct__form" method="post">
           <label for="tensp" class="form-label">Tên danh mục</label>
           <input type="text" name="ten" class="form-input">
           <button type="them" class="form-submit">Thêm mới</button>
          <a href="index.php?act=list_danhmuc" style="text-decoration: none"><p  class="form-back">Trở về</p></a>
       </form>
   </div>