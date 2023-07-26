<h1 style="text-align: center;">Danh sách sản phẩm</h1>

<div class="container-ex">
    <a href="index.php?act=add_sp" class="btn btn-primary" >Thêm sản phẩm </a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Hình</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Nhóm danh mục</th>
      <th scope="col"></th>
    </tr>   
  </thead>
  <tbody>
    <?php
       include '../model/funtion.php';
       $limit = 3;
       $page = 1;
       if (isset($_GET['page'])) {
         $page = $_GET['page'];
         if ($page < 1) {
           header("location: index.php?act=list_sp");
         }
       }
       $start = ($page - 1) * $limit;
       $sanpham = select_sanpham_limit($start, $limit);
      foreach($sanpham as $sanpham){
        extract($sanpham);
        echo ' 
        <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$ten_sanpham.'</td>
        <td>'.currency_format($gia,'đ').'</td>
        <td><img src="../upload/'.$hinh.'" alt=""></td>
        <td class="col-md-2">'.$mota.'</td>
        <td>'.$id_danhmuc.'</td>
        <td><button onclick="Confirm('.$id.');" class="btn btn-danger">Xóa</button> <a href="index.php?act=edit_sp&id='.$id.'" class="btn btn-success">Sửa</a></td>
        </tr>';
      }
    ?>
   
  </tbody>
</table>
<nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="index.php?act=list_sp&page=1">1</a></li>
          <li class="page-item"><a class="page-link" href="index.php?act=list_sp&page=2">2</a></li>
          <li class="page-item"><a class="page-link" href="index.php?act=list_sp&page=3">3</a></li>
        </ul>
    </nav>
</div>
<script>
     function Confirm(id)
    {
        var x = confirm("Bạn có chắc chắn muốn xóa sản phẩm "+id+" này?");
        if (x){
          window.location.href ='index.php?act=xoa_sp&id='+id;
          return true;
        }else{
          window.location.reload();
          return false;
        }
    }
</script>