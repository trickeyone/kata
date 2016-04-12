<?php
namespace pdt256\kata\CurrencyConversion;

class CurrencyConversionTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $bowling = new CurrencyConversion;

        $this->assertTrue($bowling instanceof CurrencyConversion);
    }
}
