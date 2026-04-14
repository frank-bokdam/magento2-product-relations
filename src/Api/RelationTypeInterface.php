<?php

declare(strict_types=1);

namespace FrankBokdam\ProductRelations\Api;

use FrankBokdam\ProductRelations\Api\Data\DateRangeInterface;

interface RelationTypeInterface
{
    /**
     * Unique string code for this relation type, e.g. 'viewed_together'.
     */
    public function getTypeCode(): string;

    /**
     * True if this type captures runtime events; false if it derives from a source table.
     */
    public function isEventBased(): bool;

    /**
     * Aggregates data for the given date range into product_relation_counts.
     *
     * @param DateRangeInterface $range
     */
    public function rollup(DateRangeInterface $range): void;
}
