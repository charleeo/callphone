<?php

// tests/Unit/BankFactoryTest.php
namespace Tests\Unit;

use App\BankFactory\BankFactory;
use App\BankServices\GTBank;
use App\BankServices\SterlingBank;
use App\BankServices\ZenithBank;
use Tests\TestCase;


class BankFactoryTest extends TestCase {
    public function testCreateGTBank() {
        $gtbank = BankFactory::createBank('gtbank');
        $this->assertInstanceOf(GTBank::class, $gtbank);
    }

    public function testCreateZenithBank() {
        $zenith = BankFactory::createBank('zenith');
        $this->assertInstanceOf(ZenithBank::class, $zenith);
    }

    public function testCreateSterlingBank() {
        $sterling = BankFactory::createBank('sterling');
        $this->assertInstanceOf(SterlingBank::class, $sterling);
    }

    public function testInvalidBankName() {
        $this->expectException(\InvalidArgumentException::class);
        BankFactory::createBank('invalid');
    }
}
