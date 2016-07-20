<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{
    /** @var  Item */
    private $item;

    const SELL_IN_EXPIRED_DATE = -10;
    const SELL_IN_0_DAYS = 0;
    const SELL_IN_1_DAY = 1;
    const SELL_IN_5_DAYS = 5;
    const SELL_IN_POSITIVE_DAYS = 10;
    const SELL_IN_MORE_THAN_10_DAYS = 20;

    const QUALITY_ZERO = 0;
    const QUALITY_ONE = 1;
    const QUALITY_NORMAL = 10;
    const QUALITY_MAXIMUM = 50;

    public function possibleDays()
    {
        return array(
            array(BaseTest::SELL_IN_EXPIRED_DATE),
            array(BaseTest::SELL_IN_0_DAYS),
            array(BaseTest::SELL_IN_5_DAYS),
            array(BaseTest::SELL_IN_POSITIVE_DAYS),
            array(BaseTest::SELL_IN_EXPIRED_DATE),
        );
    }

    public function notExpiredDays()
    {
        return array(
            array(BaseTest::SELL_IN_1_DAY),
            array(BaseTest::SELL_IN_5_DAYS),
            array(BaseTest::SELL_IN_POSITIVE_DAYS),
        );
    }

    public function expiredDays()
    {
        return array(
            array(BaseTest::SELL_IN_0_DAYS),
            array(BaseTest::SELL_IN_EXPIRED_DATE),
        );
    }

    public function possibleQualities()
    {
        return array(
            array(BaseTest::QUALITY_NORMAL),
            array(BaseTest::QUALITY_ONE),
            array(BaseTest::QUALITY_ZERO),
            array(BaseTest::QUALITY_MAXIMUM),
        );
    }

    /**
     * @param $name
     * @param $days
     * @param $quality
     * @return Item
     */
    protected function createProduct($name, $days, $quality)
    {
        $this->item = new Item($name, $days, $quality);
    }

    protected function nextDay()
    {
        $gildedRose = new GildedRose(array($this->item));
        $gildedRose->update_quality();
    }

    /**
     * @param $expectedQuality
     * @param $message
     */
    protected function assertQuality($expectedQuality, $message)
    {
        $this->assertEquals($expectedQuality, $this->item->quality, $message);
    }

    /**
     * @param $expectedDays
     * @param $message
     */
    protected function assertExpectedDays($expectedDays, $message)
    {
        $this->assertEquals($expectedDays, $this->item->sell_in, $message);
    }
}
