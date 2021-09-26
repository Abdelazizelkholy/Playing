<?php

namespace App\Billing;

use Illuminate\Support\Str;

class paymentGateway
{

    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function getDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount): array
    {

        return [
            'amount' => $amount - $this->discount,
            'confirmation_num' => str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
        ];
    }

}