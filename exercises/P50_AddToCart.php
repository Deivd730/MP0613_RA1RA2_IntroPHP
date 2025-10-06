<?php
session_start();

class P50_AddToCart
{
    public function main(): void
    {
        // Write your code here
        $item = $_GET['item'] ?? null;

        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if ($item) {
            $_SESSION['cart'][] = $item;
        }

        echo implode(',', $_SESSION['cart']);
    }
}
