<?php
require_once "classUser.php";


class Client extends User {
    public function __construct($pdo) {
        parent::__construct($pdo); // Call the parent constructor
    }

    // Example of a client-specific method
    public function getContracts() {
        $sql = "SELECT * FROM rental_contracts WHERE id_user = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $this->id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function registerClient($email, $password, $address, $phoneNumber, $nom) {
        $role = 'user'; 
        return $this->create($email, $password, $role, $address, $phoneNumber, $nom);
    }
}
?>