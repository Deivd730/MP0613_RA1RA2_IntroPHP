<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        // Write your code here
        for (;;) {
            echo "Give a number:";
            $number = strtolower(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));

            if ((int)$number === 4) {
                break;
            }
        }
    }
}
