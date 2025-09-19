<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        
        // echo"Give points[0-100]:\n";        
        
        $point = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // echo"$point";

        if((int)$point>100){
            echo"Grade: incredible!\n";
        } else if((int)$point <= 90 && (int)$point >= 100){
            echo"Grade: 5\n";

        } else if((int)$point <= 80 && (int)$point >= 89){
            echo"Grade: 4\n";

        } else if((int)$point <= 70 && (int)$point >= 79){
            echo"Grade: 3\n";

        } else if((int)$point <= 60 && (int)$point >= 69){
            echo"Grade: 2\n";

        } else if((int)$point <= 50 && (int)$point >= 59){
            echo"Grade: 1\n";

        } else if((int)$point <= 0 && (int)$point >= 49){
            echo"Grade: failed\n";

        } else if((int)$point < 0){
            echo"Grade: impossible!\n";
            
        }

        // if((int)$point > 100){
        //     echo"Grade: incredible!";
            
        // } else if((int)$point <= 90 && (int)$point >= 100){
        //     echo"Grade: 5";

        // }
        
    }
}
