<?php

namespace RomanNumerals;

class RomanNumerals
{

    public function convertToRoman(int $decimal): string
    {
        if ($decimal >= 10) {
            return "X" . $this->convertToRoman($decimal - 10);
        }
        if ($decimal >= 9) {
            return "IX" . $this->convertToRoman($decimal - 9);
        }
        if ($decimal >= 5) {
            return "V" . $this->convertToRoman($decimal - 5);
        }
        if ($decimal >= 4) {
            return "IV" . $this->convertToRoman($decimal - 4);
        }
        if ($decimal >= 1) {
            return "I" . $this->convertToRoman($decimal - 1);
        }
        return "";
    }
}
