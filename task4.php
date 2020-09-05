<?php

$result3 = [
    'authors' =>[
        'andrey@email.com' => [
            'fio' => 'Andrey Kruz',
            'email' => 'andrey@email.com',
            'yearBirths' => 1975,
        ],
        'vasiliev@email.com' => [
            'fio' => 'Andrey Vasiliev',
            'email' => 'vasiliev@email.com',
            'yearBirths' => 1970,
        ],
    ],
    'books' => [
        [
            'title' => 'На пороге тьмы',
            'authorEmail' => 'andrey@email.com',
        ],
        [
            'title' => 'Fireall Tom 1',
            'authorEmail' => 'vasiliev@email.com',
        ],
        [
            'title' => 'Fireall Tom 2',
            'authorEmail' => 'vasiliev@email.com',
        ],
    ]
];

$title = "Читайте книги!";
$red = (bool) rand(0, 1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1 <?= ($red) ? "class='red'" : "" ?>>Список книг</h1>
<div>Авторов на портале <?= count($result3['authors']) ?> </div>
<!-- Выведите все книги -->
<? foreach ($result3['books'] as $book) : ?>
    <!-- Название книги -->
    <p>Книга <?= $book['title'] ?>,
        <!-- ФИО автора книги -->
        ее написал <?= $result3['authors'][$book['authorEmail']]['fio'] ?>,
        <!-- Год рождения автора -->
        <?= $result3['authors'][$book['authorEmail']]['yearBirths'] ?>
        <!-- Email автора -->
        (<?= $book['authorEmail'] ?>)</p>
<? endforeach ?>

</body>
</html>
