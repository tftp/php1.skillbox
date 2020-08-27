<?php
  require(__DIR__.'/controller.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Решите задачу</h1>

    <form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post" name="problem">
      <input type="hidden" name="op1" value="<?= $sourceOperator1 ?>">
      <input type="hidden" name="sum" value="<?= $sourceSum ?>">

      <div>
        <span><?= $sourceOperator1 ?> +</span>
        <input type="text" size="2" name="op2" value="<?= $sourceOperator2 ?>">
        <span> = <?= $sourceSum ?></span>
      </div>
      <div class="info">
        <? if(isset($equationString)) :?>
            <span><?= $equationString ?></span>
        <? endif ?>
        <? if(isset($success)) : ?>
              <font color="green">
                <?= $success?>
              </font>
        <? endif ?>
        <? if(isset($error)) : ?>
            <font color="red">
              <?= $error ?>
            </font>
        <? endif ?>
      </div>
      <br />
      <input type="submit" name="solve_problem" value="Готово!">
    </form>
  </body>
</html>
