<?php
require_once 'UserManager.php';

class Auth {
    public static function login($email, $password) {
        session_start();
        $user = UserManager::findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            return true;
        }
        return false;
    }

    public static function logout() {
        session_start();
        session_destroy();
    }

    public static function isAuthenticated() {
        session_start();
        return isset($_SESSION['user_id']);
    }
}
 ?>