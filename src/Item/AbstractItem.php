<?php

namespace App\Item;

abstract class AbstractItem
{
    public function __construct(public $quality, public $sellIn) {}

    abstract function tick();
}