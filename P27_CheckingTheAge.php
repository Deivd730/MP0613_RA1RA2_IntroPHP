<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        // Write your code here
        echo"How old are you?";
        $age = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if((int)$age >= 0 && (int)$age <= 120 ){
            echo"Ok";
        }else{

            echo"Impossible!";
        }
       
    }
}
