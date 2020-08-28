<?php
include 'var.php';
include 'inc.php';//если файла нет выдает предупреждение, не прекразает выполнение программы
require 'inc1';//если файла нет выдает фатальную ошибку и заканчивает программу

include_once 'var.php'//подключит файл только один раз
require_once 'inc.php'//тоже

__DIR__; //хранит путь до текущего исполняемого скрипта

include __DIR__.'var.php';

include $_SERVER['DOCUMENT_ROOT'].'/files/inc.php';//используя переменную $_SERVER['DOCUMENT_ROOT']
//require
 ?>
