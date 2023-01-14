<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <!--    swiper for js slider-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!--    font awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--    custom css file link-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<!--header section starts-->
<header class="header">

    <section class="flex">
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>


        <nav class="navbar">
            <a href="index.php">首页</a>
            <a href="#">新品</a>
            <a href="product.php">所有甜品</a>
            <a class="hide" href="#">Q&A</a>
            <a class="hide" href="#">联系方式</a>
        </nav>
        <a href="#">
            <img class="logo" id="logo" src="img\logo.jpg" alt="logo">
        </a>
        <nav id="hide_low_width" class="navbar">
            <a href="#">Q&A</a>
            <a href="#">联系方式</a>
        </nav>

        <div class="icons">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="#">
                <i class="fas fa-shopping-cart"></i>
                <span>(X)</span>
            </a>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="profile">
            <p class="name">Test name</p>
            <div class="flex">
                <a href="profile.php" class="btn">profile</a>
                <a href="#" class="delete-btn">logout</a>
            </div>
            <p class="account"><a href="login.html">login</a> or <a href="register.php">register</a></p>
        </div>

    </section>
</header>
<!--header section ends-->

<main>
    <!-- heading  -->
    <section class="home">
        <div class="hero">
            <h2>由口触动, 甜于心中</h2>
        </div>
    </section>

    <section>
        <h1>新品</h1>
        <!-- 新品 会滚动 -->
        <div class="new-items">
            <div class="new-item">
                <img src="/img/imgplaceholder.jpg" alt="">
            </div>
            <div class="new-item">
                <img src="/img/imgplaceholder.jpg" alt="">
            </div>
            <div class="new-item">
                <img src="/img/imgplaceholder.jpg" alt="">
            </div>

        </div>

    </section>
    <section class="menu">
        <!-- 选项组 -->
        <a href="#">
            <div class="menu-item">
                <img src="/img/imgplaceholder.jpg" alt="">
                <!-- 蛋糕 -->
                蛋糕

            </div>
        </a>
        <a href="#">
            <div class="menu-item">
                <img src="/img/imgplaceholder.jpg" alt="">
                <!-- 甜点 -->
                甜点
            </div>
        </a>
        <a href="#">
            <div class="menu-item">
                <img src="/img/imgplaceholder.jpg" alt="">
                <!-- 套餐 -->
                套餐
            </div>
        </a>
    </section>
</main>

<!--footer section starts-->

<footer class="footer">

    <div class="credit">&copy; copyright @ 2023 by <span>Litle CC Bakery </span> | all rights reserved!</div>

</footer>
<!--footer section ends-->

<!--custom js file link -->
<script src="js/script.js"></script>
</body>

</html>
