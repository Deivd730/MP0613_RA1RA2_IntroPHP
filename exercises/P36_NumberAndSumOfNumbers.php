<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sumnumber = 0;
        $countnumber = 0;
        for (;;) {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number === 0) {
                echo "Number of numbers: $countnumber\n";
                echo "Sum of the numbers: $sumnumber\n";
                break;
            }

            $sumnumber += $number;
            $countnumber++;
        }
    }
}
