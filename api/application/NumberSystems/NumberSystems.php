<?php

class NumberSystems
{

    public function binaryToDecimal($number)
    {
        return bindec($number);
    }

    public function decimalToBinary($number)
    {
        return decbin((int) $number);
    }

    public function octalToDecimal($number)
    {
        return octdec($number);
    }

    public function decimalToOctal($number)
    {
        return decoct((int) $number);
    }

    public function hexadecimalToDecimal($number)
    {
        return hexdec($number);
    }

    public function decimalToHexadecimal($number)
    {
        return dechex((int)$number);
    }

    public function romanToDecimal($number)
    {
        $str = $number;
        $numerals = array('I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000,);
        $specialNum = array('IV' => 4, 'IX' => 9, 'XL' => 40, 'XC' => 90, 'CD' => 400, 'CM' => 900);

        $res = 0;

        foreach($specialNum as $rom => $arab) { //удоляем противные 4 и 9
            if (substr_count($str, $rom) != 0) {
                $res += $arab;
                $str = str_replace($rom,"", $str);
            }
        }

        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            $res += $numerals[$str[$i]];
        }
        return $res;
    }

    public function decimalToRoman($number)
    {
        $num = $number;
        $i = 0;
        $res = '';

        $arr_1 = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX');
        $arr_2 = array('X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC');
        $arr_3 = array('C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM');

        while ($i <= 3) {

            $ch = $num % 10;
            $num = $num / 10;
            $i++ ;
            switch ($i) { // в соответствии с разрядом выбираем набор цифр
                case 1:
                    $res = $arr_1[$ch-1] . $res;
                    break;
                case 2:
                    $res = $arr_2[$ch-1] . $res;
                    break;
                case 3:
                    $res = $arr_3[$ch-1] . $res;
                    break;
            }
        }

        $countM = str_repeat('M',$number / 1000);
        return $countM . $res;
    }

    public function numberToNumber($number){
        return $number;
    }

}