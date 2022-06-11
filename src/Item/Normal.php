<?php

namespace App\Item;

class Normal extends AbstractItem
{
    public function tick()
    {
        --$this->quality;
        --$this->sellIn;

        if ($this->sellIn <= 0) {
            --$this->quality;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}