

<?php
require_once "../config/db.php"; // Include database connection
require_once "../classes/classUser.php"; // Include User class
require_once "../classes/classClient.php"; // Include Client class

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve POST data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirm_password"]);
    $address = trim($_POST["Adresse"]);
    $phone = trim($_POST["phone"]);

    // Error handling
    $errors = [];

    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($address) || empty($phone)) {
        $errors[] = "All fields are required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        try {
            // Instantiate Client object
            $client = new Client($pdo);
            

            // Register the client
            $clientId = $client->registerClient($email, $password, 'user', $address, $phone, $name);
            
            // Redirect to login page on success
            header("Location: login.php?success=1");
            exit();
        } catch (PDOException $e) {
            echo 'appppaaaaa';
            $errors[] = "An error occurred while creating your account: " . $e->getMessage();
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="srcs/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo "Car Rental |" . 'Sign up' ?></title>
</head>

<body>
     <?php include '../includes/header.php'?>
    <main>
        <section class="signup-section">
            <div class="signupUser">
                <h2>Sign Up</h2>
                <form action="register.php" method="POST">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div>
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                    <div>
                        <label for="password">Adresse:</label>
                        <input type="text" id="Adresse" name="Adresse" required>
                    </div>
                    <div>
                        <label for="password">Phone N°:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <button type="submit" value="Sign up">Register</button>
                    <div>
                    <p>have an account? <a href="login.php">Login</a></p>
        </section>
    </main>
    <?php include '../includes/footer.php' ?>
    <script src="main.js"></script>
</body>

</html>