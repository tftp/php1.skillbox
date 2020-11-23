<?php

$host = 'localhost';
$user = 'root';
$password = 'qwe1rty2';
$dbname = 'mydb';

$email = 'admin@localhost';
$email_not_valid = 'anybody@localhost';
$query = "select * from users where email = '$email' limit 1";
$connect = mysqli_connect($host, $user, $password, $dbname) or die('connection Error');
// var_export($query);
// if (mysqli_connect_errno()) {
//     echo mysqli_connect_error();
// } else {

    $result = mysqli_query(
        $connect,
        $query);
// var_export($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $login = $row['email'];
        $pass = $row['password'];
        // var_export($row);

    if ($login) {
        echo $login . "<br />";
        echo $pass . "<br />";
    }
// }


mysqli_close($connect);
