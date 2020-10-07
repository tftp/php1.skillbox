<?php
session_start(); //запуск сессии вручную, т.к. по умолчанию задано ручной запуск

// phpinfo();

$_SESSION['test'] = 1;//устанавливаем какое то значение сессии
var_dump($_SESSION['test']);
unset($_SESSION['test']); //удаляем какое то значение сессии

if (!$_SESSION['count_visit']) {
    $_SESSION['count_visit'] = 1;
} else {
    $_SESSION['count_visit']++;
}

var_dump($_SESSION['count_visit']);

setcookie('any_name', 'any_value', time() + 3600); //определяем куку
var_dump($_COOKIE['any_name']); //читаем куку
setcookie('any_name', '', 1);//удаляем куку ставя ей неправильное время
//Куки отправляются в заголовках, поэтому испоьзование setcookie должно быть до всех операторов использующих куки
