<?php
require 'controller1.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="hidden" name="op1" value="">
      <input type="hidden" name="sum" value="">

      <span>10 + </span>
      <input type="text" size="2" name="op2" value="">
      <span>= 100</span>
      <br />
      <input type="submit" name="submited" value="ok">

    </form>
  </body>
</html>
