<?php

namespace GildedRose\Test;

class SulfurasTest extends BaseTest
{
    const PRODUCT_SULFURAS = "Sulfuras, Hand of Ragnaros";

    /**
     * @dataProvider possibleDays
     * @test
     */
    public function shouldNotChangeTheDate($days)
    {
        $this->createProduct(self::PRODUCT_SULFURAS, $days, self::QUALITY_NORMAL);
        $this->nextDay();
        $this->assertExpectedDays($days, 'Sulfuras does not change days');
    }

    /**
     * @dataProvider possibleQualities
     * @test
     */
    public function shouldNotChangeTheQuality($quality)
    {
        $this->createProduct(self::PRODUCT_SULFURAS, self::SELL_IN_POSITIVE_DAYS, $quality);
        $this->nextDay();
        $this->assertQuality($quality, "Sulfuras does not change quality");
    }
}
