<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sumnumber = 0;
        $countnumber = 0;
        $averagenumber = 0;
        for (;;) {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number === 0) {
                echo "Average of the numbers: $averagenumber\n";
                break;
            }

            $sumnumber += $number;
            $countnumber++;
            $averagenumber = $sumnumber / $countnumber;
        }
    }
}
