<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        // Default to not logged in
        $_SESSION['loggedin'] = $_SESSION['loggedin'] ?? false;

        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        // Validate input presence
        if (!$username || !$password) {
            $_SESSION['loggedin'] = false;
            echo "Invalid credentials";
            return;
        }

        // Check credentials
        if ($username === 'admin' && $password === 'secret') {
            $_SESSION['loggedin'] = true;
            echo "Welcome, {$username}";
            return;
        }

        // Any other credentials are invalid
        $_SESSION['loggedin'] = false;
        echo "Invalid credentials";
    }
}
