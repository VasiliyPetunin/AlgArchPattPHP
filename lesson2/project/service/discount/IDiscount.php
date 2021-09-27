<?php

declare(strict_types = 1);

namespace Service\Discount;

interface IDiscount
{
    /**
     * Получаем скидку в процентах
     *
     * @return float
     */
    public function getDiscount(): float;
}
