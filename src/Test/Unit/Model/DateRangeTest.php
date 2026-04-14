<?php

declare(strict_types=1);

namespace FrankBokdam\ProductRelations\Test\Unit\Model;

use DateTimeImmutable;
use FrankBokdam\ProductRelations\Model\DateRange;
use PHPUnit\Framework\TestCase;

class DateRangeTest extends TestCase
{
    public function testGetFromReturnsFromDate(): void
    {
        $from = new DateTimeImmutable('2026-01-01 00:00:00');
        $to = new DateTimeImmutable('2026-01-01 23:59:59');
        $range = new DateRange($from, $to);
        $this->assertSame($from, $range->getFrom());
    }

    public function testGetToReturnsToDate(): void
    {
        $from = new DateTimeImmutable('2026-01-01 00:00:00');
        $to = new DateTimeImmutable('2026-01-01 23:59:59');
        $range = new DateRange($from, $to);
        $this->assertSame($to, $range->getTo());
    }
}
