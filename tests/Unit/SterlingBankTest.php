<?php

namespace Tests\Unit;

use App\BankFactory\BankFactory;
use PHPUnit\Framework\TestCase;

class SterlingBankTest extends TestCase
{
    public function testSterlingBankVerification() {
        $sterlingBank = BankFactory::createBank('sterling');
        $result = $sterlingBank->verifyAccountNumber('1234567890');
        $this->assertEquals('1234567890 verified successfully', $result);
    }

    public function testSterlingBankMoneyTransfer() {
        $sterlingBank = BankFactory::createBank('sterling');
        $result = $sterlingBank->sendMoney('1234567890');
        $this->assertEquals('Money sent to 1234567890 successfully', $result);
    }
}
