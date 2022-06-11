<?php

namespace App\Item;

class Conjured extends AbstractItem
{
    public function tick()
    {
        $this->quality -= 2;
        --$this->sellIn;

        if ($this->sellIn <= 0) {
            $this->quality -= 2;
        }

        if ($this->quality < 0) {
            $this->quality = 0;
        }
    }
}