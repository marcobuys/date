<?php

namespace Tests;

use Date\Date;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{

    public function testAddDay()
    {
        $this->assertTrue(Date::fromYmd('2021-08-13')->isFriday());
        $this->assertTrue(Date::fromYmd('1989-10-19')->isThursday());
        $this->assertTrue(Date::fromYmd('1989-04-29')->isSaturday());
    }
}
