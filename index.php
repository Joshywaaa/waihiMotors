<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Essential Massage</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <?php include 'includes/nav.php' ?>
  
  <div class="jumbotron text-center hero-section position-relative">
    <img src="images/hotTowel.jpg" alt="Hero Image" class="img-fluid w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover; z-index: -1;">
    <h1 class="display-4">Welcome to Your Website</h1>
    <p class="lead">This is a simple hero section for catching your visitor's attention.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>


    <!-- Crucial Information Block -->
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-phone fa-3x mb-3"></i>
            <h5>Contact</h5>
            <p>(07) 863-6363<br>
              essentialmassagewithjo@gmail.com</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
            <h5>Location</h5>
            <p>30 Main Road Katikati, Shop 11 Cherry Court, Katikati, Katikati, Bay of Plenty, 3129</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-clock fa-3x mb-3"></i>
            <h5>Hours</h5>
            <p>
              Tuesday 11:00am - 5:00pm<br>
              Wednesday 11:00am - 5:00pm<br>
              Thursday 11:00am - 5:00pm<br>
              Friday 11:00am - 4:00pm<br>

              </p>
        </div>
        </div>
    </div>

  <!-- Card Section -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="images/hotTowel.jpg" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Essential Massage Services</h5>
            <p class="card-text">info to come</p>
            <button class="btn btn-purchase">Learn More</button>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Essential Sports Therapeutic Massage</h5>
            <p class="card-text">info to come</p>
            <button class="btn btn-purchase">Learn More</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Gift Vouchers</h5>
            <p class="card-text">info to come</p>
            <button class="btn btn-purchase">Learn More</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<!-- Wavy Line Divider -->
<div class="wavy-divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#dab4ff" fill-opacity="1" d="M0,160L40,170.7C80,181,160,203,240,186.7C320,171,400,117,480,90.7C560,64,640,64,720,96C800,128,880,192,960,208C1040,224,1120,192,1200,176C1280,160,1360,160,1400,160L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</div>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p>&copy; 2024 Essential Massage. Designed and Developed by Josh Mcginty.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <?php include 'includes/dependencies.php' ?>

</body>
</html>
