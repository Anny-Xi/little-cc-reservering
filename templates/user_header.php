<!doctype html>
<html lang="en">
<head>

    <title>Little CC Bakery | <?= $pageTitle ?? ''; ?></title>
    <meta charset="utf-8"/>

    <!--    bulma style-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

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
            <a href="<?= BASE_PATH; ?>home">首页</a>
            <a href="<?= BASE_PATH; ?>home#newItems">新品</a>
            <a href="<?= BASE_PATH; ?>menu">所有甜品</a>
            <a class="hide" href="<?= BASE_PATH; ?>about">Q&A</a>
            <a class="hide" href="<?= BASE_PATH; ?>menu">联系方式</a>
        </nav>
        <a href="#">
            <img class="logo" id="logo" src="img/logo.jpg" alt="logo">
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
                <a href="index.php" class="btn">profile</a>
                <a href="#" class="delete-btn">logout</a>
            </div>
            <p class="account"><a href="index.php">login</a> or <a href="index.php">register</a></p>
        </div>

    </section>
</header>
<!--header section ends-->
