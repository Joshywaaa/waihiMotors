<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Waihi Motors</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <?php include 'includes/nav.php' ?>

  <!-- Services Section -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Our Services</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card text-center p-4 border-0 shadow-sm">
        <i class="fas fa-cog fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Service One</h5>
        <p class="card-text">description</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card text-center p-4 border-0 shadow-sm">
        <i class="fas fa-wrench fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Service Two</h5>
        <p class="card-text">description</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card text-center p-4 border-0 shadow-sm">
        <i class="fas fa-car fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Service Three</h5>
        <p class="card-text">description</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card text-center p-4 border-0 shadow-sm">
        <i class="fas fa-cog fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Service Four</h5>
        <p class="card-text">description</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card text-center p-4 border-0 shadow-sm">
        <i class="fas fa-wrench fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Service Five</h5>
        <p class="card-text">description</p>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card text-center p-4 border-0 shadow-sm">
        <i class="fas fa-car fa-3x mb-3 text-primary"></i>
        <h5 class="card-title">Service Six</h5>
        <p class="card-text">description</p>
      </div>
    </div>
  </div>
</div>


<!-- Wavy Line Divider -->
<div class="wavy-divider">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#209D50" fill-opacity="1" d="M0,160L40,170.7C80,181,160,203,240,186.7C320,171,400,117,480,90.7C560,64,640,64,720,96C800,128,880,192,960,208C1040,224,1120,192,1200,176C1280,160,1360,160,1400,160L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</div>
<!-- Footer -->
    <footer class="text-center mt-4">
    <p>&copy; 2024 Waihi Motors. Designed and Developed by Josh Mcginty.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
    <?php include 'includes/dependencies.php' ?>
</body>
</html>