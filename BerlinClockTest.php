<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{

    public function test_simple_minute_shouldReturn0(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countSimpleMinute("OOOO");

        $this->assertEquals(00,$actual,"for OOOO we have 0 minute");
    }
    public function testSimpleMinuteRow(){
        $this->assertEquals(00,00,"for OOOO we have 0 minute");
        $this->assertEquals(04,04,"for YYYY we have 04 minute");
        $this->assertEquals(34,34,"for OOOO we have 34 minute");
        $this->assertEquals(59,59,"for YYYY we have 59 minute");
        $this->assertEquals(00,00,"for OOOO we have 35 minute");

    }

}
