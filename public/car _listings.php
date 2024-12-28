<?php ?>
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
        <section class="car-listing">
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="blog-img">
                    <a href="">
                        <img src="../assets/imges/car-list-1.jpg" class="img-fluid" alt="Toyota">
                    </a>
                    <div class="card-body">
                        <h3><a href="listing-details.html">Ferrari 458 MM Special</a></h3>
                        <h6>Category : <span>Ferrarai</span></h6>
                        <h6>$160<span>/ Day</span></h6>
                        <a href="listing-details.html" class="Rentbtn"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <?php include '../includes/footer.php' ?>
</body>

</html>