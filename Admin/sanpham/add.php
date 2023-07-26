
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
           <h2>Thêm sản phẩm mới</h2>
       </div>
       <form action="index.php?act=add_sp" class="addproduct__form" method="post" enctype="multipart/form-data">
           <label for="tensp" class="form-label">Tên sản phẩm</label>
           <input type="text" name="ten_sanpham" id="tensp" class="form-input">
           <label for="giasp"  class="form-label">Giá sản phẩm</label>
           <input type="number" name="gia" id="giasp" class="form-input">
           <label for="img" class="form-label form-label-img">Hình sản phẩm</label>
           <input type="file" name="hinh" id="img" class="form-input form-input-img">
           <label for="mota" class="form-label form-label-mota">Mô tả sản phẩm</label>
           <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
           <label for="select" class="form-label">Chọn nhóm danh mục</label>
           <select  id="select" name="id_danhmuc" class="form-select">
               <option selected><---Click để chọn---></option>
               <?php
                    foreach($danhmuc as $dm) {
                        echo '<option  value="'.$dm['id'].'">'.$dm['ten_danhmuc'].'</option>';
                    }
               ?>
              
           </select>
           <button type="submit" name="them"  class="form-submit">Thêm mới</button>
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