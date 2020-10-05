<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="info">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/include/helpers.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/include/logic.php';
             ?>
        </div>
        <div>
            <table>
                <tbody>
                    <form  method="post">

                    <?php $files = getInfoFiles(); ?>
                    <?php foreach ($files['names'] as $key => $name): ?>
                        <tr>
                            <td> <img src="/upload/<?= $name ?>" width="100px"> </td>
                            <td> <?= $name ?> </td>
                            <td> <?= date ("d m Y H:i:s.", $files['times'][$key]) ?> </td>
                            <td> <?= $files['sizes'][$key] ?> </td>
                            <td> <input type="checkbox" name="files[]" value="<?= $name ?>"> </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td><input type="submit" name="remove" value="Удалить"></td>
                    </tr>

                    </form>
                </tbody>
            </table>
        </div>
        <p> <a href="/">Вернуться назад</a> </p>
    </body>
</html>
