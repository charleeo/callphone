<?php

namespace App\BankFactory;

use App\BankServices\GTBank;
use App\BankServices\SterlingBank;
use App\BankServices\ZenithBank;
use App\Contracts\BankInterface;

class BankFactory {

    /** Creating constants for the bank names */
    const ZENITH_BANK='zenith';
    const GTBANK='ggtbank';
    const STERLING_BANK='sterling';

    /**
     * We are creating a BankFactory class that return instances of the bank classes. 
     * Depending on the bank name provided, the class instance of that bank will be created. It uses the app container to instantiate the classes without having to use the new keywork. In this case, we have a more decoupled application
     * @param mixed $bankName the bank to create an instance for
     * @return BankInterface
     */
    public static function createBank($bankName) {
        switch ($bankName) {
            case static::GTBANK:
                return app()->make(GTBank::class);
            case static::ZENITH_BANK:
                return app()->make(ZenithBank::class);
            case static::STERLING_BANK:
                    return app()->make(SterlingBank::class);
            default:
                throw new \InvalidArgumentException("Invalid bank name");
        }
    }
}
