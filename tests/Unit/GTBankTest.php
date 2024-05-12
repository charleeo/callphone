<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\BankServices\GTBank;

class GTBankTest extends TestCase {
   
    public function testGTBankVerification() {
        $gtbank = new GTBank();
        $result = $gtbank->verifyAccountNumber('1234567890');
        $this->assertEquals('1234567890 verified successfully', $result);
    }

    public function testGTBankMoneyTransfer() {
        $gtbank = new GTBank();
        $result = $gtbank->sendMoney('1234567890');
        $this->assertEquals('Money sent to 1234567890 successfully', $result);
    }


}
