<pre>
  <?php
    //GET - в него помещаются все параметры которые пришли через адресную строку методом GET
    print '_GET:'; var_dump($_GET);

    print '_POST:'; var_dump($_POST);

    print '_FILES:'; var_dump($_FILES); //используется при загрузке файлов на сервер

    print '_COOKIE:'; var_dump($_COOKIE); //данные сохраненные браузером пользователя

    print '_REQUEST:'; var_dump($_REQUEST);//содержит два массива GET и POST

    print '_SESSION:'; var_dump($_SESSION);//хранит данные пользоватедьской сессии

    print '_SERVER:'; var_dump($_SERVER);

    print 'GLOBALS:'; var_dump($GLOBALS);
    $GLOBALS['my_key'] = 'global_value';
    var_dump($GLOBALS['my_key']);

    print '_ENV:'; var_dump($_ENV); //см. https://www.php.net/manual/ru/reserved.variables.environment.php

   ?>
</pre>
<a href="/">Go Back</a>
