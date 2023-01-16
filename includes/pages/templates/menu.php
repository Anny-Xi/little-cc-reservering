<!--check if errors occur -->
<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <!--end check-->

<?php endif; ?>

<!-- heading  -->
<section class="all_menu">
    <h1>所有甜点</h1>
</section>



<section>
    <!-- 新品 会滚动 -->
    <div class="new-items" id="newItems">
        <?php if (isset($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="new-item">
                    <img src="uploaded_img/<?= $product->image; ?>" alt="<?= $product->name_cn; ?>">
                    <p class="product_basic_info">
                        <spam class="is-danger">New~</spam> <?= $product->name_cn; ?></p>
                    <p class="product_basic_info">€ <?= $product->price; ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

</section>

<section class="menu">
    <!-- 选项组 -->
    <a href="#">
        <div class="menu-item">
            <img src="img/imgplaceholder.jpg" alt="">
            <!-- 蛋糕 -->
            蛋糕

        </div>
    </a>
    <a href="#">
        <div class="menu-item">
            <img src= "img/imgplaceholder.jpg" alt="">
            <!-- 甜点 -->
            甜点
        </div>
    </a>
    <a href="#">
        <div class="menu-item">
            <img src= "img/imgplaceholder.jpg" alt="">
            <!-- 套餐 -->
            套餐
        </div>
    </a>
</section>


</body>

</html>
