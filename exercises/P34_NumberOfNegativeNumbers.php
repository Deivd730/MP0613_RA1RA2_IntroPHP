<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
        $numbercount = 0;
        for (;;) {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number < 0) {

                $numbercount++;
            }

            if ($number === 0) {
                echo "Number of negative numbers: $numbercount\n";
                break;
            }
        }
    }
}
