<?php

namespace App\order;

use App\Billing\paymentGateway;

class orderDetails
{
    private $paymentGateway;

    public function __construct(paymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all(): array
    {
        $this->paymentGateway->getDiscount(500);

        return [
            'name' => 'abdelaziz',
            'address' => '123 cairo',
        ];
    }

}