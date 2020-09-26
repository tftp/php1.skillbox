<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';

if (isset($_POST['upload'])) {
    $countFiles = 0;
    if (count($_FILES['files']['name']) <= $allowedCountFiles) {
        foreach ($_FILES['files']['name'] as $key => $file) {
            $errors = errorsLoad($key);
            if (empty($errors)) {
                move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadPath . $file);
                echo "{$file} загружен <br />";
                $countFiles += 1;
            } else {
                foreach ($errors as $error) {
                    echo "{$file} не загружен. {$error} <br />";
                }
            }
        }
    } else {
        echo 'Недопустимое количество файлов <br />';
    }
    echo "{$countFiles} файлов загружено <br />";
}

if (isset($_POST['remove']) && isset($_POST['files'])) {
    $listFiles = withoutDir(scandir($uploadPath));
    foreach ($_POST['files'] as $file) {
        if (in_array($file, $listFiles)) {
            if (unlink($uploadPath . $file)) {
                echo "{$file} удален <br />";
            } else {
                echo "{$file} не удален <br />";
            }
        }
    }
}
