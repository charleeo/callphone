<?php

namespace App\BankServices;

use App\Contracts\BankInterface;

class GTBank implements BankInterface {

    /**
     * 
     * @inheritDoc
     * 
     */
    public function verifyAccountNumber($payload) {
        return "$payload verified successfully";
    }

    public function sendMoney($payload) {
        return "Money sent to $payload successfully";
    }
}
