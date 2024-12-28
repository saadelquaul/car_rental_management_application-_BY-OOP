<?php

class UserManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function createUser($email, $password, $role = 'user') {
        $stmt = $this->pdo->prepare('INSERT INTO users (email, password, role) VALUES (?, ?, ?)');
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->execute([$email, $hashedPassword, $role]);
    }

    public function findByEmail($email) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function updateUserRole($id, $role) {
        $stmt = $this->pdo->prepare('UPDATE users SET role = ? WHERE id = ?');
        $stmt->execute([$role, $id]);
    }
}
 ?>