<?php

declare(strict_types=1);

namespace Linio\Common\Type;

use DateTime;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testIsCreatingDate(): void
    {
        $date = new Date('2000-01-01 09:09:09');
        $this->assertEquals('2000-01-01 00:00:00', $date->format('Y-m-d H:i:s'));
    }

    public function testIsCreatingFromDateTime(): void
    {
        $dateTime = new DateTime('2000-01-01 09:09:09');
        $date = Date::createFromDateTime($dateTime);

        $this->assertInstanceOf(Date::class, $date);
        $this->assertEquals('2000-01-01', $date->format('Y-m-d'));
    }
}
