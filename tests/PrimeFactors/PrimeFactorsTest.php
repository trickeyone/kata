<?php
namespace pdt256\kata\PrimeFactors;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $primeFactors = new PrimeFactors;

        $this->assertTrue($primeFactors instanceof PrimeFactors);
    }
}
