<?php

declare(strict_types=1);

namespace Strategy\Payment;

use Strategy\Contract\PaymentInterface;
use Strategy\Contract\PaymentMethodInterface;

class YandexPayment implements PaymentInterface
{
    /**
     * @param PaymentMethodInterface $a
     * @return string
     */
    public function payment(PaymentMethodInterface $a): string
    {
        return 'Оплачено с помощью Yandex';
    }
}