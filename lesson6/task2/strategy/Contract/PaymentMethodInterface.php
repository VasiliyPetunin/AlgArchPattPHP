<?php

declare(strict_types=1);

namespace Strategy\Contract;

interface PaymentMethodInterface
{
    public function getId(): int;

    public function getSum(): float;

    public function getCreatedAt(): \DateTime;

    public function getPaymentMethod(): string;
}