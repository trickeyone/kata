<?php
namespace pdt256\kata\Life;

class LifeTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $bowling = new Life;
        $this->assertTrue($bowling instanceof Life);
    }
}
