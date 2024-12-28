<?php

session_start();
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
                    <h1>Welcome to a Car Rental</h1>
                    <p>Our company offers a wide range of cars for rent, from economy to luxury models. We have a car for every budget and need. Our cars are well-maintained and reliable, so you can enjoy your trip without any worries. Book your car today and start exploring the world!</p>
                    <?php   if(isset($_SESSION['user_id'])){
                    echo '<a href="car_listings.php" class="btn">Rent Now!</a>';

                   } else {
                    echo '<a href="signup.php" class="btn">Rent Now!</a>';
                   }  ?>
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