<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../ckeditor5/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin</title>
    
    <style>
        <?php
            include "./danhmuc/add.css";
        ?>
        img{
            width: 100px;
        }
        td{
            text-align: center;
        }
        th{
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Admin Panel</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php?act=list_danhmuc">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=list_sp">Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=taikhoan">Tài Khoản</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
</body>

</html>