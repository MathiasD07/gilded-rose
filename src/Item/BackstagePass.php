<?php

namespace App\Item;

class BackstagePass extends AbstractItem
{
    public function tick()
    {
        ++$this->quality;
        --$this->sellIn;

        if ($this->sellIn < 10) {
            ++$this->quality;
        }

        if ($this->sellIn < 5) {
            ++$this->quality;
        }

        if ($this->sellIn < 0) {
            $this->quality = 0;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}