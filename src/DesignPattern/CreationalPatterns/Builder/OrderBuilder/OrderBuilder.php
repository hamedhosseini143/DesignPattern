<?php

namespace src\DesignPattern\CreationalPatterns\Builder\OrderBuilder;

class OrderBuilder
{
    /**
     * @var int
     */
    private int $customerId;
    /**
     * @var int
     */
    private int $totalPrice;
    /**
     * @var int
     */
    private int $finalPrice;
    /**
     * @var string
     */
    private string $deliveryAddress;
    /**
     * @var int
     */
    private int $orderLines;
    /**
     * @var bool
     */
    private bool $status;
    /**
     * @var Order|null
     */
    private Order $order;

    /**
     * @param Order|null $order
     */
    public function __construct(?Order $order)
    {
        $this->order = $order;
    }

    /**
     * @param Order|null $order
     * @return OrderBuilder
     */
    public static function forge(?Order $order)
    {
        return new OrderBuilder($order);
    }

    /**
     * @param $customer
     * @return $this
     */
    public function withCustomer($customer): OrderBuilder
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @param $totalPrice
     * @return $this
     */
    public function withTotalPrice($totalPrice): OrderBuilder
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    /**
     * @param $finalPrice
     * @return $this
     */
    public function withFinalPrice($finalPrice): OrderBuilder
    {
        $this->finalPrice = $finalPrice;
        return $this;
    }


    /**
     * @param $deliveryAddress
     * @return $this
     */
    public function withDeliveryAddress($deliveryAddress): OrderBuilder
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @param $orderLines
     * @return $this
     */
    public function withOrderLines($orderLines): OrderBuilder
    {
        $this->orderLines = $orderLines;
        return $this;
    }

    /**
     * @param $status
     * @return $this
     */
    public function withStatus($status): OrderBuilder
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Order
     */
    public function builder():Order
    {
        return new Order($this->customerId || $this->order->getCustomerId(),
            $this->totalPrice || $this->order->getTotalPrice(),
            $this->finalPrice || $this->order->getFinalPrice(),
            $this->deliveryAddress || $this->order->getDeliveryAddress(),
            $this->orderLines || $this->order->getOrderLines(),
            $this->status || $this->order->getStatus()
        );
    }
}
