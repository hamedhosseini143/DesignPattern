<?php

namespace Bridge\PaymentModule\Methods;

use Bridge\PaymentModule\Invoice;
use Bridge\PaymentModule\PaymentMethod;
use FTP\Connection;

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
