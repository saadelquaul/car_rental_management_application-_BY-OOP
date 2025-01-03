<?php 
require_once "../config/db.php"; 
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
   
}


require_once '../classes/classCar.php';

// $car = new Car();

$cars = Car::getAllCars($pdo);

// Check if there are no cars available 
if (empty($cars)) {
    echo '<p>No cars available</p>';
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/imges/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php "Car Rental |" . 'Car Listings' ?></title>
</head>

<body>
    <?php include '../includes/header.php' ?>

    <main class="car-listing-main">
   
        
        <section class="filter-section">
            <div class="filter">
                <h2>Filter Cars</h2>
                <form>
                    <div class="form-group">
                        <label for="carType">Car Type</label>
                        <select id="carType" class="form-control">
                            <option value="">All</option>
                            <option value="SUV">SUV</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Coupe">Coupe</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select id="brand" class="form-control">
                            <option value="">All</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Ferrari">Ferrari</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="BMW">BMW</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priceRange">Price Range</label>
                        <select id="priceRange" class="form-control">
                            <option value="">All</option>
                            <option value="0-50">$0 - $50</option>
                            <option value="50-100">$50 - $100</option>
                            <option value="100-150">$100 - $150</option>
                            <option value="150-200">$150 - $200</option>
                            <option value="200+">$200+</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary">Filter</button>
                </form>
            </div>
        </section>
        <div style="width: 100%;">
            <?php if ($_SESSION['role'] === 'admin') {
                echo ' <div><button type="button" class="addCarBtn" id="addCarBtn">Add Car</button></div>';
           }
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $registrationNumber = $_POST['registrationNumber'];
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $year = $_POST['year'];
                $price = $_POST['price'];
                $errors = [];

                if (empty($registrationNumber) || empty($brand) || empty($model) || empty($year) || empty($price)) {
                    $errors[] = "All fields are required.";
                }

                if (!is_numeric($year) || $year < 1886 || $year > date("Y")) {
                    $errors[] = "Invalid year.";
                }

                if (!is_numeric($price) || $price < 0) {
                    $errors[] = "Invalid price.";
                }

                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        echo "<p>$error</p>";
                    }
                    exit();
                }
                $carP = new Car($registrationNumber, $brand, $model, $year, $price);
                Car::addCarToDatabase($pdo, $carP);
                

                header('Location: car_listings.php');
                
            }

        
            ?>
             <div class="addCar" >
                    <form method="post" action="car_listings.php" id="addCar">
                        <?php if (isset($error)): ?>
                            <p style="color: red;"><?php echo $error; ?></p>
                        <?php endif; ?>
                        <h2>Add a New Car</h2>
                        <input type="text" id="registrationNumber" name="registrationNumber" placeholder="Registration Number">
                        <input type="text" id="brand" name="brand" placeholder="Brand">
                        <input type="text" id="model" name="model" placeholder="Model">
                        <input type="text" id="year" name="year" placeholder="Year">
                        <input type="text" id="price" name="price" placeholder="Price">
                        <button type="submit" >  Add Car</button>

                    </form>
                </div>
       
        <section class="car-listing">

        <?php foreach ($cars as $car) { ?>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="<?php echo $car['brand']; ?>">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.php?id=<?php echo $car['registration_number']; ?>"><?php echo $car['model']; ?></a></h3>
                        <h6>Brand : <span><?php echo $car['brand']; ?></span></h6>
                        <h6>$<?php echo $car['price']; ?><span>/ Day</span></h6>
                        <a href="listing-details.php?id=<?php echo $car['registration_number']; ?>" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>

            
         



 


        </section>
        </div>

    </main>


    <?php include '../includes/footer.php' ?>
    <script src="../assets/js/script.js"></script>
</body>

</html>