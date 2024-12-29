<?php
require_once "../config/db.php"; // Include database connection
class Car {
    private $registrationNumber;
    private $brand;
    private $model;
    private $year;
    private $price;

    public function __construct($registrationNumber, $brand, $model, $year, $price = null) {
        $this->registrationNumber = $registrationNumber;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }
    public static function getAllCars($pdo) {
        $stmt = $pdo->query("SELECT * FROM cars");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRegistrationNumber() {
        return $this->registrationNumber;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setRegistrationNumber($registrationNumber) {
        $this->registrationNumber = $registrationNumber;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public static function deleteCarFromDatabase($pdo, $registrationNumber) {
        $stmt = $pdo->prepare("DELETE FROM cars WHERE registration_number = :registrationNumber");
        $stmt->bindParam(':registrationNumber', $registrationNumber);
        return $stmt->execute();
    }

    public static function editCarInDatabase($pdo, $registrationNumber, $newBrand, $newModel, $newYear, $newPrice) {
        $stmt = $pdo->prepare("UPDATE cars SET brand = :brand, model = :model, year = :year, price = :price WHERE registration_number = :registrationNumber");
        $stmt->bindParam(':brand', $newBrand);
        $stmt->bindParam(':model', $newModel);
        $stmt->bindParam(':year', $newYear);
        $stmt->bindParam(':price', $newPrice);
        $stmt->bindParam(':registrationNumber', $registrationNumber);
        return $stmt->execute();
    }
    public static function addCarToDatabase($pdo, $car) {

        $stmt = $pdo->prepare("INSERT INTO cars (registration_number, brand, model, year, price) VALUES (?, ?, ?, ?, ?)");

        $stmt->execute([

            $car->registrationNumber,

            $car->brand,

            $car->model,

            $car->year,

            $car->price

        ]);

    }
    }

?>