<?php
// Ensure session available for tests and web
if (session_status() === PHP_SESSION_NONE) {
    @session_start();
}

class P49_SetLanguagePreference
{
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void
    {
        $requested = $_GET['lang'] ?? null;

        // If requested language is missing or not allowed, default to 'en'
        $lang = 'en';
        if ($requested && in_array($requested, $this->allowedLanguages, true)) {
            $lang = $requested;
        }

        $_SESSION['lang'] = $lang;
        echo "Language set to {$lang}";
    }
}
