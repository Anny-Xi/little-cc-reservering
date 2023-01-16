<?php require_once 'includes/initialize.php';?>

<main>
    <?= $content ?? ''; ?>
</main>

<!--footer section starts-->

<footer class="footer">
    <section class="flex">
        <div>
            <p class="footer_text">
                自提邮编 ： 1066AZ<br>
                📍20km以内：每单满45欧元起免费送（如 Amsterdam、Haarlem,、Hoofddorp、Amstelveen...)<br>
                📍20km-40km：+5欧送货费<br>
                📍40km+：每个地方凑够200欧，我们会固定时间安排免费派送哦。
            </p>
        </div>
        <div>
            <p class="footer_text"><span>扫码加群了解最新派送具体时间</span></p>
            <img class="qr_Code" src="img/imgplaceholder.jpg">
        </div>
    </section>


    <div class="credit">&copy; copyright @ 2023 by <span>Litle CC Bakery </span> | all rights reserved!
        <a href="<?= BASE_PATH; ?>admin_login"><p>Admin</p></a>
    </div>
</footer>
<!--footer section ends-->

<!--custom js file link -->
<script src="js/script.js"></script>
</body>

</html>
