<?php

namespace Tests\Unit;

use App\BankFactory\BankFactory;
use PHPUnit\Framework\TestCase;

class ZenithBankTest extends TestCase
{
    public function testZenithBankVerification() {
        $zenithBank = BankFactory::createBank('zenith');
        $result = $zenithBank->verifyAccountNumber('1234567890');
        $this->assertEquals('1234567890 verified successfully', $result);
    }

    public function testZenithBankMoneyTransfer() {
        $zenithBank = BankFactory::createBank('zenith');
        $result = $zenithBank->sendMoney('1234567890');
        $this->assertEquals('Money sent to 1234567890 successfully', $result);
    }
}
