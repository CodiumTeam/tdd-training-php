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
        if ($decimal >= 6) {
            return "V" . $this->convertToRoman($decimal - 5);
        }
        if ($decimal === 5) {
            return "V";
        }
        if ($decimal === 4) {
            return "IV";
        }
        if ($decimal === 3) {
            return "I" . $this->convertToRoman(2);
        }
        if ($decimal === 2) {
            return "I" . $this->convertToRoman(1);
        }
        return "I";
    }
}
