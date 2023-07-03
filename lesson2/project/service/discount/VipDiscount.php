<?php

declare(strict_types = 1);

namespace Service\Discount;

use Model;

class VipDiscount implements IDiscount
{
    /**
     * @var string
     */
    private $user;

    /**
     * @param Model\Entity\User $user
     */
    public function __construct(Model\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * @inheritdoc
     */
    public function getDiscount(): float
    {
        // Получаем индивидуальную скидку VIP пользователя
        // $discount = $this->find($this->user)->discount();
        $discount = 20;

        return $discount;
    }
}
