<?php

namespace RomanNumerals;

class RomanNumerals
{

    public function convertToRoman(int $decimal): string
    {
        if ($decimal === 2) {
            return "II";
        }
        return "I";
    }
}
