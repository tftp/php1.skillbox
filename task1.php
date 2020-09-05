<?php

$result1 = [
    'author' => [
        'fio' => 'Andrey Kruz',
        'email' => 'andrey@email.com',
    ],
    'book' => [
        'title' => 'Any Book 1',
        'authorEmail' => 'andrey@email.com',
    ]
];

foreach ($result1 as $key => $value) {
    if ($key == 'author') {
        echo "<br>ФИО: $value[fio], <br>Email: $value[email]";
    } else {
        echo "<br>Название книги: $value[title] <br>Email автора: $value[authorEmail]";
    }
}
