<?php
    session_start();
    include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    include "./model/users.php";
    include "./model/cart.php";
    include "./model/bill.php";
    include "./model/funtion.php";
    
    $sanpham = select_sanpham();
    $danhmuc = select_danhmuc();
    include "view/header.php";
     if (isset($_GET['act'])) {
         //act
         $act = $_GET['act'];
         switch ($act) {
             case 'chitiet_sp':
                 if (isset($_GET['id'])) {
                     $id = $_GET['id'];
                     $sp = select_one_sanpham($id);
                     include "view/detail.php";                    
                 }
                 break;
             case 'sp_dm':
                    if (isset($_GET['id_dm'])) {
                        $id_dm = $_GET['id_dm'];
                        $sp_dm = select_cungdanhmuc_sanpham($id_dm);
                        $danhmuc_one = select_one_danhmuc($id_dm);
                        include 'view/sp_loai.php';
                    }
                 break;
            case'login':
                //login    
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $user = select_user($username,$password);
                    if ($user) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location.href='index.php';</script>";
                    }
                    else{
                        $error = 'Tên đăng nhập hoặc mật khẩu không đúng';
                    }
                }
                include 'view/login.php';
                break;
            case'dangky':
                //dangky
                    if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $fullname = $_POST['fullname'];
                        $phone = $_POST['phone'];
                        //validate
                       if(empty($email)||empty($username||empty($password)||empty($fullname)||empty($phone))){
                           //ko dc de trong
                        $error = 'Xin hãy điền đầy đủ thông tin';
                       }
                       //validate email
                        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $error = 'Email không đúng định dạng';
                       }
                       //validate phone
                          elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
                             $error = 'Số điện thoại không đúng định dạng';
                          }
                        //validate username
                        elseif (strlen($username) < 6) {
                            $error = 'Tên đăng nhập phải lớn hơn 6 ký tự';
                        }
                        //validate password
                        elseif (strlen($password) < 6) {
                            $error = 'Mật khẩu phải lớn hơn 6 ký tự';
                        }
                        else{
                            $user = select_user_username($username);
                            if ($user) {
                                $error = 'Tên đăng nhập đã tồn tại';
                            }
                            else{
                                $user = select_user_email($email);
                                if ($user) {
                                    $error = 'Email đã tồn tại';
                                }
                                else{
                                    $user = insert_user($username,$password,$email,$fullname,$phone);
                                    if (!$user) {
                                        $success = 'Đăng ký thành công';
                                    }
                                    else{
                                        $error = 'Đăng ký thất bại';
                                    }
                                }
                            }
                        }
                        
                    }
                    include 'view/dangky.php';
                break;
            case'quenmk':
                //quen pass
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $result = select_email($email);
                    if ($result) {
                        $success = 'Một email đã được gửi đến email của bạn';
                    }else{
                        $error = 'Email không tồn tại';
                    }
                }
                include 'view/quenmk.php';
                break;
                case 'logout':
                    //logout
                    unset($_SESSION['user']);
                    unset($_SESSION['userall']);
                    echo "<script>window.location.href='index.php';</script>";
                    break;  
                case 'addcart':
                    //them gio hang
                    if (isset($_POST['addcart'])) {
                        $id = $_POST['id'];
                        $ten_sanpham = $_POST['ten_sanpham'];
                        $gia = $_POST['gia'];
                        $hinh = $_POST['hinh'];
                        $mota = $_POST['mota'];
                        $soluong = 1;
                        $thtien = $gia * $soluong;
                        $giohang=[$id,$ten_sanpham,$gia,$hinh,$mota,$soluong,$thtien];
                        //session cart
                        $_SESSION['giohang'][] = $giohang;
                    }
                    include 'view/giohang.php';
                case 'xoaCart':
                    //xoa gio hang
                    if (isset($_GET['idCart'])) {
                        $idCart = $_GET['idCart'];
                        unset($_SESSION['giohang'][$idCart]);
                        if (empty($_SESSION['giohang'])) {
                            unset($_SESSION['giohang']);
                        }
                        echo "<script>window.location.href='index.php?act=addcart';</script>";
                    }
                break;
                case 'hoadon':
                    //hoadon
                    if (isset($_POST['dathang'])) {
                        $email = $_POST['email'];
                        $fullname = $_POST['fullname'];
                        $phone = $_POST['phone'];
                        $ngaydat = date('Y-m-d');
                        $tongdonhang = tongdonhang();
                        $idbill = insert_hoadon($fullname,$phone,$email,$tongdonhang,$ngaydat);
                        foreach ($_SESSION['giohang'] as $cart) {
                            $iduser = $_SESSION['user']['id'];
                            $idpro = $cart[0];
                            $name = $cart[1];
                            $soluong = $cart[5];
                            $img = $cart[3];
                            $gia = $cart[2];
                            $thtien = $cart[6];
                            insert_cart($iduser,$idpro,$name,$img,$gia,$soluong,$thtien,$idbill);
                        }
                        unset($_SESSION['giohang']);
                    }
                    $bill = get_hoadon_by_id($idbill);
                    $carts = get_cart_byidbill($idbill);
                    include 'view/hoadon.php';
                break;
                case 'info':
                    //thong tin user
                    
                    include 'view/info.php';
                    break;
                case 'info_edit':
                    //sua thong tin user
                    if (isset($_POST['luu'])) {
                        $id = $_POST['id'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $fullname = $_POST['fullname'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $vaitro = $_POST['vaitro'];
                        $result = update_taikhoan($id, $username,$password,$email, $fullname, $phone,$vaitro);
                        if (!$result) {
                            $success = 'Cập nhật thành công';
                            $user = select_one_taikhoan($id);
                            $_SESSION['user'] = $user;
                        }else{
                            $error = 'Cập nhật thất bại';
                        }
                        
                    }
                    include 'view/info_edit.php';
                    break;
                    case 'doi_mk':
                        //doi mat khau
                        if (isset($_POST['luu'])) {
                            $id = $_POST['id'];
                            $password = $_POST['password1'];
                            $password_new = $_POST['password2'];
                            $check = select_user_password($password);
                            if (!$check) {
                                $result = update_password($id,$password_new);
                                if (!$result) {
                                    $success = 'Cập nhật thành công';
                                }else{
                                    $error = 'Cập nhật thất bại';
                                }
                            }else{
                                $error = 'Mật khẩu cũ không đúng';
                            }
                        }
                        include 'view/doi_mk.php';
                        break;
                    case 'sanpham':
                        include 'view/sanpham.php';
                        break;
             default:
                    include "view/home.php";
                 break;
         }
     }else{
        include "view/home.php";
     }

    include "view/footer.php";
    
    
?>