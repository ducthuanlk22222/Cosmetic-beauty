<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/cart.php" />
        <link rel="stylesheet" href="./responsive.css" />
        <link rel="stylesheet" href="./assets/style.php">

        <!-- link icons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    :root {
    --blue: rgb(17, 132, 226);
    --primary-color:#00aeff;
    }

    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    list-style-type: none;
    text-decoration: none;
    }

    li {
    list-style: none;
    }

    /* header */
    header{
    position: fixed;
    z-index: 2;
    width: 100%;
    top: 0;
    }

    nav {
    padding: 15px;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    html{
    scroll-behavior: smooth;
    transition: .2s linear;
    font-family: 'Roboto', sans-serif;
    }

    nav .img-nav h1 {
    color: red;
    font-weight: 900;
    }

    nav .content-nav {
    display: flex;
    line-height: 2rem;
    flex-direction: row;
    justify-content: flex-end;
    width: 60%;
    }

    nav .content-nav ul {
    display: flex;
    align-items: center;
    }

    nav .content-nav ul li a {
    text-decoration: none;
    color: #43433e;
    padding: 0 15px;
    font-weight: 700;
    }

    nav .content-nav ul li a:hover {
    background-color:var(--blue);
    display: block;
    border-radius: 4px;
    letter-spacing: 2px;
    transition: .3s linear;
    }

    .content-nav form {
    position: relative;
    }

    .content-nav form input {
    border: none;
    background: #fff;
    padding: 7px;
    outline: none;
    border-radius: 12px;
    }

    .content-nav form button {
    padding: 5px;
    border-radius: 12px;
    position: absolute;
    right: 0;
    top: 2px;
    border: none;
    outline: none;
    background: #fff;
    }

    /* modal */
    .cart-icon{
    font-size: 1.3rem;
    }

    .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
    margin: 0 auto;
    width: 50%;
    position: relative;
    display: flex;
    flex-direction: column;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem;
    outline: 0;

    }

    .modal-body {
    padding: 1rem;
    }

    .modal-footer {
    display: flex;
    border-top: 1px solid #aaaaaa;
    padding: 1rem;
    flex-direction: row;
    justify-content: flex-end;
    border-top: 1px solid #aaaaaa;
    padding: 1rem;
    }

    .modal-footer>:not(:first-child) {
    margin-left: .25rem;
    }

    .btn {
    cursor: pointer;
    outline: none;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 1rem;
    border-radius: .25rem;
    transition: all .2s ease-in-out;
    }

    .btn-secondary {
    color: #292b2c;
    background-color: #fff;
    border-color: #ccc;
    }

    .btn-primary {
    color: #fff;
    background-color: #0275d8;
    border-color: #0275d8;
    }

    .modal-header {
    align-items: center;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #aaaaaa;
    padding: 1rem;
    }

    h5.modal-title {
    font-size: 1.5rem;
    }

    .close {
    color: #aaaaaa;
    font-size: 28px;
    font-weight: bold;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    }

    .close:hover,
    .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    }

    #cart {
    font-size: 15px;
    color: #fff;
    background:var(--blue);
    border: 1px solid transparent;
    border-radius: 10px;
    outline: none;
    margin-left: 1rem;
    padding: 12px;
    cursor: pointer;
    display: flex;
    align-items: center;
    }

    #cart:hover {
    border-color: #fff;
    letter-spacing: 2px;
    transition: .3s linear;
    }

    /* about section */
    .fullheight1 img{
    border-radius: 4rem;
    height: 25rem;
    }

    .container1{
    padding: 10rem 5%;
    }

    .about-slogan1{
    border: 1px solid #000;
    padding: 5rem 6rem;
    text-align: center;
    border-radius: 10px;
    }

    .about-slogan1 p {
    text-align: justify;
    margin-top: 1rem;
    }

    .row1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    /* wrapper */
    h1.heading {
    text-align: center;
    color: var(--blue);
    font-size: 2.5rem;
    font-weight: 600;
    }

    .wrapper {
    padding: 6rem 0;
    }

    .products ul {
    display: inline-block;
    }

    .products ul .main-product {
    margin-bottom: 2rem;
    margin-right: 1rem;
    display: block;
    float: left;
    width: 24%;
    }

    .products ul .no-margin {
    margin-right: 0;
    }

    .products ul .img-product img {
    width: 100%;
    }

    .content-product .content-product-h3 {
    padding: .5rem 0;
    overflow: hidden;
    color: red;
    font-weight: 700;
    font-size: 20px;
    max-height: 50px;
    min-height: 50px;
    text-align: center;
    line-height: 19px;
    margin: 0 0 5px;
    }

    .content-product .content-product-deltals {
    display: flex;
    justify-content: center;
    padding-top: 1rem;
    }

    .main-product .content-product .content-product-deltals .price {
    color: #000000;
    font-weight: 600;
    margin-right: 1rem;
    vertical-align: middle;
    font-size: 20px;
    }

    .content-product .content-product-deltals .price .money {
    vertical-align: middle;
    }

    .content-product .content-product-deltals .btn-cart {
    background: var(--blue);
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    }

    .content-product .content-product-deltals .btn-cart:hover {
    letter-spacing: 2px;
    transition: .3s linear;

    }

    /* cart */
    .cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
    }

    .cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
    }

    .cart-row {
    display: flex;
    }

    .cart-item {
    width: 45%;
    }

    .cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
    }

    .cart-quantity {
    width: 35%;
    }

    .cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
    }

    .cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
    }

    .btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
    }

    .btn-danger:hover {
    background-color: #CC4C4C;
    }

    .cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
    }

    .cart-row:last-child {
    border-bottom: 1px solid black;
    }

    .cart-row:last-child .cart-column {
    border: none;
    }

    .cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
    }

    .cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
    }

    .cart-total-price {
    color: #333;
    font-size: 1.1em;
    }

    .btn1{
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

    .btn1:hover{
    cursor: pointer;
    width: 10rem;
    letter-spacing: 2px;
    transition: .2s linear;
    }
    /* nav mobile */
    .nav-mobile {
    display: none;
    }

    .nav-mobile .icon-mobile {
    padding: .5rem;
    font-size: 35px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    display: flex;
    outline: none;
    }

    .nav-mobile .item_menu {
    background: #fff;
    position: absolute;
    top: 100%;
    width: 100%;
    display: none;
    padding-bottom: 1rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .item_menu ul li a:hover{
    background-color: var(--blue);
    transition: .3s linear;
    }

    .item_menu ul li a {
    color: #43433e;
    display: block;
    padding: .5rem 1rem;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 0.05rem;
    }

    .item_menu ul li a:hover {
    color: #fff;
    }

    .item_menu form {
    margin: 0 1rem;
    position: relative;
    }

    .item_menu form input {
    width: 100%;
    border: none;
    background: #fff;
    padding: 7px;
    outline: none;
    border-radius: 12px;
    }

    .item_menu form button {
    padding: 5px;
    border-radius: 12px;
    position: absolute;
    right: 0;
    top: 2px;
    border: none;
    outline: none;
    background: #fff;
    }
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
    <!-- header -->
    <header>
        <nav>
             <!-- bắt đầu nav-mobile -->
             <div class="nav-mobile">
                <div class="icon-mobile" id="btnmenu">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <div class="item_menu" id="menutop">
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#products">Sản Phẩm</a></li>
                        <li><a href="#testimonial">Feedback</a></li>
                    </ul>

                </div>
            </div> 
            <!-- kết thúc nav-mobile -->
                <div class="img-nav">
                    <a href=""> <h1>CONIAN</h1></a>
                </div>
                <div class="content-nav">
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#products">Sản Phẩm</a></li>
                        <li><a href="#testimonial">Feedback</a></li>
                    </ul>
                </div>
            </div>
            <!-- The Modal -->
            <button id="cart">
                <i class='cart-icon bx bxs-shopping-bags'></i>
                Giỏ Hàng
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">
                            <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="./assets/img/ALCOHOL FREE TONER.jpg" width="100" height="100">
                                <span class="cart-item-title">ALCOHOL FREE TONER</span>
                            </div>
                            <span class="cart-price cart-column">305000 VNĐ</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <button class="btn btn-danger" type="button">Xóa</button>
                            </div>
                        </div>
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="./assets/img/anti acne.jpg" width="100" height="100">
                                <span class="cart-item-title">anti acne</span>
                            </div>
                            <span class="cart-price cart-column">270000 VNĐ</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="2">
                                <button class="btn btn-danger" type="button">Xóa</button>
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">0VNĐ</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <a href="thanhtoan.php" type="button" class="btn btn-primary order">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="fullheight1 align-items-center1" id="about">
        <div class="container1">
            <div class="row1">
                <div class="col-71">
                    <img src="./assets/img/anh1.jpg" alt="">
                </div>
                <div class="col-51 col-xs-12 align-items-center">
                    <div class="about-slogan1 ">
                        <h3><span class="primary-color">CENLIA</span> - Vẻ đẹp <span class="primary-color">vượt ngoài</span> ranh giới</h3>
                        <p>Thương hiệu mỹ phẩm có nguồn gốc từ Hàn Quốc, được các chuyên gia đầu ngành nghiên cứu và cho ra đời dòng sản phẩm đặc biệt phù hợp cho làn da của người Việt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <section class="wrapper" id="products">
        <h1 class="heading">SẢN PHẨM</h1>
        <div class="products">
            <ul>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/ALCOHOL FREE TONER.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Alcohol Free Toner</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">305000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/anti acne.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Anti Acne</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">270000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/jeju vitamin seawater mineral mist.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Jeju Vitamin Sewawater Mist</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">350000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/natural cleansing oil.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">natural cleansing oil</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">360000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/premium negin saffron mask.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">premium negin saffron mask</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">400000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/steaming body.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">steaming body</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">250000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/steaming face cream.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">steaming face cream</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">320000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/sun protection lotion.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">sun protection lotion</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">240000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/v-right new tone cleansing foam.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">v-right new tone cleansing foam</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">240000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/whitening body cream.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">whitening body cream</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">240000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/whitening face cream.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">whitening face cream</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">240000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/perfume seed.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">perfume seed</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">245000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="./assets/img/moaz lipstick.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">moaz lipstick</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">180000 VNĐ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Feedback start -->
    <section id="testimonial">
        <div class="container">
            <h1 class="heading">FEEDBACK</h1>
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap botton-up play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                Sản phẩm rất tuyệt vời

                            </p>
                            <div class="review-img bg-img" style="background-image: url(./assets/img/truongquynhanh.jpg)"></div>
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
                            <div class="review-img bg-img" style="background-image: url(./assets/img/phamhuong.jpg)"></div>
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
                            <div class="review-img bg-img" style="background-image: url(./assets/img/thaituyettram.jpg)"></div>
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
    <!-- Feedback end -->


    <!-- footer section start  -->
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
    <!-- footer section end  -->


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./assets/cart.js"></script>

    <script>
        const sr = ScrollReveal({
  origin: 'left to right',
  distance: '100px',
  duration: 2000,
  reset: true
});

/*SCROLL ABOUT*/
// sr.reveal('.container',{delay: 200}); 
sr.reveal('.col-71',{delay: 200}); 
sr.reveal('.col-51',{ interval: 200});


// menu mobile
var btn_menu = document.getElementById("btnmenu");
btn_menu.addEventListener("click", function () {
  var item_menu = document.getElementById("menutop");
  if (item_menu.style.display === "block") {
    item_menu.style.display = "none";
  } else {
    item_menu.style.display = "block";
  }
})


// Modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("cart");
var close = document.getElementsByClassName("close")[0];
// tại sao lại có [0] như  thế này bởi vì mỗi close là một html colection nên khi mình muốn lấy giá trị html thì phải thêm [0]. 
// Nếu mình có 2 cái component cùng class thì khi [0] nó sẽ hiển thị component 1 còn [1] thì nó sẽ hiển thị component 2.
var close_footer = document.getElementsByClassName("close-footer")[0];
var order = document.getElementsByClassName("order")[0];
btn.onclick = function () {
  modal.style.display = "block";
}
close.onclick = function () {
  modal.style.display = "none";
}
close_footer.onclick = function () {
  modal.style.display = "none";
}
order.onclick = function () {
  alert("Cảm ơn bạn đã thanh toán đơn hàng")
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// xóa cart
var remove_cart = document.getElementsByClassName("btn-danger");
for (var i = 0; i < remove_cart.length; i++) {
  var button = remove_cart[i]
  button.addEventListener("click", function () {
    var button_remove = event.target
    button_remove.parentElement.parentElement.remove()
  })
}

// update cart 
function updatecart() {
    var cart_item = document.getElementsByClassName("cart-items")[0];
    var cart_rows = cart_item.getElementsByClassName("cart-row");
    var total = 0;
    for (var i = 0; i < cart_rows.length; i++) {
      var cart_row = cart_rows[i]
      var price_item = cart_row.getElementsByClassName("cart-price ")[0]
      var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0]
      var price = parseFloat(price_item.innerText)// chuyển một chuổi string sang number để tính tổng tiền.
      var quantity = quantity_item.value // lấy giá trị trong thẻ input
      total = total + (price * quantity)
    }
    document.getElementsByClassName("cart-total-price")[0].innerText = total + 'VNĐ'
    // Thay đổi text = total trong .cart-total-price. Chỉ có một .cart-total-price nên mình sử dụng [0].
  }

  // thay đổi số lượng sản phẩm
var quantity_input = document.getElementsByClassName("cart-quantity-input");
for (var i = 0; i < quantity_input.length; i++) {
  var input = quantity_input[i];
  input.addEventListener("change", function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart()
  })
}

// Thêm vào giỏ
var add_cart = document.getElementsByClassName("btn-cart");
for (var i = 0; i < add_cart.length; i++) {
  var add = add_cart[i];
  add.addEventListener("click", function (event) {

    var button = event.target;
    var product = button.parentElement.parentElement;
    var img = product.parentElement.getElementsByClassName("img-prd")[0].src
    var title = product.getElementsByClassName("content-product-h3")[0].innerText
    var price = product.getElementsByClassName("price")[0].innerText
    addItemToCart(title, price, img)
    // Khi thêm sản phẩm vào giỏ hàng thì sẽ hiển thị modal
    modal.style.display = "block";
    
    updatecart()
  })
}

function addItemToCart(title, price, img) {
  var cartRow = document.createElement('div')
  cartRow.classList.add('cart-row')
  var cartItems = document.getElementsByClassName('cart-items')[0]
  var cart_title = cartItems.getElementsByClassName('cart-item-title')
//   Nếu title của sản phẩm bằng với title mà bạn thêm vao giỏ hàng thì sẽ thông cho user.
  for (var i = 0; i < cart_title.length; i++) {
    if (cart_title[i].innerText == title) {
      alert('Sản Phẩm Đã Có Trong Giỏ Hàng')
      return
    }
  }

  var cartRowContents = `
  <div class="cart-item cart-column">
      <img class="cart-item-image" src="${img}" width="100" height="100">
      <span class="cart-item-title">${title}</span>
  </div>
  <span class="cart-price cart-column">${price}</span>
  <div class="cart-quantity cart-column">
      <input class="cart-quantity-input" type="number" value="1">
      <button class="btn btn-danger" type="button">Xóa</button>
  </div>`
  cartRow.innerHTML = cartRowContents
  cartItems.append(cartRow)
  cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', function () {
    var button_remove = event.target
    button_remove.parentElement.parentElement.remove()
    updatecart()
  })
  cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function (event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updatecart()
  })
}

    </script>
</body>
</html>