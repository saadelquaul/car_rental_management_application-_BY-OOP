<header>
        <nav>
            <a href="index.html"><img src="../assets/imges/logo.png" alt="Rent a Car"></a>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if(isset($_SESSION['user_id'])){
                    echo '<li><a href="../public/car_listings.php">Cars listing</a></li>';
                   }?>
                    <?php if(isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin'){
                    echo '<li><a href="dashboard.php">Dashboard</a></li>';
                   }?>
                </ul>
                <div class="user">

                <?php if(!isset($_SESSION['user_id'])){
                    echo ' <a href="login.php"><i class="fa-solid fa-user login"></i>Login</a>
                    <a href="register.php"><i class="fa-solid fa-user-plus sign-up"></i>Sign up</a>';
                   }?>
                </div>
            </div>
        </nav>
    </header>