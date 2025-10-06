<?php

class P39_Counting
{
    public function main(): void
    {
        // Write your program here
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = 0; $i <= $number; $i++) {
            echo $i . "\n";
        }
    }
}
