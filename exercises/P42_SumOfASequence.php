<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        // Write your code here
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $sum = 0;
        for ($i = 0; $i <= $number; $i++) {
            $sum += $i;
        }
        echo "The sum is $sum";
    }
}
