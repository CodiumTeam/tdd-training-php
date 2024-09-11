<?php

namespace RomanNumerals;

class RomanNumerals
{

    public function convertToRoman(int $decimal): string
    {
        if ($decimal >= 10) {
            return "X";
        }
        if ($decimal >= 9) {
            return "IX";
        }
        if ($decimal >= 5) {
            return "V" . $this->convertToRoman($decimal - 5);
        }
        if ($decimal >= 4) {
            return "IV";
        }
        if ($decimal >= 1) {
            return "I" . $this->convertToRoman($decimal - 1);
        }
        return "";
    }
}
