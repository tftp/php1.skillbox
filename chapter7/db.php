<?php
$host = 'localhost';
$user = 'root';
$password = 'qwe1rty2';
$dbname = 'mysql';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
} else {
    echo mysqli_get_host_info($connect);
}

mysqli_close($connect);
