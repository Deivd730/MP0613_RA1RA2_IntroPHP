<?php

class P28_LeapYear
{
    public function main(): void
    {
        // Write your code here

        echo "Give a year: ";
        $year = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ((int)$year % 4 == 0 && ((int)$year % 100 != 0 || (int)$year % 400 == 0)) {
            echo "The year is a leap year.";
        } else {
            echo "The year is not a leap year.";
        }
    }
}
