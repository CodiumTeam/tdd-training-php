<?php

namespace GildedRose\Test;

class NormalProductTest extends BaseTest
{
    const PRODUCT_NORMAL = "foo";

    /**
     * @dataProvider possibleDays
     * @test
     */
    public function shouldDecreaseTheDaysByOne($days)
    {
        $this->createProduct(self::PRODUCT_NORMAL, $days, self::QUALITY_NORMAL);
        $this->nextDay();
        $this->assertExpectedDays(
            $days - 1, "Normal product should decrease the days to expire by 1"
        );
    }

    /**
     * @dataProvider qualityProvider
     * @test
     */
    public function shouldChangeQualityTo($days, $difference, $message)
    {
        $this->createProduct(self::PRODUCT_NORMAL, $days, self::QUALITY_NORMAL);
        $this->nextDay();
        $this->assertQuality(self::QUALITY_NORMAL - $difference, $message);
    }

    /**
     * @dataProvider possibleDays
     * @test
     */
    public function theQualityIsNeverLowerThan0($days)
    {
        $this->createProduct(self::PRODUCT_NORMAL, $days, self::QUALITY_ZERO);
        $this->nextDay();
        $this->assertQuality(self::QUALITY_ZERO, "The quality is never lower than 0");
    }

    public function qualityProvider()
    {
        return array(
            array(self::SELL_IN_POSITIVE_DAYS, 1, "Positive days decrease quality in 1"),
            array(self::SELL_IN_1_DAY, 1, "With 1 day decrease quality in 1"),
            array(self::SELL_IN_0_DAYS, 2, "With 0 day decrease quality in 2"),
            array(self::SELL_IN_EXPIRED_DATE, 2, "In expired date decrease quality in 2"),
        );
    }
}
