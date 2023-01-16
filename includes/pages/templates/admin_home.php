

<!-- heading  -->
<section class="home">
    <div class="hero">
        <h2>由口触动, 甜于心中</h2>
    </div>
</section>

<section id="newItems">
    <h1>新品</h1>
    <!-- 新品 会滚动 -->
    <div class="new-items">
        <?php if (isset($newProductsLimit4)): ?>
            <?php foreach ($newProductsLimit4 as $newProduct): ?>
                <div class="new-item">
                    <img src="uploaded_img/<?= $newProduct->image; ?>" alt="<?= $newProduct->name_cn; ?>">
                    <p class="product_basic_info">
                        <spam class="is-danger">New~</spam> <?= $newProduct->name_cn; ?></p>
                    <p class="product_basic_info">€ <?= $newProduct->price; ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

</section>

<section>
    <h1>热门</h1>
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
