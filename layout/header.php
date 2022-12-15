<!DOCTYPE html>
<html lang="en">
<?php
require_once('database/config.php');
require_once('database/dbhelper.php');
?>

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/details.css">
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>FRUIT ONLINE</title>
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div id="wrapper">
        <header style="background-color:#00B14C"  >
            <div  class="container">
                <section class="logo">
                    <a href="index.php"><img src="images/1.png" alt=""></a>
                </section>
                <nav>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li class="nav-cha">
                            <a href="thucdon.php?page=thucdon">Loại Trái Cây</a>
                            <ul class="nav-con">
                                <?php
                                    $sql="SELECT * FROM category";
                                    $result=executeResult($sql);
                                    foreach($result as $item){
                                        echo '<li><a href="thucdon.php?id_category=' . $item['id'] . '">'.$item['name'].'</a></li>';
                                    }
                                ?>
                                
                            </ul>
                        </li>
                        <li><a href="about.php">Giới Thiệu</a></li>
                    </ul>
                </nav>
                <section class="menu-right">
                    <div class="cart">
                        <a href="cart.php"><i class="bi bi-cart4"></i></a>
                        <?php
                        $cart = [];
                        if (isset($_COOKIE['cart'])) {
                            $json = $_COOKIE['cart'];
                            $cart = json_decode($json, true);
                        }
                        $count = 0;
                        foreach ($cart as $item) {
                            $count += $item['num']; // đếm tổng số item
                        }
                        ?>
                        <span><?= $count ?></span>
                        
                    </div>
                    <div class="login">
                        <?php
                        if (isset($_COOKIE['username'])) {
                            $username=$_COOKIE['username'];
                            if ($username == 'AdminThanh'|| $username == 'admin') {
                                echo '<a style="color:black;" href="">' . $_COOKIE['username'] . '</a>
                                <div class="logout">
                                    <a href="admin/"><i class="fas fa-user-edit"></i>Admin</a> <br>
                                    <a href="login/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                            }
                            else{
                                echo '<a style="color:black;" href="">' . $_COOKIE['username'] . '</a>
                            <div class="logout">
                                <a href="login/changePass.php"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>
                                <a href="login/logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                            </div>
                            ';
                            }
                        } 
                        else {
                            echo '<a style="color: black; font-weight: 700;"  href="login/login.php"">Đăng nhập</a>|';
                            echo '<a style="color: black; font-weight: 700;"  href="admin/login_admin.php"">Đăng nhập Admin</a>';
                        }

                        ?>
                    </div>
                </section>
            </div>
        </header>