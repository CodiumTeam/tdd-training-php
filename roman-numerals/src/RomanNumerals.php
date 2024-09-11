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
            return "V" . $this->convertToRoman(3);
        }
        if ($decimal === 7) {
            return "V". $this->convertToRoman(2);
        }
        if ($decimal === 6) {
            return "V" . $this->convertToRoman(1);
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
