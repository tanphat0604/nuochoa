
<?php
   extract($sanpham);
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
      <h2>Thêm sản phẩm mới</h2>
  </div>
  <form action="index.php?act=update_sanpham" class="addproduct__form" method="post" enctype="multipart/form-data">
  <label for="tensp" class="form-label">Mã sản phẩm</label>
      <input type="text" name="id" id="id" class="form-input" value="<?=$id?>" readonly>
      <label for="tensp" class="form-label">Tên sản phẩm</label>
      <input type="text" name="ten_sanpham" id="tensp" class="form-input" value="<?=$ten_sanpham?>">
      <label for="giasp"  class="form-label">Giá sản phẩm</label>
      <input type="number" name="gia" id="giasp" class="form-input" value="<?=$gia?>">
      <label for="img" class="form-label form-label-img">Hình sản phẩm</label>
      <input type="file" name="hinh" id="img" class="form-input form-input-img" value="<?=$hinh?>">
      <label for="mota" class="form-label form-label-mota">Mô tả sản phẩm</label>
      <textarea name="mota" id="mota" cols="30" rows="10"><p><?php echo $mota ?></p></textarea>
      <label for="select" class="form-label">Chọn nhóm danh mục</label>
      <select  id="select" name="id_danhmuc" class="form-select">
          
          <?php
               foreach($danhmuc as $dm) {
                   if ($id_danhmuc == $dm['id']) {
                       echo '<option selected value="'.$dm['id'].'">'.$dm['ten_danhmuc'].'</option>';
                   }else {
                    echo '<option  value="'.$dm['id'].'">'.$dm['ten_danhmuc'].'</option>';
                   }
                  
               }
          ?>
         
      </select>
      <button type="submit" name="update"  class="form-submit">Lưu</button>
      <a href="index.php?act=list_sp" style="text-decoration: none" class="form-back">Trở về</a>
  </form>
</div>
<script>
ClassicEditor
   .create( document.querySelector( '#mota' ) )
   .then( editor => {
       console.log( editor );
   } )
   .catch( error => {
       console.error( error );
   } );    
</script>