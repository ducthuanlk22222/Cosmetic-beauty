<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'cosmetic-beauty';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}

function template_header($title, $info, $testimonial,$menu) {
    echo <<<EOT
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- icon title-->
        <link rel="icon" href="http://cenlia.vn/wp-content/uploads/2019/09/fa-100x100.png" sizes="32x32" />
        <link rel="icon" href="http://cenlia.vn/wp-content/uploads/2019/09/fa.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://cenlia.vn/wp-content/uploads/2019/09/fa.png" />
        <title>$title</title>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        /* scroll reveal */
        <script src="https://unpkg.com/scrollreveal"></script>

        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="main.css">

    </head>

    <style>
        .row{
            display: flex;
            flex-wrap: wrap;
        }

        .container{
            width: 100%;
            max-width: 1366px;
            margin: 0 auto;
        }

        
        .container{
            width: 100%;
            max-width: 1366px;
            margin: 0 auto;
        }

        .logo{
            font-size: 2rem;
            font-weight: 800;
            color: red;
        }

        .menu{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .menu-item{
            margin-left: 1rem;
            padding: .5rem 1.5rem;
            font-weight: 600;
            /* color:var(--grey); */
            transition: .5s ease-in-out;
            cursor: pointer;
            color: var(--nomain-color);
        }
        .menu-item:hover,.menu-item.active{
            color: var(--white);
            background-color: var(--blue);
            border-radius: 1rem;
        }

        .nav{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 99;
            background-color: var(--main-bg-color);
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .menu-wrap{
            max-width: 1366px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
        }

        .right-menu {
            display: flex 
        }
        
        .products-btn{
            width: 3rem;
            height: 3rem;
            display: flex;
            
            align-items: center;
            justify-content: center;
            color: var(--black);
            font-size: 2rem;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .products-btn:hover,.products-btn.active{
            background-color: var(--blue);
            color: var(--main-bg-color);
            border-radius: 1rem;
        }
        
        .right-menu .search-form{
            position: absolute;
            top: 99%;
            right: 15%;
            transform: scale(0);
            transform-origin: top;
            box-shadow: 3px 3px 5px rgb(0 0 0 / 60%);
            margin-top: .5rem;
            background: #fff;
            height: 2.5rem;
            display: flex;
            padding: 3px 10px;
            width: 17rem;
            border-radius: 5px;
        }

        .right-menu .search-form.active{
            transform: scale(1);
            transition: .2s linear;
        }
        .icons-footer .icon-footer{
            font-size: 2rem;
            margin-left:.5rem;
        }

        .about-footer{
            margin-top:-88px;
            line-height:1.5;
        }
        .info-shop{
            margin-bottom:155px;
        }

        .about-shop{
            line-height:1.5;
        }
    </style>

    <body class="light">
    <div class="nav">
        <div class="menu-wrap">
            <a href="index.php?page=home">
                <div class="logo">COSMETIC</div>
            </a>
            <div class="menu">
                <a href="index.php?page=home">
                    <div class="menu-item">
                        Trang chủ
                    </div>
                </a>
                <a href="$info">
                    <div class="menu-item">
                        Thông tin
                    </div>
                </a>
                <a href="$menu">
                    <div class="menu-item">
                        Sản phẩm
                    </div>
                </a>
                <a href="$testimonial">
                    <div class="menu-item">
                        Phản hồi
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <!-- <div class="products-btn">
                    <i id="search-btn" class='bx bx-search'></i>
                </div> -->
                <div class="search-form">
                    <i id="search-form-icon" class='bx bx-search'></i>
                    <input type="search" placeholder="Search..." name="" id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </div>
        
                <div class="products-btn">
                    <a href="index.php?page=check-orders"><i class='bx bxs-receipt'></i></a>
                </div>
                <div class="products-btn">
                    <a href="index.php?page=cart"><i class='bx bxs-cart'></i></a>
                </div>
                <!-- <div class="products-btn">
                    <a href="./login/index.html"><i class='bx bx-user'></i></a>
                </div> -->
            </div>
        </div>
    </div>
    EOT;
}

function template_feedBack() {
    echo<<<EOT
    <section id="testimonial">
        <!-- Cần thêm Feedback header -->
        <div class="container">
        <h1 class="heading">PHẢN HỒI</h1>
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap botton-up play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                Sản phẩm rất tuyệt vời
                            </p>
                            <div class="review-img bg-img" style="background-image: url(http://localhost/cart-shopping/cart-shopping/uploads/OUQH3790.png)"></div>
                        </div>
                        <div class="review-info">
                            <h3>Trần Minh Tài</h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap botton-up play-on-scroll">
                        <div class="review-content">
                            <p>
                                Đây đúng là bí quyết dưỡng da trắng sáng
                                và căng mịn hay nhất mà mình từng sử dụng
                            </p>
                            <div class="review-img bg-img" style="background-image: url(http://localhost/cart-shopping/cart-shopping/uploads/12678012d2a21afc43b3.jpg)"></div>
                        </div>
                        <div class="review-info">
                            <h3>Nguyễn Đức Thuận</h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap botton-up play-on-scroll delay-4">
                        <div class="review-content ">
                            <p>
                                Thật sáng suốt khi biết đến và sử dụng
                                sản phẩm của CENLIA sớm

                            </p>
                            <div class="review-img bg-img" style="background-image: url(http://localhost/cart-shopping/cart-shopping/uploads/10f1626823d8eb86b2c9.jpg)"></div>
                        </div>
                        <div class="review-info">
                            <h3>Đỗ Kim Phong</h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    EOT;
}

function template_footer(){
    echo<<<EOT
    <!-- Kết thúc -->
    <section class="footer bg-img" style="background-image: url(images/banner-web-2.jpg)">
        <div class="container">
            <h1 class="footer__heading">COSMETIC</h1>
            <div class="row">
                <div class="about-shop col-6 col-xs-12">
                    <h1> Cosmetic </h1> <br>
                    <p>Mỹ phẩm cao cấp Cenlia sử dụng nguyên liệu 100% từ thiên nhiên Hàn Quốc,
                        tuyệt đối an toàn và hiệu quả cho làn da người Việt</p><br>
                    <p>Email: conian2505@gmail.com</p>
                    <p>Phone: 0908773057</p>
                    <img src="" >
                    <!-- <p>Website: cenliangoctrinh.vn</p> -->
                </div>

                <div class="about-footer">
                    <h1>Chính Sách</h1> <br>
                    <p>- Chính sách và quy định chung</p>
                    <p>- Quy định và hình thức thanh toán</p>
                    <p>- Chính sách vận chuyển</p>
                    <p>- Chính sách đổi/trả hàng và hoàn tiền</p>

                </div>
                <div class="info-shop col-2 col-xs-12">
                    <h1>
                        Thông tin
                    </h1><br>
                    <div class="icons-footer" 
                    <a href="https://www.facebook.com/taidaya4283125/"><i class='icon-footer bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/conianguys/"><i class='icon-footer bx bxl-instagram-alt' ></i></a>
                    <a href="#"><i class='icon-footer bx bx-mail-send' ></i></a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    EOT;
}
?>