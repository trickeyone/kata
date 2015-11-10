<?php
namespace pdt256\kata\Life;

class LifeTest extends \PHPUnit_Framework_TestCase
{
    public function testSetup()
    {
        $life = new Life;

        $this->assertTrue($life instanceof Life);
    }
}
