
<?php
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }
?>

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
           <h2>Sửa danh mục</h2>
       </div>
       <form action="index.php?act=update_danhmuc" class="addproduct__form" method="post">
           <label for="tensp" class="form-label">Tên danh mục</label>
           <input type="text" name="ten" class="form-input" value="<?= $ten_danhmuc; ?>">
           <input type="hidden" name="id" value="<?= $id ?>">
           <button type="submit" name="luu" class="form-submit">Lưu</button>
          <a href="index.php?act=list_danhmuc" style="text-decoration: none"><p  class="form-back">Trở về</p></a>
       </form>
   </div>