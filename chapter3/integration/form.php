<?php
include $_SERVER['DOCUMENT_ROOT'] . '/integration/template/header.php';

$success = false;
$error = false;
$product = $products[$_REQUEST['id'] ?? 0];

if (! empty($_POST)) {
    if (empty($_POST['fio']) || strlen($_POST['id']) == 0) {
        $error = true;
    } else {
        makeOrder($product, $_POST['fio']);
        $success = true;
    }
}

?>


        <h1>Покупка</h1>

        <? if ($success) { ?>
            <p class="success">
                Ваша покупка оформлена
            </p>
        <? } else { ?>

            <? if ($error) : ?>
                <p class="error">
                    Нужно выбрать товар и заполнить ваше фио
                </p>
            <? endif ?>

            <div class="items">
                <figure>
                    <p><img src="<?= $product['img'] ?>" alt="" /></p>
                    <figcaption><?= $product['name'] ?></figcaption>
                </figure>
            </div>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <label>
                    Ваше ФИО*:
                    <input type="text" placeholder="Введите ваше фио" name="fio" value="">
                </label>
                <input type="submit" class="btn" value="Купить">
            </form>
        <? }?>

<? include __DIR__ . '/template/footer.php'; ?>
