<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        $number = trim(string: fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        // echo"$number";
        $mult = $number * -1;

        if((int)$number < 0){
            echo "$mult\n";
        } else {
            echo"$number\n";
        }



       
    }
}
