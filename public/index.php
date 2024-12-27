<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/imges/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo "Car Rental" ?></title>
    
</head>

<body>
 
    <?php include '../includes/header.php' ?>
    
    <main>
        <section>
            <div class="hero-section">
                <div class="info">
                    <h1>Welcome to a Car Rental Management</h1>
                    <p>Manage your Rentals Contracts Easly.</p> 
                    <a href="login.php" class="btn">Manage Now!</a>
                </div>
                <div>
                    <img src="../assets/imges/Hyundai_Tucson.png" alt="Hero image">
                </div>
            </div>
        </section>
    </main>
    
    <?php include '../includes/footer.php'?>
    <script src="main.js"></script>
</body>

</html>