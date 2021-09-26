<?php

namespace App\Wallet;

use App\Models\Wallet;

class med_wallet
{

    public function add($amount , $user_id)
    {
        Wallet::create([
            'amount' => $amount ,
            'user_id' => $user_id
        ]);
    }

    public function update( $wallet_id , $amount , $user_id)
    {
        $wallet = Wallet::findOrFail($wallet_id);
        $wallet->update([
            'amount' => $amount ,
            'user_id' => $user_id
        ]);
    }

}