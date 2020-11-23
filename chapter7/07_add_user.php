<?php
$host = 'localhost';
$user = 'root';
$password = 'qwe1rty2';
$dbname = 'mydb';

// echo $host;
// var_dump($user);

$connect = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
} else {
    echo mysqli_get_host_info($connect);
    $password = '123456';
    $hash = password_hash($password, PASSWORD_BCRYPT);
    echo "<p> password hash = {$hash} </p>";
    $foo = password_verify($password, $hash);
    echo "<p> $foo  </p>";
    $result = mysqli_query(
        $connect,
        "insert into users (surname, name, email, telefon, password)
        values ('Teacher', 'Teacher', 'teacher@localhost', '84951111103', '" . $hash . "')"); //заполняем stock

        var_export($result);

}

mysqli_close($connect);
