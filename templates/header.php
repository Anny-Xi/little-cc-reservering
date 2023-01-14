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
</body>
