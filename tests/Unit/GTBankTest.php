<?php

namespace Tests\Unit;

use App\BankFactory\BankFactory;
use Tests\TestCase;

class GTBankTest extends TestCase {
   
    public function testGTBankVerification() {
        $gtbank = BankFactory::createBank('gtbank');

        $result = $gtbank->verifyAccountNumber('1234567890');
        $this->assertEquals('1234567890 verified successfully', $result);
    }

    public function testGTBankMoneyTransfer() {
        $gtbank = BankFactory::createBank('gtbank');
        $result = $gtbank->sendMoney('1234567890');
        $this->assertEquals('Money sent to 1234567890 successfully', $result);
    }


}
