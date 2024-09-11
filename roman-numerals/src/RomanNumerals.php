<?php

namespace RomanNumerals;

class RomanNumerals
{

    public function convertToRoman(int $decimal): string
    {
        if ($decimal === 10) {
            return "X";
        }
        if ($decimal === 9) {
            return "IX";
        }
        if ($decimal === 8) {
            return "VIII";
        }
        if ($decimal === 7) {
            return "VII";
        }
        if ($decimal === 6) {
            return "VI";
        }
        if ($decimal === 5) {
            return "V";
        }
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
