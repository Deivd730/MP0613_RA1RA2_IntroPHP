<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
        echo "Enter the first string:";        
        $fstring = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string:";        
        $sstring = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if(strcmp($fstring, $sstring) === 0){
            echo"Same";
        }else{
            echo"Different";
        }


       
    }
}
