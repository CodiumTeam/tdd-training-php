<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class GildedRoseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function changeMe()
    {
        /** @var Item[] $items */
        $items = array(new Item("aName", 10, 20));
        $gildedRose = new GildedRose($items);
        $this->assertEquals("aName", $items[0]->name);
    }
}
