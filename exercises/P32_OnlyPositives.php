<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here

        for (;;) {
            echo "Give a number:\n";
            $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($number === 0) {
                break;
            }

            if ($number < 0) {
                echo "Unsuitable number\n";
            } else {
                echo ($number * $number) . "\n";
            }
        }
    }
}
