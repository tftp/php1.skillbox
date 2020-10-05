
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
        <p>Можно выбрать не более <?= $allowedCountFiles ?> файлов.</p>
         <form  class="form" method="post" enctype="multipart/form-data">
             <span>Загрузите файл: </span>
             <input id='files' type="file"  name="files[]" required="required"  accept="<?= implode(',', $allowedType) ?>" multiple  />
             <br />
             <br />
             <input type="submit" name="upload" value="Загрузить">
         </form>
         <p> <a href="/upload.php">Просмотр загруженных файлов</a> </p>
         <p> <a href="/">Вернуться назад</a> </p>

         <script type="text/javascript">
         const uploadField = document.getElementById("files");
         uploadField.onchange = function() {
             if(this.files.length > 5){
                alert("Слишком много файлов!");
                this.value = "";
             }
         }
         </script>
    </body>
</html>
