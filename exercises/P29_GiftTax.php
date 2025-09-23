<?php

class P29_GiftTax
{
    public function main(): void
    {
        // Write your code here
         echo "Value of the gift?\n";

        $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($value < 5000) {
            echo "No tax!\n";
        } elseif ($value <= 24999) {
            $tax = 100 + ($value - 5000) * 0.08;
            echo "Tax: " . (int)$tax . "\n";
        } elseif ($value <= 54999) {
            $tax = 1700 + ($value - 25000) * 0.10;
            echo "Tax: " . (int)$tax . "\n";
        } elseif ($value <= 199999) {
            $tax = 4700 + ($value - 55000) * 0.12;
            echo "Tax: " . (int)$tax . "\n";
        } elseif ($value <= 999999) {
            $tax = 22100 + ($value - 200000) * 0.15;
            echo "Tax: " . (int)$tax . "\n";
        } else {
            $tax = 142100 + ($value - 1000000) * 0.17;
            echo "Tax: " . (int)$tax . "\n";
        }
       
    }
}
