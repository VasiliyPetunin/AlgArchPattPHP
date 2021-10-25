<?php

declare(strict_types=1);

namespace Strategy\Payment;

use Strategy\Contract\PaymentMethodInterface;
use Strategy\Contract\PaymentInterface;

class WebMoneyPayment implements PaymentInterface
{
    /**
     * @param PaymentMethodInterface $a
     * @return string
     */
    public function payment(PaymentMethodInterface $a): string
    {
        return 'Оплачено с помощью WebMoney';
    }
}