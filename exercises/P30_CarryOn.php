<?php

class P30_CarryOn
{
    public function main(): void
    {

        // Write your code here
        for (;;) {
            echo "Carry on?\n";
            $input = strtolower(trim(fgets($GLOBALS['STDIN'] ?? STDIN)));

            if ($input === "no") {
                break;
            }
        }
    }
}
