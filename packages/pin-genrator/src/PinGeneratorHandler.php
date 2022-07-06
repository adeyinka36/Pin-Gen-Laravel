<?php

namespace PinGenerator;

class PinGeneratorHandler
{
    public function increament  (int $num): int
    {
        if($this->checkPalindrome($num) || $this->checkSequential($num) || $this->checkRepeating($num)){
            return 0;
        }
       return $num;
    }

    public function checkPalindrome(int $num): bool
    {
        return strrev($num) === strval($num);
    }

    public function checkSequential(int $num): bool
    {
        $numArray = str_split((strval($num)));
        return ((int)max($numArray)-(int)min($numArray) == (count($numArray)-1));
    }

    public function checkRepeating(int $num): bool
    {
        $numArray = str_split((strval($num)));
        for($i = 0; $i < count($numArray); $i++){
            if($i && $numArray[$i] === $numArray[$i-1]) {
                return true;
            }
        }
        return false;
    }
}
