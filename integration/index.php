<?php include $_SERVER['DOCUMENT_ROOT'] . '/integration/template/header.php'; ?>

        <h1>Каталог</h1>
        <div class="items">
            <? foreach ($products as $product) : ?>
                <figure>
                    <p><img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>" /></p>
                    <figcaption><?= $product['name'] ?></figcaption>
                    <a href="form.php?id=<?=$product['id']?>" class="btn">Купить</a>
                </figure>
            <? endforeach ?>
        </div>
<? include __DIR__ . '/template/footer.php'; ?>
