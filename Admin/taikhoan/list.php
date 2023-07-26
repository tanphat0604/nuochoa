<h1 style="text-align: center;">Danh sách tài khoản</h1>
<table class="table">
  <a href="index.php?act=add_tk" class="btn btn-primary">Thêm tài khoản</a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Vai trò</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
 
 foreach($taikhoan as $value){
 extract($value);
 echo '
 <tr>
 <th scope="row">'.$id.'</th>
 <td>'.$username.'</td>
 <td>'.$email.'</td>
 <td>'.$fullname.'</td>
 <td>'.$phone.'</td>
 <td>'.$vaitro.'</td>
 <td><a href="index.php?act=edit_tk&id='.$id.'"class="btn btn-success">Sửa</a> <button onclick="Confirm('.$id.');" class="btn btn-danger">Xóa</button></td>
</tr>
 ';
 }
?>
  
  </tbody>
</table>
<script>
     function Confirm(id)
    {
        var x = confirm("Bạn có chắc chắn muốn xóa tài khoản số "+id+" này?");
        if (x){
          window.location.href ='index.php?act=xoa_tk&id='+id;
          return true;
        }else{
          window.location.reload();
          return false;
        }
    }
</script>