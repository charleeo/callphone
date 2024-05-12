<?php

namespace Tests\Unit;

use App\BankServices\ZenithBank;
use PHPUnit\Framework\TestCase;

class ZenithBankTest extends TestCase
{
    public function testGTBankVerification() {
        $gtbank = new ZenithBank();
        $result = $gtbank->verifyAccountNumber('1234567890');
        $this->assertEquals('1234567890 verified successfully', $result);
    }

    public function testGTBankMoneyTransfer() {
        $gtbank = new ZenithBank();
        $result = $gtbank->sendMoney('1234567890');
        $this->assertEquals('Money sent to 1234567890 successfully', $result);
    }
}
