<?php
$products = [
    [
        'id' => 0,
        'img' => "img/glass.jpeg",
        'name' => "Стакан граненый",
    ],
    [
        'id' => 1,
        'img' => "img/hat.jpg",
        'name' => "Шапка ушанка",
    ],
    [
        'id' => 2,
        'img' => "img/pony.jpg",
        'name' => "Пони",
    ],
]
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <div class="container">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.html">О нас</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Каталог</h1>
        <div class="items">
            <? foreach ($products as $product) : ?>
                <figure>
                    <p><img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>" /></p>
                    <figcaption><?= $product['name'] ?></figcaption>
                    <a href="form.html" class="btn">Купить</a>
                </figure>
            <? endforeach ?>
        </div>
    </div>
</body>
</html>
