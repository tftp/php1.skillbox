<?php

function errorsLoad($key) {
    include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
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
    sort($listDir);
    return array_values(array_diff($listDir, ['.', '..']));
}

function getInfoFiles() {
    include $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
    $files['names'] = withoutDir(scandir($uploadPath));
    foreach ($files['names'] as $name) {
        $files['sizes'][] = convertSize(filesize($uploadPath . $name));
        $files['times'][] = filemtime($uploadPath . $name);
    }
    return $files;
}

function convertSize($size) {
    $kbyte_10 = 10 * 1024;
    $mbyte_1 = 1024 * 1024;
    $mbyte_5 = $mbyte_1 * 5;
    $mark = 'b';

    if ($size >= $kbyte_10 && $size < $mbyte_1) {
        $size = round($size / 1024, 2);
        $mark = 'Kb';
    } elseif ($size >= $mbyte_1 && $size <= $mbyte_5) {
        $size = round($size / 1024 / 1024, 2);
        $mark = 'Mb';
    }
    return $size . $mark;
}
