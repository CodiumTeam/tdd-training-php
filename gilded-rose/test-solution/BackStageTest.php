<?php

namespace GildedRose\Test;

class BackStageTest extends BaseTest
{
    const PRODUCT_BACKSTAGE = "Backstage passes to a TAFKAL80ETC concert";

    /**
     * @dataProvider backstageQualityIncrement
     * @test
     */
    public function shouldIncreaseTheQualityOfBackstageWhenMoreThan10Days($days, $increment)
    {
        $this->createProduct(self::PRODUCT_BACKSTAGE, $days, self::QUALITY_NORMAL);
        $this->nextDay();
        $this->assertQuality(
            self::QUALITY_NORMAL + $increment,
            "Backstage quality is increased by $increment when expired date is  $days days"
        );
    }

    /**
     * @dataProvider positiveDays
     * @test
     */
    public function shouldNotIncreaseTheQualityWhenGetsTheMaximum($days)
    {
        $quality = self::QUALITY_MAXIMUM;
        $this->createProduct(self::PRODUCT_BACKSTAGE, $days, $quality);
        $this->nextDay();
        $this->assertQuality(
            self::QUALITY_MAXIMUM,
            "Backstage never has more quality than the maximum ($quality) days"
        );
    }

    /**
     * @dataProvider possibleDays
     * @test
     */
    public function shouldDecreaseTheDaysByOne($days)
    {
        $this->createProduct(self::PRODUCT_BACKSTAGE, $days, self::QUALITY_NORMAL);
        $this->nextDay();
        $this->assertExpectedDays(
            $days - 1, "Normal product should decrease the days to expire by 1"
        );
    }

    public function backstageQualityIncrement()
    {
        return array(
            array(self::SELL_IN_MORE_THAN_10_DAYS, 1),
            array(11, 1),
            array(10, 2),
            array(9, 2),
            array(8, 2),
            array(7, 2),
            array(6, 2),
            array(5, 3),
            array(4, 3),
            array(3, 3),
            array(2, 3),
            array(1, 3),
            array(0, -self::QUALITY_NORMAL),
        );
    }

    public function positiveDays()
    {
        return array_map($this->arrayWrap(), range(1, 15));
    }

    /**
     * @return callable
     */
    protected function arrayWrap()
    {
        return function ($value) {
            return array($value);
        };
    }
}
