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

  <!-- Image Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <!-- Crucial Information Block -->
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-phone fa-3x mb-3"></i>
            <h5>Contact</h5>
            <p>(07) 863-6363<br>
            waihimotors@outlook.com
            </p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
            <h5>Location</h5>
            <p>School Lane, Waihi</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-clock fa-3x mb-3"></i>
            <h5>Hours</h5>
            <p>Mon-Fri: 9am - 6pm</p>
        </div>
        </div>
    </div>

  <!-- Card Section -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">WOF</h5>
            <p class="card-text">info to come</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Service and Maintaince</h5>
            <p class="card-text">info to come</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Repairs</h5>
            <p class="card-text">info to come</p>
          </div>
        </div>
      </div>
        <div class="container mt-4">
          <a href="services.php" class="btn btn-primary">All Services</a>
        </div>
    </div>
  </div>

   <!-- photo reviews -->
   <div class="container mt-4">
   <h2 class="text-center mb-4">Customer Reviews</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
          <p class="card-text">They are very great and nice people and are very fast, passed my expectations by a mile i appreciate them every much on what they did and so quickly, definitely gonna go there again</p>
          <h6 class="card-subtitle text-muted">Brandon Carseldine</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
          <p class="card-text">Awesome people to deal with. Very professional, very helpful. Cost was cheaper than expected based on price gathering from multiple companies. A real 10/10 experience.</p>
          <h6 class="card-subtitle text-muted">Charles Taylor</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
          <p class="card-text">Me on a personal level, they are really good people, others have choice. I have been always helped when needed, gratefully appreciate this Garage. Workers are trained by by great boss.</p>
          <h6 class="card-subtitle text-muted">Rita Dawn Rehutai</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="divider">
    <span>★</span>
  </div>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p>&copy; 2024 Waihi Motors. Designed and Developed by Josh Mcginty.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <?php include 'includes/dependencies.php' ?>

</body>
</html>
