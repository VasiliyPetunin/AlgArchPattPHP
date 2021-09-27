<?php

/** @var \Model\Entity\Product $productInfo */
/** @var bool $isInBasket */
/** @var \Closure $path */
$body = function () use ($productInfo, $isInBasket, $path) {
    echo  '
        Супер ' . $productInfo->getName() . ' курс всего за ' . $productInfo->getPrice() . ' руб.
        <br/><br/>
        <form method="post">
            <input name="product" type="hidden" value="' . $productInfo->getId() . '" />';
    if (!$isInBasket) {
        echo '<input type="submit" value="Положить в корзину" />';
    } else {
        echo 'Курс уже находит в корзине.<br/>';
    }
    echo '
        </form>
        <br/>
        <a href="' . $path('product_list') . '">Вернуться к списку</a>
    ';
};

$renderLayout(
    'main_template.html.php',
    [
        'title' => 'Курс ' . $productInfo->getName(),
        'body' => $body,
    ]
);
