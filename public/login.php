
<?php
require_once "../config/db.php";



session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate credentials
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        // Generate a token
        $token = bin2hex(random_bytes(32));
    
        // Store token in session
        $_SESSION['user_id'] = $user['id'];
        
        $_SESSION['token'] = $token;

        // Redirect to dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
// Close the database connection
$pdo = null;





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/imges/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php "Car Rental |" . 'Sign in' ?></title>
</head>

<body>

    <?php include '../includes/header.php' ?>

    <main>
        <section class="login-section">
            <div class="loginUser">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Login">
                </form>
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <p>&copy; Rent a Car Managment. All rights reserved.</p>
    </footer>
<?php  include '../includes/footer.php' ?>
    <script src="main.js"></script>
</body>

</html>