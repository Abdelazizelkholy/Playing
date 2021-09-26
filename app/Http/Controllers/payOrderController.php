<?php

namespace App\Http\Controllers;

use App\Billing\paymentGateway;
use App\order\orderDetails;
use Illuminate\Http\Request;

class payOrderController extends Controller
{

    /**
     *   another technic
     */
    public function store(orderDetails $orderDetails  , paymentGateway $paymentGateway)
    {
      //  $paymentGateway = new paymentGateway();
        $orderDetails = $orderDetails->all();
       // dd($orderDetails);
        dd($paymentGateway->charge(10000));
    }


    /*public function store()
    {
        $paymentGateway = new paymentGateway('usd');
        dd($paymentGateway->charge(10000));
    }*/
}
