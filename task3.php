<?php

require 'shuffle_assoc.php';

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

// Книга <Название книги>, ее написал <Фио автора> <Год Рождения автора> (<email автора>)
foreach ($result3['books'] as $book) {
    echo "Книга $book[title], ее написал {$result3['authors'][$book['authorEmail']]['fio']}, ";
    echo "{$result3['authors'][$book['authorEmail']]['yearBirths']}($book[authorEmail])<br>";
}

//Перемешиваем книги с помошью функции shuffle_assoc
shuffle_assoc($result3['books']);

//Выводим книги ещё раз
foreach ($result3['books'] as $book) {
    echo "Книга $book[title], ее написал {$result3['authors'][$book['authorEmail']]['fio']}, ";
    echo "{$result3['authors'][$book['authorEmail']]['yearBirths']}($book[authorEmail])<br>";
}
