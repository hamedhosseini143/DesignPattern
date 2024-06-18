<?php

namespace src\DesignPattern\BehavioralPatterns\Strategy\Payment;

use src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethod\CashPayment;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethod\ChequePayment;
use src\DesignPattern\BehavioralPatterns\Strategy\Payment\PaymentMethod\OnlinePayment;

class StrategyClientPaymentMethod
{
    /**
     * @var string
     */
    private string $paymentMethod;


    /**
     * @param string $paymentMethod
     */
    public function __construct(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }


    /**
     * @return void
     */
    public function startPay(): void
    {
        $order = new Order(1200);
        $paymentService = new PaymentServiceContext();
        $paymentService->setPaymentMethod($this->mackPay());
        $paymentService->pay($order);
    }

    /**
     * @return ChequePayment|CashPayment|OnlinePayment
     */
    public function mackPay(): ChequePayment|CashPayment|OnlinePayment
    {
        return match ($this->paymentMethod) {
            'online' => new OnlinePayment (),
            'cash' => new CashPayment(),
            'cheque' => new ChequePayment(),
            default => throw new \InvalidArgumentException('Invalid payment method'),
        };
    }
}
