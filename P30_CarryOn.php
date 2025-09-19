<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
        for($i = 1; $i == 2;){
            echo"Shall we carry on?";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if(strcmp($input,"no")==0){
                $i++;
                break;

            }


        }









    }
}
