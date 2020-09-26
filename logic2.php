<?php

// echo "qwert";
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/helpers.php';

    $response = [];
    $countFiles = 0;
    if (count($_FILES['files']['name']) <= $allowedCountFiles) {
        foreach ($_FILES['files']['name'] as $key => $file) {
            $errors = errorsLoad($key);
            if (empty($errors)) {
                move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadPath . $file);
                $response["success"][] = "{$file} загружен";
                $countFiles += 1;
            } else {
                foreach ($errors as $error) {
                    $response["errors"][] = "{$file} не загружен. {$error}";
                }
            }
        }
    } else {
        $response["errors"][] = 'Недопустимое количество файлов';
    }
    $response["count"] = "{$countFiles} файлов загружено";

    echo json_encode($response);
    // echo json_encode($_FILES);
