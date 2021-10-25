<?php

namespace Strategy;

use Strategy\Entity\Order;
use Strategy\Service\OrderPayment;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$order1 = new Order(1, 500, new \DateTime('2010-01-01'), 'Qiwi');

$paymentController = new OrderPayment();

echo "--- Оплата по киви ---\n";
$qiwi = $paymentController->payment($order1);
echo $qiwi . '<br>';

$order2 = new Order(5, 1000, new \DateTime('2011-01-01'), 'Yandex');

echo "--- Оплата по яндекс ---\n";
$yandex = $paymentController->payment($order2);
echo $yandex . '<br>';

$order3 = new Order(4, 15.55, new \DateTime('2015-01-01'), 'WebMoney');

echo "--- Оплата по вебмани ---\n";
$webMoney = $paymentController->payment($order3);
echo $webMoney . '<br>';
