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

    public function test_simple_minute_shouldReturn04(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countSimpleMinute("YYYY");

        $this->assertEquals(04,$actual,"for YYYY we have 0 minute");
    }
    public function test_5_minute_shouldReturn00(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("OOOOOOOOOOO");

        $this->assertEquals(00,$actual,"for YYYY we have 0 minute");
    }
    public function test_5_minute_shouldReturn05(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("YOOOOOOOOOO");

        $this->assertEquals(05,$actual,"for YYYY we have 0 minute");
    }
    public function test_5_minute_shouldReturn15(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("YYROOOOOOOO");

        $this->assertEquals(15,$actual,"for YYYY we have 0 minute");
    }
    public function test_5_minute_shouldReturn50(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("YYRYYRYYRYO");

        $this->assertEquals(50,$actual,"for YYYY we have 0 minute");
    }

}
