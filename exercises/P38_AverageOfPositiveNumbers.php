<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $sum = 0;
        $count = 0;

        for (;;) {
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number === 0) {
                break;
            }

            if ($number > 0) {
                $sum += $number;
                $count++;
            }
        }

        if ($count === 0) {
            echo "Cannot calculate the average\n";
        } else {
            $average = (int) ($sum / $count); // promedio truncado a entero
            echo "$average\n";
        }
    }
}
