<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Wallet\med_wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    protected $wallet;

    public function __construct(med_wallet $wallet)
    {
        $this->wallet = $wallet;
    }

    public function add_wallet(): string
    {
        $this->wallet->add(100 , 10100);
        return 'done';
    }

    public function update_wallet(): string
    {
        $this->wallet->update(2,100,101);
        return 'done';
    }
}
