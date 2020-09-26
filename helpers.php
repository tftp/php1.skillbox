<?php

function errorsLoad($key) {
    include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    $errors = [];
    $isAllowedType = in_array($_FILES['files']['type'][$key], $allowedType);
    $isAllowedSize = $_FILES['files']['size'][$key] / 1024 / 1024 <= $allowedSize;
    $emptyErrors = empty($_FILES['files']['error'][$key]);

    if (!$isAllowedType) {
        $errors[] = 'Несоответствие типов (разрешенные типы: png, jpg, jpeg)';
    }
    if (!$isAllowedSize) {
        $errors[] = "Размер файла должен быть менее {$allowedSize} Мб";
    }
    if (!$emptyErrors) {
        $errors[] = "Ошибка загрузки {$emptyErrors}";
    }
    return $errors;
}

function withoutDir($listDir) {
    return array_diff($listDir, ['.', '..']);
}
