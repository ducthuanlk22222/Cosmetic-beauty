<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon title-->
    <link rel="icon" href="http://cenlia.vn/wp-content/uploads/2019/09/fa-100x100.png" sizes="32x32" />
    <link rel="icon" href="http://cenlia.vn/wp-content/uploads/2019/09/fa.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="http://cenlia.vn/wp-content/uploads/2019/09/fa.png" />
    <title>CENLIA</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">

    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-database.js"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script> -->
    <!-- <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-storage.js"></script> -->
</head>

<body class="light">

<style>
        :root{
        --primary-color:#00aeff;
        --background-color:#F0F3F7;
        --secon-color:#9da2ad;
        --grey: #7a7a7b;
        --white: #ffffff;
        --black: #000;
        --blue: rgb(17, 132, 226);

        --dark-color: #909090;
        --light-color:#ffffff;

        --dark-second-color:#727475 ;
        --light-second-color: #ffffff;

        --dark-background:#23242D;
        --light-background: #ffffff;

        --dark-second-background: #181818;
        --light-second-background: #f1f1f1;
        
        --dark-nomain:var(--white);
        --light-nomain:var(--black);
        
    }
    .light{
        --main-bg-color: var(--light-background);
        --second-bg-color:var(--light-second-background);
        --main-color: var(--light-color);
        --second-color: var(--light-second-color);
        --nomain-color: var(--light-nomain);
    }
    .dark{
        --main-bg-color: var(--dark-background);
        --second-bg-color:var(--dark-second-background);
        --main-color: var(--dark-color);
        --second-color: var(--dark-second-color);
        --nomain-color: var(--dark-nomain);
    }

    *{
        font-family: 'Poppins',sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border:none;
        outline:none;
    }
    h1,h2,h3,h4,h5,h6,span{
        font-family: 'Fraunces', serif;
    }
    a{
        color:unset;
        text-decoration: none;
    }

    body,html{
        background-color: var(--main-bg-color);
        scroll-behavior: smooth;
        position: relative;
        overflow-x: hidden;
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
    .right-menu {
        display: flex 
    }
    .menu-wrap{
        max-width: 1366px;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
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

    #search-form-icon{
        position: absolute;
        right: 11px;
        top: 30%;
    }

    .btn{
        position: relative;
        float: right;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 3rem;
        width: 8rem;
        background-color: var(--blue);
        color: #fff;
        margin-top: 8px;
    }

    .btn:hover{
        cursor: pointer;
        width: 10rem;
        letter-spacing: 2px;
        transition: .2s linear;
    }

    .cart-btn{
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

    .cart-btn:hover,.cart-btn.active{
        background-color: var(--blue);
        color: var(--main-bg-color);
        border-radius: 1rem;
    }
    .fullheight{
        height: 100vh;
    }
    .align-items-center{
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .bg-img{
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .bg-imgs{
        background-position: center;
        background-repeat: no-repeat;
    }
    .bg-img-fixed{
        background-attachment: fixed; /*focus*/
    }

    .container{
        width: 100%;
        max-width: 1366px;
        margin: 0 auto;
    }

    section{
        padding: 9rem 0;
    }
    .slogan{
        text-align: left;
    }
    .slogan h1{
        font-size: 7rem;
        color: var(--black);
    }
    .slogan a{
        display: inline-block;
        padding:1rem 5rem;
        outline: none;
        border: none;
        background-color: var(--background-color);
        border: .125rem solid var(--black);
        border-radius: 2rem;
        color: var(--black);
        margin:3rem 0;
        cursor: pointer;
        font-weight:600;
        font-size: 1rem;
        transition: .3s ease-in-out;
    }
    .slogan a:hover{
        background-color: var(--blue);
        color: var(--white); 

    }
    .fullwidth{
        width:100%;
    }
    #about img{
        border-radius: 2rem;
        box-shadow: rgba(17,17,26, 0.1) 0px 8px 24px,
        rgba(17,17,26, 0.1) 0px 16px 56px,
        rgba(17,17,26, 0.1) 0px 24px 80px;
    }
    .about-slogan{
        padding: 4rem;
        background-color: var(--main-color);
        border-radius: 2rem ;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
        
    }
    .about-slogan.start{
        transform: translateX(-5rem)!important;
    }
    .about-slogan h3{
        font-size: 2rem;
        margin-bottom: 3rem;
        /* color: var(--black); */
    }
    .primary-color{
        color: red;
    }
    .cosmetic-menu{
        padding: 4rem;
        background-color: var(--second-color);
        border-radius: 2rem;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .cosmetic-menu h1{
        color: var(--black);
    }
    .cosmetic-menu p{
        margin: 2rem 0;
    }
    .cosmetic-category{
        display: flex;
    }
    .cosmetic-category button{
        padding:.5rem 2.5rem;
        margin: 0 1rem;;
        outline: none;
        border: 1px solid var(--black);
        background-color: transparent;
        color: var(--black);
        font-weight: 600;
        border-radius: 1rem;
        cursor: pointer;
        transition: .3s ease-in-out;
    }
    .cosmetic-category button:hover,
    .cosmetic-category button.active{
        background-color: var(--blue);
        color: white;

    }
    .row{
        display: flex;
        flex-wrap: wrap;
    }

    .cosmetic-item-wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin-top: 3rem;

    }
    .cosmetic-item{
        width:25%;
        height: 25rem;
        padding:1rem
    }
    .item-wrap{
        height: 100%;
        transition: .4s ease-in-out;
        cursor: pointer;
        border-radius: 2rem;
    }
    .item-wrap:hover{
    
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px,
        rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    }
    .item-img{
        height: 60%;
        position: relative;
        overflow: hidden;
        border-radius: 2rem;
    }
    .img-holder{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: .5s ease-in-out;
        border-radius: 2rem
    }
    .img-holder:hover{
        transform:scale(1.3) rotate(45deg);
        
    }
    .item-info{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 3rem;
        padding: 0 1rem;
    }
    .item-info h3{
        color: red;
    }
    .item-info>div:first-child{
        text-align: left;
    }
    .review-wrap{
        width:100%;
        padding: 1rem;
        background-color:var(--second-color);
        border-radius: 3rem;
        box-shadow: rgba(100, 100, 111, 0.3) 0px 7px 29px 0px;
    }
    .review-wrap.active.start{
        transform: scale(1.2)!important;
    }
    .review-content{
        padding: 3rem;
        border-bottom: .125rem solid var(--black);
        position: relative;
        text-align: center;
        
    }

    .review-img{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -2.5rem;
        width:5rem;
        height: 5rem;
        border-radius: 2rem;
        box-shadow: rgba(100, 100, 111, 0.3) 0px 7px 29px 0px;
        background-size: cover;
    }
    .review-info{
        padding: 3rem;
        text-align: center;

    }
    .rating{
        margin-top: 2rem;
    }
    .rating i{
        color: rgb(0, 102, 255);
    }
    .footer{
        background-color: #ddd;
    }

    .footer h1,p{
        color: black;
    }
    .footer button {
        color: white;
    }

    .input-group{
        padding: 1rem;
        border: .125rem solid black;
        border-radius: 2rem;
        display: flex;
        justify-content:space-between;
        margin-top: 2rem;

    }
    .input-group input{
        flex: auto;
        outline: none;
        border: none;
        color: black;
        background-color:transparent;
    }
    .input-group button{
        padding:.5rem 1rem;
        outline: none;
        border: none;background-color: black;
        border-radius:1rem;
        counter-reset: var(--white);
        font-weight: 600;
        cursor: pointer;
    }
    .back-to-top{
        position: fixed;
        bottom: 70px;
        right: 20px;
        border-radius: 10px;
        background-color: var(--main-bg-color);
        color: var(--nomain-color);
        display: flex;
        align-items: center;
        justify-content:center;
        font-size: 2rem;
        padding: .5rem;
        z-index: 99;
        display: none;
    }

    .contact .heading{
        text-align: center;
        font-size: 2.5rem;
        text-transform: uppercase;
    }

    .contact .heading:hover{
    }

    .contact .contact-container{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact .contact-container .form-control{
        border: 1px solid #000;
        padding: 1rem;
        width: 32rem;
        margin-bottom: 1rem;
        border-radius: 8px;;
        font-weight: 800;
    }
    .contact .contact-container textarea{
        font-style: italic;

        border: 1px solid #000;
        padding: 1rem;
        width: 32rem;
        height: 18rem;
        border-radius: 8px;;
    }

    .contact .contact-btn {
        background-color: var(--main-color);
        height: 4rem;
        border-radius: 7px;
        margin-bottom: 1rem;
        text-align: center;
        line-height: 4rem;
        color: #fff;
        text-transform: uppercase;
    }

    .add-price{
    }

    .cosmetic-item-wrap>div{
        display:none;
    }
    .cosmetic-item-wrap.all>div{
        display:block;
    }
        .cosmetic-item-wrap.body>div.body-type{
            display: block;
        }
        .cosmetic-item-wrap.face>div.face-type{
            display: block;
        }

    /* Animation */
    .left-to-right{
        transform: translateX(-150%);
        transition: 1s ease-in-out;
    }
    .left-to-right.start{
        transform: translateX(0);
    }
    .right-to-left{
        transform: translateX(150%);
        transition: 1s ease-in-out;

    }
    .right-to-left.start{
        transform: translateX(0);
    }
    #h1{
        font-size:2.5rem;
    }
    table{
        border-collapse: collapse;
        width: 100%;
    }
    table td{
        border-top: 1px solid black;
        padding: 15px;
        font-weight: 500;
    }
    table th{
        font-size: 1.2rem;
        padding:15px 12px;
        font-family: 'Source Sans Pro', sans-serif;
    }
    tbody button{
        width:100%;
        height:30px;
        background-color:red;
        border-radius: 15px;
        font-weight: 500;
    }



    [class*="col-"]{
        padding: 1rem;
    }
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}

    @media only screen and (max-width:600px) {
        .col-xs-1 {width: 8.33%;}
        .col-xs-2 {width: 16.66%;}
        .col-xs-3 {width: 25%;}
        .col-xs-4 {width: 33.33%;}
        .col-xs-5 {width: 41.66%;}
        .col-xs-6 {width: 50%;}
        .col-xs-7 {width: 58.33%;}
        .col-xs-8 {width: 66.66%;}
        .col-xs-9 {width: 75%;}
        .col-xs-10 {width: 83.33%;}
        .col-xs-11 {width: 91.66%;}
        .col-xs-12 {width: 100%;}
        .h-xs{
            display: none;
        }
    }

    .delay-2{
        transition-delay: .2s;
    }
    .delay-4{
        transition-delay: .4s;
    }
    .delay-6{
        transition-delay: .6s;
    }
    .delay-8{
        transition-delay: .8s;

    }
    .delay-10{
        transition-delay: .10s;
    }
    .delay-12{
        transition-delay: .12s;
    }
    .zoom{
        transform:scale(0);
        transition: .6s ease-in-out;
    }
    .zoom.start{
        transform:scale(1)
    }
    .botton-up{
        transform: translateY(30%);
        transition: .8s ease-in-out;
    }
    .botton-up.start{
        transform: translateY(0);
    }
    p{
        color: var(--nomain-color);
        font-weight: 400;
    }


    .cart {
        border:1px solid rgb(0, 0, 0);
    }
</style>
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top ai"></i>
    </a>
    <!-- back to top -->

    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">CONIAN</div>
            </a>
            <div class="menu">
                <a href="#home">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="#about">
                    <div class="menu-item">
                        About
                    </div>
                </a>
                <a href="cart.php">
                    <div class="menu-item">
                        Products
                    </div>
                </a>
                <a href="#testimonial">
                    <div class="menu-item">
                        Feedback
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <div class="cart-btn">
                    <i id="search-btn" class='bx bx-search'></i>
                </div>
                <div class="search-form">
                    <i id="search-form-icon" class='bx bx-search'></i>
                    <input type="search" placeholder="Search..." name="" id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </div>
        
                <div class="cart-btn " onclick="switchTheme()">
                    <i class='bx bx-moon'></i>
                </div>
                <div class="cart-btn">
                    <a href="cart.php"> <i class='bx bxs-cart'></i></a>
                </div>
                <!-- <div class="cart-btn">
                    <a href="./login/index.html"><i class='bx bx-user'></i></a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Kết thúc -->
    <section id="home" class="fullheight align-items-center bg-imgs bg-img-fixed" style="background-image:url(images/banner-chinh-5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            Cosmetic
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2">
                            Mỹ phẩm cao cấp Cenlia sử dụng nguyên liệu 100% từ thiên nhiên Hàn Quốc, tuyệt đối an toàn và hiệu quả cho làn da người Việt
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            <a href="#menu" >
                                Đặt hàng ngay
                            </a >
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kết thúc -->
    <div class="fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="images/anh1.jpg" alt="" class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3><span class="primary-color">CENLIA</span> - Vẻ đẹp <span class="primary-color">vượt ngoài</span> ranh giới</h3>
                        <p>Thương hiệu mỹ phẩm có nguồn gốc từ Hàn Quốc, được các chuyên gia đầu ngành nghiên cứu và cho ra đời dòng sản phẩm đặc biệt phù hợp cho làn da của người Việt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kết thúc -->
    <section class="align-items-center bg-img bg-img-fixed" id="menu" style="background-image: url(images/anh2.jpg)">
        <div class="container">
            <div class="cosmetic-menu">
                <h1><span class="primary-color">Bạn</span> muốn sử dụng <span class="primary-color">mỹ phẩm</span> nào vào hôm nay? </h1>
                <p></p>

                <div class="cosmetic-category">
                    <!-- id="list-catalog" -->
                    <div class="zoom play-on-scroll">
                        <button class="active" data-cosmetic-type="all">
                            Tất cả sản phẩm
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-cosmetic-type="body">
                            Chăm sóc cơ thể
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-8">
                        <button data-cosmetic-type="face">
                            Chăm sóc da mặt
                        </button>
                    </div>
                </div>

                <div class="cosmetic-item-wrap all" id="list_product">
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img">
                                    <img src="images/v-right new tone cleansing foam.jpg" alt="">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        V-RIGHT NEW TONE CLEANSING FOAM
                                    </h3>
                                    <span>
                                        310.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="cosmetic-item face-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/moaz\ lipstick.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        MOAZ LIPSTICK
                                    </h3>
                                    <span>
                                        180.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item face-type">
                        <div class="item-wrap botton-up play-on-scroll" >
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/natural\ cleansing\ oil.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        NATURAL CLEANSING OIL
                                    </h3>
                                    <span>
                                        260.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item face-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/premium\ negin\ saffron\ mask.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        PREMIUM NEGIN SAFFRON MASK
                                    </h3>
                                    <span>
                                        310.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/steaming\ face\ cream.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        STEAMING FACE CREAM
                                    </h3>
                                    <span>
                                        320.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/sun\ protection\ lotion.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        SUN PROTECTION LOTION
                                    </h3>
                                    <span>
                                        230.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/whitening\ face\ cream.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        WHITENING FACE CREAM
                                    </h3>
                                    <span>
                                        300.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/ALCOHOL\ FREE\ TONER.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        ALCOHOL FREE TONER
                                    </h3>
                                    <span>
                                        240.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/whitening\ face\ cream.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        WHITENING FACE CREAM
                                    </h3>
                                    <span>
                                        300.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/anti\ acne.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        ANTI ACNE
                                    </h3>
                                    <span>
                                        290.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/perfume\ seed.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        PERFUME SEED
                                    </h3>
                                    <span>
                                       280.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/steaming\ body.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        STEAMING BODY
                                    </h3>
                                    <span>
                                        250.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/whitening\ body\ cream.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        WHITENING BODY CREAM
                                    </h3>
                                    <span>
                                        360.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="cosmetic-item body-type">
                        <div class="item-wrap botton-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img" 
                                style="background-image: url('images/jeju\ vitamin\ seawater\ mineral\ mist.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        JEJU VITAMIN SEAWATER MINERAL MIST
                                    </h3>
                                    <span>
                                        270.000VNĐ
                                    </span>
                                </div>
                                <div class="cart-btn"> 
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- Kết thúc -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap botton-up play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                Sản phẩm rất tuyệt vời

                            </p>
                            <div class="review-img bg-img" style="background-image: url(images/truongquynhanh.jpg)"></div>
                        </div>
                        <div class="review-info">
                            <h3>Trương Quỳnh Anh</h3>
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
                    <div class="review-wrap active botton-up play-on-scroll">
                        <div class="review-content">
                            <p>
                                Đây đúng là bí quyết dưỡng da trắng sáng
                                và căng mịn hay nhất mà mình từng sử dụng
                            </p>
                            <div class="review-img bg-img" style="background-image: url(images/phamhuong.jpg)"></div>
                        </div>
                        <div class="review-info">
                            <h3>Phạm Hương</h3>
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
                            <div class="review-img bg-img" style="background-image: url(images/thaituyettram.jpg)"></div>
                        </div>
                        <div class="review-info">
                            <h3>Thái Tuyết Trâm</h3>
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

    <!-- login section start -->
    <section class="contact" id="contact">
        <h1 class="heading">Hoàn Tất Đơn Hàng</h1>
        <div class="contact-container">
            <div class="form">
                <div class="contact-btn">
                    <h1>Contact Now</h1>
                </div>
                <form action="">
                    <div class="form-contact">
                        <div class="name">
                            <input type="text" required placeholder="Họ Tên" name="" class="form-control">
                        </div>
                        <div class="name">
                            <input type="number" required placeholder="Số Điện Thoại" name="" class="form-control">
                        </div>
                        <div class="address">
                            <input type="text" required  placeholder="Địa chỉ" name="" class="form-control">
                        </div>
                        <div class="message">
                           <textarea name="" placeholder="Ghi chú" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn" type="submit">SEND</button>
                </form>
            </div>
        </div>
    </section>
    <!-- login section end -->

    <!-- Kết thúc -->
    <section class="footer bg-img" style="background-image: url(images/banner-web-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1> Cosmetic </h1> <br>
                    <p>Mỹ phẩm cao cấp Cenlia sử dụng nguyên liệu 100% từ thiên nhiên Hàn Quốc,
                        tuyệt đối an toàn và hiệu quả cho làn da người Việt</p><br>
                    <p>Email: conian2505@gmail.com</p>
                    <p>Phone: 0908773057</p>
                    <p>Website: cenliangoctrinh.vn</p>
                </div>
                <div class="col-2 col-xs-12">
                    <h1>
                        About Us
                    </h1><br>
                    <p><a href="#">Mỹ phẩm</a></p>
                    <p><a href="#">Menu</a></p>
                    <p><a href="#">News</a></p>
                </div>
                <div class="col-4 col-xs-12">
                    <h1>Subcribe & media</h1><br>
                    <p>Thanks you for Subcribe</p>
                    <div class="input-group">
                        <input type="text" placeholder="Enter your email" name="" id="">
                        <button>
                            Subcribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        //back to top
        let backToTopBtn = document.querySelector('.back-to-top')

        window.onscroll = () => {
            if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopBtn.style.display = 'flex'
            }else{
                backToTopBtn.style.display = 'none'
            }
        }

        //top nav menu
        let menuItems = document.getElementsByClassName('menu-item');
        Array.from(menuItems).forEach((item,inedx) => {
            item.onclick =(e) => {
                let currMenu = document.querySelector('.menu-item.active');
                currMenu.classList.remove('active');
                item.classList.add('active');
            }
        })

        let searchForm = document.querySelector('.search-form')

        document.querySelector('#search-btn').onclick = () =>{
            searchForm.classList.toggle('active');
            navbar.classList.remove('active');
            cartItem.classList.remove('active');    
        }


        //cosmetic item
        let cosmeticMenuList = document.querySelector('.cosmetic-item-wrap')
        let cosmeticCategory = document.querySelector('.cosmetic-category')
        let categories = document.querySelectorAll('button')
        Array.from(categories).forEach((item,index) => {
            item.onclick = (e) => {
                let currCat = cosmeticCategory.querySelector('button.active')
                currCat.classList.remove('active')
                e.target.classList.add('active')
                cosmeticMenuList.classList ='cosmetic-item-wrap '+ e.target.getAttribute('data-cosmetic-type')

            }
        })

        // on scorll animation
        let scroll = window.requestAnimationFrame || function(callback)
            {window.setTimeout(Callback,1000/60)}
        let elToShow = document.querySelectorAll('.play-on-scroll')

        isElInViewPort = (el) => {
            let rect = el.getBoundingClientRect()
            return(
                (rect.top <= 0 && rect.bottom >= 0) ||
                (rect.bottom >= (window.innerHeight || 
                    document.documentElement.clientHeight) && 
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
                    (rect.top >= 0 && rect.bottom <= (window.innerHeight || 
                        document.documentElement.clientHeight))
            )
        }
        loop = () => { //arrow function
            elToShow.forEach((item,index) =>{
                if (isElInViewPort(item)){
                    item.classList.add('start')
                }else{
                    item.classList.remove('start')
                }
            })
            scroll(loop)
        }
        loop()

        let body = document.querySelector('body')
        const themeCookieName = 'theme'
        const themeDark = 'dark'
        const themeLight = 'light'

        function setCookie(cname, cvalue,exdays) {
            var d = new Date()
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000))
            var expires ="expires"+d.toUTCString()
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"
        }

        function getCookie(cname) {
            var name = cname + "="
            var ca = document.cookie.split(';')
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' '){
                    c = c.substring(1)
                }
                if (c.indexOf(name) == 0){
                    return c.substring(name.length, c.length)
                }
            }
            return ""
        }
        loadTheme()

        function loadTheme() {
            var theme = getCookie(themeCookieName)
            body.classList.add(theme === "" ? themeLight : theme) 
        }

        function switchTheme() {
            if(body.classList.contains(themeLight)){
                body.classList.remove(themeLight)
                body.classList.add(themeDark)
                setCookie(themeCookieName, themeDark)
            }else{
                body.classList.remove(themeDark)
                body.classList.add(themeLight)
                setCookie(themeCookieName, themeLight)
            }
        }
    </script>

</body>

</html>