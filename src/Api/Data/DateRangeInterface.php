<?php

declare(strict_types=1);

namespace FrankBokdam\ProductRelations\Api\Data;

use DateTimeImmutable;

interface DateRangeInterface
{
    /**
     * Get the start of the date range.
     */
    public function getFrom(): DateTimeImmutable;

    /**
     * Get the end of the date range.
     */
    public function getTo(): DateTimeImmutable;
}
