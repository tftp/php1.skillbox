<?php include 'noname.php'; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="form-noname">
  <form  action="form.php" method="post">
    <input type="hidden" name="op2" value="<?= $value_op2; ?>">
    <input type="text" name="op1" value="<?= $value_op1; ?>">
    + <?=$value_op2."=".$value_sum?>
    <div class="info">
      <?= $_POST[op2]  ?>
    </div>
    <input type="submit" name="sub" value="OK">
  </form>

</div>
  </body>
</html>
