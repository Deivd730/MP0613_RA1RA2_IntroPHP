<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sumnumb = 0;
        $ctnumber = 0;
        $avrgnumber = 0;
        
        for (;;) {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number === 0) {
                echo "Average of the numbers: $avrgnumber\n";
                break;
            }

            $sumnumb += $number;
            $ctnumber++;
            $avrgnumber = $sumnumb / $ctnumber;
        }
    }
}
