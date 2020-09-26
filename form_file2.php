<?php
include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div class="info">
        </div>
        <p>Можно выбрать не более <?= $allowedCountFiles ?> файлов.</p>
         <form  class="form" enctype="multipart/form-data">
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
             };
         };
         </script>

         <script type="text/javascript">
         const formElem = document.querySelector('form');
         const input = document.getElementById('files')
         formElem.addEventListener('submit', submited);

         async function submited() {
            event.preventDefault();

                let response = await fetch('/logic2.php', {
                  method: 'POST',
                  body: new FormData(formElem)
                });
                let result = await response.json();
                if(input.files.length > 0){
                   input.value = "";
                };
                addInfoResult(result)
         }

         function addInfoResult(result) {
             const infoDiv = document.getElementsByClassName('info')[0];
             infoDiv.innerHTML = "";
             if(result['success']) {
                 result['success'].forEach(message => {
                 infoDiv.append(message, document.createElement('br'));
                });
            }
            if(result['errors']) {
                result['errors'].forEach(message => {
                infoDiv.append(message, document.createElement('br'));
               });
           }
           if(result['count']) {
               infoDiv.append(result['count'], document.createElement('br'));
          }
      }
         </script>
    </body>
</html>
