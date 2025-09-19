<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password?";
        $password = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if (strcmp($password, "Caput Draconis") === 0) {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
    }
}
