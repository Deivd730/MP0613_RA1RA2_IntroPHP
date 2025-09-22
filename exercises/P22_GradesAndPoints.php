<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here

        // echo"Give points[0-100]:\n";        

       echo "Give points\n";

        $point = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($point < 0) {
            echo "impossible!\n";
        } elseif ($point <= 49) {
            echo "failed\n";
        } elseif ($point <= 59) {
            echo "1\n";
        } elseif ($point <= 69) {
            echo "2\n";
        } elseif ($point <= 79) {
            echo "3\n";
        } elseif ($point <= 89) {
            echo "4\n";
        } elseif ($point <= 100) {
            echo "5\n";
        } else {
            echo "incredible!\n";
        }
    }
}
