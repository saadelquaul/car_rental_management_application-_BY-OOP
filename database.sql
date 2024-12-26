

CREATE TABLE clients (
    client_number INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    phone_number VARCHAR(15) NOT NULL
);

-- Create the Cars table
CREATE TABLE cars (
    registration_number VARCHAR(10) PRIMARY KEY,
    brand VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year YEAR NOT NULL
);

-- Create the RentalContracts table
CREATE TABLE rental_contracts (
    contract_number INT AUTO_INCREMENT PRIMARY KEY,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    duration INT NOT NULL,
    client_number INT NOT NULL,
    registration_number VARCHAR(10) NOT NULL,
    FOREIGN KEY (client_number) REFERENCES clients(client_number) ON DELETE CASCADE,
    FOREIGN KEY (registration_number) REFERENCES cars(registration_number) ON DELETE CASCADE
);

-- Create the Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    role ENUM('admin', 'manager', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
