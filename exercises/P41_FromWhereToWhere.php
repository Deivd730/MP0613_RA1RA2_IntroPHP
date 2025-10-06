<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
        $to = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $from = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($from <= $to) {
            for ($i = $from; $i <= $to; $i++) {
                echo $i . "\n";
            }
        }
    }
}
