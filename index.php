<?php
// hàm `session_id()` sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
// - Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
if (session_id() === '') {
    // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone, Samsung, dịch vụ cài đặt và sữa chữa tại cần thơ</title>
    <!-- Liên kết bootstrap css -->
    <link href="averdor/bootstrap-4.6.0-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!--Liên kết awesome  -->
    <link href="averdor/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css"
        rel="stylesheet" />
    <!-- liên kết css -->
    <link href="css/app.css" type="text/css" rel="stylesheet" />
    <!-- Liên kết gg font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">


</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand textnav" href="#">TB PHONE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> TRANG CHỦ
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gioithieu.php"><i class="fa fa-users" aria-hidden="true"></i> GIỚI THIỆU</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        APPLE IPHONE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="iphone12pro.php">iPHONE 12 Pro Max</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphone12mini.php">iPHONE 12 Mini</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphone11.php">iPHONE 11</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="iphonSE.php">iPHONE SE</a>
                    </div>
                </li>
                <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SAMSUNG
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="galaxyS.php">GALAXY S</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="GalaxyNote.php">GALAXT NOTE</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="galaxyFold.php">GALAXY FOLD</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tintuc.php">TIN TỨC</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="lienhe.php">LIÊN HỆ</a>
                </li> 
            </ul>
            <ul class="navbar-nav ml-auto">
                   <?php 
                        if( isset($_SESSION['kh_tendangnhap_logged'])) : 
                    ?>

                        <li class="nav-item active">
                            <a class="nav-link">Chào <?= $_SESSION['kh_tendangnhap_logged']; ?></a>
                        </li>
                  
                        <li class="nav-item active">
                            <a class="nav-link" href="/storetb/logout.php">Đăng xuất</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="/storetb/login.php">Đăng nhập</a>
                        </li>
                    <?php endif; ?>
            </ul>
        </div>
    </nav><!-- Thanh nav -->


    <div style="background: none;" class="container  homepage">
        <div class="row ">
            <div class="col-md-3 khoangcach ">
                <ul class="list-group">
                    <li class="list-group-item active text-center" aria-current="true"> XU HƯỚNG MUA SẮM </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#1</span>
                        <a href="iphone12pro.html" style="text-decoration: none;">iPhone 12 Pro Max</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#2</span>
                        <a href="iphone11.html" style="text-decoration: none;">iPhone 11 Pro
                            Max</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#3</span>
                        <a href="galaxyFold.html" style="text-decoration: none;">Galaxy Fold</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#4</span>
                        <a href="iphonSE.html" style="text-decoration: none;">iPhone SE</a>
                    </li>
                    <li class="list-group-item texlistgroup">
                        <span style="color: red;">#5</span>
                        <a href="galaxyS.html" style="text-decoration: none;">Galaxy S</a>
                    </li>
                </ul>
            </div><!-- slider Trái -->

            <div class="col-md-9  ">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade sua " data-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <img src="img/covesr-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/4429992_GIAM1TR.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/iphone-chung-800-300-800x300-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/AW-S6-800-300-800x300.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- thanh slider caroule  -->

            <div class="baner-sale dinhdangcontro">
                <img src="img/1200x200-01.jpg" style="width: 99%;" />
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="khtt"><u>KHÁCH HÀNG THÂN THIẾT</u></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <marquee id="marq" scrollamount="13" direction="left " loop="50" scrolldelay="1"
                        onmouseover="this.stop()" onmouseout="this.start()">

                        <a href="iphone12mini.html"><img src="img/hh-ngoc-nu-iphone-12-pro-max-didongviet.jfif"
                                title="Ghi chú cho ảnh" width="300" height="200" /> </a>
                        <a href="iphone12pro.html"><img src="img/ca-si-do-hoang-duong-iphone12promax-didongviet-min.jpg"
                                title="Ghi chú cho ảnh" width="300" height="200" /> </a>
                        <a href="Link"><img src="img/cs-vuong-anh-tu-iphone12promax-didongviet-1.jpg"
                                title="Ghi chú cho ảnh" width="300" height="200" />
                            <a href="Link"><img src="img/ca-si-giang-hong-ngoc-didongviet.jpg " title="Ghi chú cho ảnh"
                                    width="300" height="200" />
                            </a>
                    </marquee>
                </div>
            </div>

            <div class="col-md-4">
                <img style="margin-top: 40px; margin-bottom: 20px;" src="img/quancao.gif" />
            </div>
            <div class="col-md-8" style="margin-top: 35px;">
                <h3 style="color: #1775e9;"><i class="fa fa-bars" aria-hidden="true"></i> TIN CÔNG NGHỆ 24h</h3>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Samsung sắp mang đến cho người
                                    dùng iPhone thứ mà họ mong muốn nhất
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Lộ diện bản mẫu iPhone 13:
                                    Camera "siêu to khổng lồ", thiết kế không khác biệt
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Bảng giá iPhone đầu tháng 5 -
                                    iPhone 12 giảm đến 8,5 triệu, iPhone 11 Pro Max chỉ còn 18,59 triệu đồng
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Bill Gates và công cuộc làm
                                    giàu mang tên 'Từ thiện': Bỏ ra 23,5 tỷ USD, thu về 28,5 tỷ USD
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Bộ sưu tập smartphone từ rẻ
                                    đến đắt vẫn giữ cổng 3.5mm dành cho những "người chơi hệ cắm dây"
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Kiểm tra độ bền Apple AirTag
                                    bằng cách đánh rơi, cho vào máy giặt và đông đá
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i>iPhone 5s vẫn chưa bị Apple bỏ
                                    rơi, tiếp tục được cập nhật iOS mới
                            </span></h5>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li style="list-style: none;">
                        <a style="text-decoration: none;" href="#">
                            <span style="color: #000000;">
                                <h5><i class="fa fa-hand-o-right" aria-hidden="true"></i> Apple Watch có thể sẽ đo được
                                    cả nồng độ cồn, đường huyết và huyết áp
                            </span></h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row bgfooter" style="margin-left: 0px; margin-right: 0px;">
        <div class="col-md-4 dinhdangcontro">
            <div style="padding-left: 20px;">
                <h5><a style="text-decoration: none;" href="trangchu.html"><span style="color: red;">TB
                            PHONE.VN</span></a></h5>
                <p class="txtfooter"> &copy;2017. Công ty TNHH TB.</p>
                <p class="txtfooter">GPDKKD: 123 do sở KH & ĐT TP.HCM cấp ngày 21/5/2021</p>
                <p class="txtfooter">Địa chỉ: Lô G chung cư hùng vương,phường 11,quận 5,TPHCM</p>
                <p class="txtfooter">Điện thoại: 028. 39505060 . Email: info@tbphone.com.vn</p>
                <ul class="social-icon">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 dinhdangcontro" style="padding-left: 110px;
        padding-right: 0px;">
            <p style="margin-top: 17px;
            font-weight: bold;
            font-size: 15px;">Chứng nhận <img src="img/da-dang-ky.jpg" /></p>
            <img src="img/dmca_protected_sml_120n.png" />
        </div>
        <div class="col-md-4 dinhdangcontro" style="margin-top: 20px;font-weight: bold; ">
            <p>Thanh toán miễn phí</p>
            <img src="img/logo-jcb.png" />
            <img src="img/logo-vnpay (1).png" />
            <img src="img/logo-visa.png" />
        </div>
    </div>
    <!-- kết thúc footer -->



    
    <!-- liên kết Jquery -->
    <script src="averdor/jquery/jquery.min.js"></script>
    <!-- Liên kết bootstrap JS -->
    <script src="averdor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>
</body>

</html>