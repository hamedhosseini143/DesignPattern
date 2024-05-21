<?php

namespace src\DesignPattern\Bridge\PaymentModule\Methods;

use FTP\Connection;
use src\DesignPattern\Bridge\PaymentModule\Invoice;
use src\DesignPattern\Bridge\PaymentModule\PaymentMethod;

class OnlinePayment extends PaymentMethod
{
    private $connection;

    public function __construct(Connection $conection)
    {
        $this->connection = $conection;
    }

    /**
     * @param Invoice $invoice
     * @return mixed
     */
    public function startpay(Invoice $invoice)
    {
        //$this->connection->insert($invoice);
        return $this->handler->pay($invoice);
    }
}
