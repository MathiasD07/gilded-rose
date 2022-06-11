<?php

namespace App;

use App\Item\AgedBrie;
use App\Item\BackstagePass;
use App\Item\Conjured;
use App\Item\DefaultItem;
use App\Item\Normal;

class GildedRose
{
    private const ITEMS = [
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
        'Conjured Mana Cake' => Conjured::class,
        'normal' => Normal::class,
        'default' => DefaultItem::class,
    ];

    public static function of(string $item, int $quality, int $sellIn)
    {
        $item = self::ITEMS[$item] ?? self::ITEMS['default'];

        return new $item($quality, $sellIn);
    }
}
