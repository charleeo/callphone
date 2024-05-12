<?php

namespace App\Http\Controllers;

use App\BankFactory\BankFactory;

class BankController extends Controller {

    private $bank;
    protected $bankName;

    /**
     * Use setter approac to set the bank name dynamicaly and also create the Bank factory once
     */
    public function setBankName($bankName) {
        $this->bankName = $bankName;
        $this->bank = BankFactory::createBank($this->bankName);
    }


    /**
     * Sending money to bank account
     * @param mixed $bankName the bank name to verify account for
     * @param mixed $payload the account verification payload
     *
     */
    public function sendMoney(string $bankName, mixed $payload) {
         $this->setBankName($bankName);
         return  $this->bank->sendMoney($payload);
    }

    
    /**
     * Verify an account number
     * @param mixed $bankName the bank name to verify account for
     * @param mixed $payload the account verification payload
     */
    public function verifyAccount(string $bankName, mixed $payload) {
         $this->setBankName($bankName);
         return  $this->bank->verifyAccountNumber($payload);
    }
}
