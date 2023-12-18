<?php
session_start();
include_once './cauhinh/ketnoi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Tech</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- header -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                    <h1>
                        <a href="index.php"><img src="img/home/logo.png" style="width:150px; margin-top: 10px;"></a>
                    </h1>
                </div>
                <!-- timkiem -->
                <?php
                include_once './chucnang/timkiem/timkiem.php';
                ?>
                <!-- giohang -->
                <?php
                include_once './chucnang/giohang/giohangcuaban.php';
                ?>
            </div>
        </div>
        <!-- navbar -->
        <?php
            include_once './chucnang/sanpham/danhmucsp.php';
        ?>

    </header>
    <!-- /header -->

    <!-- main -->

    <section id="body">
        <div class="container">
            <div class="row">

                <div id="main" class="col-md-12">
                    <!-- main -->
                    <?php
                    //  master page
                    if(isset($_GET["page_layout"])){
                    switch ($_GET["page_layout"]) {
                    case 'danhsachtimkiem':include_once './chucnang/timkiem/danhsachtimkiem.php';
                    break;
                    case 'danhsachsp':include_once './chucnang/sanpham/danhsachsp.php';
                    break;
                    case 'chitietsp':include_once './chucnang/sanpham/chitietsp.php';
                    break;
                    case 'giohang':include_once './chucnang/giohang/giohang.php';
                    break;
                    case 'muahang':include_once './chucnang/giohang/muahang.php';
                    break;
                    case 'hoanthanh':include_once './chucnang/giohang/hoanthanh.php';
                break;

                    }
                    }
                    else include_once './chucnang/sanpham/sanpham.php';
                    ?>



                    <!-- end main -->
                </div>
            </div>
        </div>
    </section>
    <!-- endmain -->

    <!-- footer -->
    <footer id="footer">
        <div id="footer-t">
            <div class="container">
                <div class="row">
                    <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">
                        <img src="img/home/logo.png">
                    </div>

                    <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                        <h3>Hotline</h3>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> (+84) 0862705235</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> admin123@gmail.com</p>
                    </div>
                    <div id="contact" class="col-md-6 col-sm-12 col-xs-12">
                        <h3>Contact Us</h3>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 459 Tôn Đức Thắng - Hòa Khánh Nam - Liên Chiểu - Đà Nẵng</p>
                    </div>
                    <div id="scroll">
                        <a href="#"><img src="img/home/scroll.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- endfooter -->
</body>

</html>