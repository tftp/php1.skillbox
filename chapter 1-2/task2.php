<?php

$result2 = [
    'authors' =>[
        [
            'fio' => 'Andrey Kruz',
            'email' => 'andrey@email.com',
        ],
        [
            'fio' => 'Andrey Vasiliev',
            'email' => 'vasiliev@email.com',
        ],
    ],
    'books' => [
        [
            'title' => 'Any Book 1',
            'authorEmail' => 'andrey@email.com',
        ],
        [
            'title' => 'Fireall Tom 1',
            'authorEmail' => 'vasiliev@email.com',
        ],
    ]
];

foreach ($result2 as $key => $value) {
    if ($key == 'authors') {
        echo "Список авторов:<br>";
        foreach ($value as $author) {
            echo "ФИО: $author[fio], <br>Email: $author[email] <br>";
        }
    } else {
        echo "Список книг:<br>";
        foreach ($value as $book) {
            echo "Название книги: $book[title] <br>Email автора: $book[authorEmail] <br>";
        }
    }
}
