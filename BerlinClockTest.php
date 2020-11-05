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

        $this->assertEquals(04,$actual,"for YYYY we have 4 minute");
    }
    public function test_5_minute_shouldReturn00(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("OOOOOOOOOOO");

        $this->assertEquals(00,$actual,"for OOOOOOOOOOO we have 0 minute");
    }
    public function test_5_minute_shouldReturn05(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("YOOOOOOOOOO");

        $this->assertEquals(05,$actual,"for YOOOOOOOOOO we have 5 minute");
    }
    public function test_5_minute_shouldReturn15(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("YYROOOOOOOO");

        $this->assertEquals(15,$actual,"for YYROOOOOOOO we have 15 minute");
    }
    public function test_5_minute_shouldReturn50(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveMinute("YYRYYRYYRYO");

        $this->assertEquals(50,$actual,"for YYRYYRYYRYO we have 50 minute");
    }

    public function test_simple_hour_shouldReturn00(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countSimpleHour("OOOO");

        $this->assertEquals(00,$actual,"for OOOO we have 0 hour");
    }
    public function test_simple_hour_shouldReturn04(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countSimpleHour("RRRR");

        $this->assertEquals(04,$actual,"for RRRR we have 4 hour");
    }

    public function test_five_hour_shouldReturn00(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveHour("OOOO");

        $this->assertEquals(00,$actual,"for OOOO we have 0 hour");
    }
    public function test_five_hour_shouldReturn15(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countFiveHour("RRRO");

        $this->assertEquals(15,$actual,"for RRRO we have 15 hour");
    }

    public function test_second_shouldReturn00(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countSecond("Y");

        $this->assertEquals(00,$actual,"for Y we have 0 second");
    }

    public function test_second_shouldReturn01(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->countSecond("O");

        $this->assertEquals(01,$actual,"for O we have 1 second");
    }
    public function test_total_clock_shouldReturn000000(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->totalCountClock("YOOOOOOOOOOOOOOOOOOOOOOO");

        $this->assertEquals("00:00:00",$actual,"for YOOOOOOOOOOOOOOOOOOOOOOO we have 00:00:00");
    }
    public function test_total_clock_shouldReturn235901(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->totalCountClock("ORRRRRRROYYRYYRYYRYYYYYY");

        $this->assertEquals("23:59:01",$actual,"for ORRRRRRROYYRYYRYYRYYYYYY we have 23:59:01");
    }

    public function test_total_clock_shouldReturn165001(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->totalCountClock("YRRROROOOYYRYYRYYRYOOOOO");

        $this->assertEquals("16:50:00",$actual,"for YRRROROOOYYRYYRYYRYOOOOO we have 16:50:01");
    }
}
