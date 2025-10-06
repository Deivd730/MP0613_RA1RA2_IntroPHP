<?php

class P43_Factorial
{
    public function main(): void
    {
        // Write your program here
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        echo "Factorial: $factorial";
    }
}
