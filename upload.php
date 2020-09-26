<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="info">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/helpers.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/logic.php';
             ?>
        </div>
        <div>
            <table>
                <tbody>
                    <form action="<?= $_SERVER['PHP_SELF']  ?>" method="post">

                    <?php $files = withoutDir(scandir($uploadPath)); ?>
                    <?php foreach ($files as $file): ?>
                        <tr>
                            <td> <img src="/upload/<?= $file ?>" width="100px"> </td>
                            <td> <?= $file ?> </td>
                            <td> <input type="checkbox" name="files[]" value="<?= $file ?>"> </td>
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
