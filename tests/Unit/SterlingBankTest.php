<?php

namespace Tests\Unit;

use App\BankServices\SterlingBank;
use PHPUnit\Framework\TestCase;

class SterlingBankTest extends TestCase
{
    public function testGTBankVerification() {
        $gtbank = new SterlingBank();
        $result = $gtbank->verifyAccountNumber('1234567890');
        $this->assertEquals('1234567890 verified successfully', $result);
    }

    public function testGTBankMoneyTransfer() {
        $gtbank = new SterlingBank();
        $result = $gtbank->sendMoney('1234567890');
        $this->assertEquals('Money sent to 1234567890 successfully', $result);
    }
}
