<?php
    if (isset($_POST['Send'])) {

        if (!empty($_POST['order'])) {

            if ($_POST['order'] == 'asc') {
                sort($_POST['number']);
            } else {
                rsort($_POST['number']);
            }
        }
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Работа GET POST</title>
    </head>
    <body>
        <pre>
            GET
            <? var_dump($_GET); ?>
            POST
            <? var_dump($_POST); ?>
        </pre>

        <a href="<?=$_SERVER['PHP_SELF']?>/?data=yes">Отправить GET</a>
        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="number[]"><br>
            <input type="number" name="number[]"><br>
            <input type="number" name="number[]"><br>
            <select  name="order">
                <option selected value="">Не сортировать</option>
                <option selected value="asc">По возрастанию</option>
                <option selected value="desc">По убыванию</option>
            </select>
            <input type="submit" name="Send">
        </form>
    </body>
</html>
