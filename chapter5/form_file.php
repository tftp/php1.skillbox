<pre>
    <?php
    var_dump($_FILES);
    if (isset($_POST['upload'])) {
        $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
        if (!empty($_FILES['myfile']['error'])) {
            echo 'Произошла ошибка';
        } else {
            // move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadPath . $_FILES['myfile']['name']);
        }
    }
     ?>

</pre>

 <form  action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
     <span>Загрузите файл: </span>
     <input type="file" name="myfile1" />
     <br />
     <input type="file" name="myfile2" />
     <br />
     <input type="file" name="myfile3" />
     <br />
     <br />
     <input type="submit" name="upload" value="Загрузить">
 </form>
