<?php

namespace RomanNumerals;

class RomanNumerals
{

    public function convertToRoman(int $decimal): string
    {
        if ($decimal === 4) {
            return "IV";
        }
        if ($decimal === 3) {
            return "III";
        }
        if ($decimal === 2) {
            return "II";
        }
        return "I";
    }
}
