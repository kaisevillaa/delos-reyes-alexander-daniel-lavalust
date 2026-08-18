<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware {
    public function handle($next)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $allowed = isset($_SESSION['student_access_key'])
            && $_SESSION['student_access_key'] === 'xander-verified-2026';

        if ($allowed) {
            return $next();
        }

        $_SESSION['student_notice'] = 'Access denied: open Student Home first before viewing the profile.';

        $target = rtrim(BASE_URL, '/') . '/student';
        header('Location: ' . $target, true, 302);
        exit;
    }
}
