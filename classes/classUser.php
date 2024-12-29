<?php
require_once "../config/db.php"; // Include database connection
class User {
    protected $id;
    protected $email;
    protected $password;
    protected $role;
    protected $createdAt;
    protected $updatedAt;
    protected $address;
    protected $phoneNumber;
    protected $nom;

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($email, $password, $role, $address, $phoneNumber , $nom ) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, password, role, adress, phone_number, nom) 
                VALUES (:email, :password, :role, :address, :phoneNumber, :nom)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->bindParam(':nom', $nom);
        $stmt->execute();
        $this->id = $this->pdo->lastInsertId();
        return $this->id;
    
    }

    public function read($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $this->id = $user['id'];
            $this->email = $user['email'];
            $this->password = $user['password'];
            $this->role = $user['role'];
            $this->address = $user['adress'];
            $this->phoneNumber = $user['phone_number'];
            $this->nom = $user['nom'];
            $this->createdAt = $user['created_at'];
            $this->updatedAt = $user['updated_at'];
        }

        return $user;
    }

    public function update($id, $email, $role, $address, $phoneNumber, $nom) {
        $sql = "UPDATE users 
                SET email = :email, role = :role, adress = :address, phone_number = :phoneNumber, nom = :nom, updated_at = NOW() 
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':role' => $role,
            ':address' => $address,
            ':phoneNumber' => $phoneNumber,
            ':nom' => $nom,
            ':id' => $id,
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
    }

}
?>
