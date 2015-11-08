<?php
namespace pdt256\kata\PrimeFactors;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $bowling = new PrimeFactors;
        $this->assertTrue($bowling instanceof PrimeFactors);
    }
}
