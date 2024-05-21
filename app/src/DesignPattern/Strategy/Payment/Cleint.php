<?php

namespace app\src\DesignPattern\Strategy\Payment;

use app\src\DesignPattern\Strategy\Payment\Method\CashPayment;
use app\src\DesignPattern\Strategy\Payment\Method\ChequePayment;
use app\src\DesignPattern\Strategy\Payment\Method\OnlinePayment;
use app\src\DesignPattern\Strategy\Payment\Order;
use app\src\DesignPattern\Strategy\Payment\PaymentServiceContext;

class Cleint
{
    private $paymentMethod;

    /**
     * @param $paymentMethod
     */
    public function __construct($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }


    public function stertPay(): void
    {
        $order = new Order(1200);
        $paymentService = new PaymentServiceContext();
        $paymentService->setPaymentMethod($this->mackPay());
        $paymentService->pay($order);
    }
    public function mackPay(): ChequePayment|CashPayment|OnlinePayment
    {
        return match ($this->paymentMethod) {
            'online' => new CashPayment(),
            'cash' => new OnlinePayment(),
            'cheque' => new ChequePayment(),
            default => throw new \InvalidArgumentException('Invalid payment method'),
        };
    }
}
