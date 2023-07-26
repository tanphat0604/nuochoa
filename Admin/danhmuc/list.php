<h1 style="text-align: center;">Danh sách các danh mục</h1>


<div class="container">
  <?php
    if(isset($error)&&$error!=''){
        echo '<p class="alert alert-danger">'.$error.'</p>';
    }elseif(isset($success)&&$success!=''){
        echo '<p class="alert alert-success">'.$success.'</p>';
    }else{
        echo '';
    }
  ?>
  <a href="index.php?act=add_danhmuc" class="btn btn-primary">Thêm danh mục</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Mã danh mục</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

      <?php
      //pagination and display data
      $limit = 5;
      $page = 1;
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page < 1) {
          $page = 1;
        }
      }
      $start = ($page - 1) * $limit;
      $danhmuc = select_danhmuc_limit($start, $limit);
      foreach ($danhmuc as $danhmuc) {
        extract($danhmuc);
        echo ' 
        <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $ten_danhmuc . '</td>
        <td><button onclick="Confirm('.$id.');" class="btn btn-danger">Xóa</button> <a href="index.php?act=edit_danhmuc&id=' . $id . '" class="btn btn-success">Sửa</a></td>
        </tr>';
      };
      ?>
    </tbody>
  </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="index.php?act=list_danhmuc&page=1">1</a></li>
          <li class="page-item"><a class="page-link" href="index.php?act=list_danhmuc&page=2">2</a></li>
          <li class="page-item"><a class="page-link" href="index.php?act=list_danhmuc&page=3">3</a></li>
        </ul>
    </nav>
</div>

<script>
   function Confirm(id)
    {
        var x = confirm("Bạn có chắc chắn muốn xóa danh mục "+id+" này?");
        if (x){
          window.location.href ='index.php?act=xoa_danhmuc&id='+id;
          return true;
        }else{
          window.location.reload();
          return false;
        }
    }
</script>