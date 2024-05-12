<?php


namespace App\Contracts;

interface BankInterface {
    /**
     * This method is used to verify a bank account number and return the account details
     * @param mixed $payload the account information to be verified
     * @return mixed
     */
    public function verifyAccountNumber($payload);

    /**
     * This method is used to perform transaction between different banks
     * @param mixed $payload the account information to send money to
     * @return mixed
     */
    public function sendMoney($payload);
}
