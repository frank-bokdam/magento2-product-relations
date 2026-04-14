<?php

declare(strict_types=1);

namespace FrankBokdam\ProductRelations\Model;

use DateTimeImmutable;
use FrankBokdam\ProductRelations\Api\Data\DateRangeInterface;

class DateRange implements DateRangeInterface
{
    /**
     * @param DateTimeImmutable $from
     * @param DateTimeImmutable $to
     */
    public function __construct(
        private readonly DateTimeImmutable $from,
        private readonly DateTimeImmutable $to
    ) {
    }

    /**
     * @inheritDoc
     */
    public function getFrom(): DateTimeImmutable
    {
        return $this->from;
    }

    /**
     * @inheritDoc
     */
    public function getTo(): DateTimeImmutable
    {
        return $this->to;
    }
}
