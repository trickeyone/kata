<?php
namespace pdt256\kata\RomanNumerals;

interface RomanNumeralsInterface
{
    /**
     * @param integer $arabicNumber
     * @return string
     */
    public function convertArabic($arabicNumber);
}
