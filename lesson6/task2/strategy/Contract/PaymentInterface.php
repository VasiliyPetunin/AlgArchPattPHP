<?php

declare(strict_types=1);

namespace Strategy\Contract;

interface PaymentInterface
{
    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function payment(PaymentMethodInterface $a): string;
}