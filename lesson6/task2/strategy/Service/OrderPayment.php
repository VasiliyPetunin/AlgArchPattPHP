<?php

declare(strict_types=1);

namespace Strategy\Service;

use Strategy\Contract\PaymentInterface;
use Strategy\Entity\Order;
use Strategy\Payment\QiwiPayment;
use Strategy\Payment\WebMoneyPayment;
use Strategy\Payment\YandexPayment;

class OrderPayment
{
    /**
     * @var PaymentInterface
     */
    private $payment;

    /**
     * @param Order $order
     * @return string
     */
    public function payment($order): string
    {
        if ($order->getPaymentMethod() === 'Qiwi') {
            $this->setPayment(new QiwiPayment());
            return $this->payment->payment($order);
        }

        if ($order->getPaymentMethod() === 'Yandex') {
            $this->setPayment(new YandexPayment());
            return $this->payment->payment($order);
        }

        if ($order->getPaymentMethod() === 'WebMoney') {
            $this->setPayment(new WebMoneyPayment());
            return $this->payment->payment($order);
        }

        return 'Не существует указанного способа оплаты';
    }


    public function setPayment(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }
}