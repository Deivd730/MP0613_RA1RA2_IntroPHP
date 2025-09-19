<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo"Give the first number:";

        // Get input from the user
        $firstnumber = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Prompt the user for input
        echo"Give the second number:";
        
        // Get input from the user
        $secondnumber = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if((int)$firstnumber > (int)$secondnumber ){
            echo"Greater number is: $firstnumber";
        } else if((int)$firstnumber < (int)$secondnumber){
            echo"Greater number is: $secondnumber";
        } else{
            echo"The numbers are equal!";
        }




    }
}
