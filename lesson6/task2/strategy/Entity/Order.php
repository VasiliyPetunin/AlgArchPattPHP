<?php

declare(strict_types=1);

namespace Strategy\Entity;

use DateTime;
use Strategy\Contract\PaymentMethodInterface;

class Order implements PaymentMethodInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $sum;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * Order constructor.
     * @param int $id
     * @param float $sum
     * @param DateTime $createdAt
     */
    public function __construct(int $id, float $sum, DateTime $createdAt, string $paymentMethod)
    {
        $this->id = $id;
        $this->sum = $sum;
        $this->createdAt = $createdAt;
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return $this->sum;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }
}