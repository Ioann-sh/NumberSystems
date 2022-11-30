<?php
require 'NumberSystems/NumberSystems.php';
class Application
{

    public $numberSystems;

    function __construct(){
        $this -> numberSystems = new NumberSystems();
    }

    public function converter($params){
        if ($params['convertFrom'] == $params['convertTo']){
            return $this -> numberSystems -> numberToNumber($params['number']);
        } else {
            switch ($params['convertFrom']){
                case '2':
                    $decimalNum = $this -> numberSystems -> binaryToDecimal($params['number']);
                    switch ($params['convertTo']){
                        case '8':
                            return $this -> numberSystems -> decimalToOctal($decimalNum);

                        case '16':
                            return $this -> numberSystems -> decimalToHexadecimal($decimalNum);

                        case 'Roman':
                            return $this -> numberSystems -> decimalToRoman($decimalNum);

                        case '10':
                            return $decimalNum;

                    }
                    break;
                case '8':
                    $decimalNum = $this -> numberSystems -> octalToDecimal($params['number']);
                    switch ($params['convertTo']){
                        case '2':
                            return $this -> numberSystems -> decimalToBinary($decimalNum);

                        case '16':
                            return $this -> numberSystems -> decimalToHexadecimal($decimalNum);

                        case 'Roman':
                            return $this -> numberSystems -> decimalToRoman($decimalNum);

                        case '10':
                            return $decimalNum;

                    }
                    break;
                case '10':
                    $decimalNum = (int) $params['number'];
                    switch ($params['convertTo']){
                        case '2':
                            return $this -> numberSystems -> decimalToBinary($decimalNum);
                        case '8':
                            return $this -> numberSystems -> decimalToOctal($decimalNum);
                        case '16':
                            return $this -> numberSystems -> decimalToHexadecimal($decimalNum);
                        case 'Roman':
                            return $this -> numberSystems -> decimalToRoman($decimalNum);
                    }
                    break;
                case '16':
                    $decimalNum = $this -> numberSystems -> hexadecimalToDecimal($params['number']);
                    switch ($params['convertTo']){
                        case '2':
                            return $this -> numberSystems -> decimalToBinary($decimalNum);
                        case '8':
                            return $this -> numberSystems -> decimalToOctal($decimalNum);
                        case '10':
                            return $decimalNum;
                        case 'Roman':
                            return $this -> numberSystems -> decimalToRoman($decimalNum);
                    }
                    break;
                case 'Roman':
                    $decimalNum = $this -> numberSystems -> romanToDecimal($params['number']);
                    switch ($params['convertTo']){
                        case '2':
                            return $this -> numberSystems -> decimalToBinary($decimalNum);
                        case '8':
                            return $this -> numberSystems -> decimalToOctal($decimalNum);
                        case '10':
                            return $decimalNum;
                        case '16':
                            return $this -> numberSystems -> decimalToHexadecimal($decimalNum);
                    }
                    break;
            }
        }
        return false;
    }


}