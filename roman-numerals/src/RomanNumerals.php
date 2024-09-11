<?php

namespace RomanNumerals;

class RomanNumerals
{

    public function convertToRoman(int $decimal): string
    {
        $conversion = [
            1000 => "M",
            900 => "CM",
            500 => "D",
            400 => "CD",
            100 => "C",
            90 => "XC",
            50 => "L",
            40 => "XL",
            10 => "X",
            9 => "IX",
            5 => "V",
            4 => "IV",
            1 => "I",
        ];

        foreach ($conversion as $number => $roman) {
            if ($decimal >= $number) {
                return $roman . $this->convertToRoman($decimal - $number);
            }
        }
        return "";
    }
}
