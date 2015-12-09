<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;

class GildedRoseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function changeMe()
    {
        $items = array();
        $gildedRose = new GildedRose($items);
        $this->assertEquals(null, $gildedRose);
    }
}
