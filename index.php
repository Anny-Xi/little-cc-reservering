<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container">
    <h1 class="title mt-4">Music Collection</h1>
    <?php if (!empty($errors)): ?>
        <section class="content">
            <ul class="notification is-danger">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php
    print_r($productList);


    print_r($products);


    ?>

    <?php if (isset($products) && isset($totalProducts)): ?>
        <a class="button" href="add.php">Add new album</a>
        <table class="table is-striped mt-4">
            <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>中文名称</th>
                <th>English name</th>
                <th>Price</th>
                <th>中文说明</th>
                <th>Description_en</th>
                <th colspan=3"></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="10" class="has-text-centered">&copy; My Collection with <?= $totalProducts; ?> products</td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td class="is-vcentered">
                    </td>
                    <td class="is-vcentered"><?= $product->id; ?></td>
                    <td class="is-vcentered"><?= $product->name_cn; ?></td>
                    <td class="is-vcentered"><?= $product->name_en; ?></td>
                    <td class="is-vcentered"><?= $product->price; ?></td>
                    <td class="is-vcentered"><?= $product->description_cn; ?></td>
                    <td class="is-vcentered"><?= $product->description_en; ?></td>
                    <td class="is-vcentered"><a href="detail.php?id=<?= $product->id; ?>">Details</a></td>
                    <td class="is-vcentered"><a href="edit.php?id=<?= $product->id; ?>">Edit</a></td>
                    <td class="is-vcentered"><a href="delete.php?id=<?= $product->id; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
