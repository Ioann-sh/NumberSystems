<?php


interface NumberSystemsInterface
{
    public function binaryToDecimal($number);
    public function decimalToBinary($number);

    public function octalToDecimal($number);
    public function decimalToOctal($number);

    public function hexadecimalToDecimal($number);
    public function decimalToHexadecimal($number);

    public function romanToDecimal($number);
    public function decimalToRoman($number);
}