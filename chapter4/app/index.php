<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/chapter4/app/template/header.php';
?>
<?= helperDate\getDateAgo(0 , 'long'); ?><br />
<?= helperDate\getDateAgo(0 , 'short'); ?><br />
<?= helperDate\getDateAgo(0); ?><br />
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/chapter4/app/template/footer.php';
?>
