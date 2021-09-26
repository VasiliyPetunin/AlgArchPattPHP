<?php

/** @var \Model\Entity\Product[] $productList */
/** @var bool $isLogged */
/** @var \Closure $path */
$body = function () use ($productList, $isLogged, $path) {
    ?>
    <form method="post">
        <table cellpadding="10">
            <tr>
                <td colspan="3" align="center">Корзина</td>
            </tr>
<?php
    $totalPrice = 0;
    $n = 1;
    foreach ($productList as $product) {
        ?>
            <tr>
                <td><?= $n++ ?>.</td>
                <td><?= $product->getName() ?></td>
                <td><?= $product->getPrice() ?> руб</td>
                <td><input type="button" value="Удалить" /></td>
            </tr>
<?php
        $totalPrice += $product->getPrice();
    } ?>
            <tr>
                <td colspan="3" align="right">Итого: <?= $totalPrice ?> рублей</td>
            </tr>
<?php if ($totalPrice > 0) {
        if ($isLogged) {
            ?>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="Оформить заказ" /></td>
            </tr>
<?php
        } else {
            ?>
            <tr>
                <td colspan="4" align="center">Для оформления заказа, <a href="<?= $path('user_authentication') ?>">авторизуйтесь</a></td>
            </tr>
<?php
        }
    } ?>
        </table>
    </form>
<?php
};

$renderLayout(
    'main_template.html.php',
    [
        'title' => 'Корзина',
        'body' => $body,
    ]
);
