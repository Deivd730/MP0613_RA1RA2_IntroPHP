<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($number <= 100) {
            for ($i = $number; $i <= 100; $i++) {
                echo $i . "\n";
            }
        }
    }
}
