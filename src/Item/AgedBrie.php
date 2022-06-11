<?php

namespace App\Item;

class AgedBrie extends AbstractItem
{
    public function tick()
    {
        ++$this->quality;
        --$this->sellIn;

        if ($this->sellIn <= 0) {
            ++$this->quality;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}