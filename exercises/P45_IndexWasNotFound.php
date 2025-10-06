<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {

        // Write your code here
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        echo "Search for? ";
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for (;;) {
            $index = array_search($number, $array, true);
            if ($index === false) {
                echo "$number was not found.\n";
                echo "Search for? ";
                $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            } else {
                echo "$number is at index $index.\n";
                break;
            }
        }
    }
}
