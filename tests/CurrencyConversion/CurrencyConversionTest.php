<?php
namespace pdt256\kata\CurrencyConversion;

class CurrencyConversionTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $currencyConversion = new CurrencyConversion;

        $this->assertTrue($currencyConversion instanceof CurrencyConversion);
    }
}
