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
  <?php include includes/nav.php ?>

  <!-- Hero Section -->
  <div class="jumbotron text-center">
    <h1 class="display-4">Welcome to Your Website</h1>
    <p class="lead">This is a simple hero section for catching your visitor's attention.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>

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

 <!-- Meet the Team Section -->
 <div class="container mt-5">
    <h2 class="text-center mb-4">Meet the Team</h2>
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Team Member 1">
        <h5>Team Member 1</h5>
        <p>Brief message or role description for team member 1.</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Team Member 2">
        <h5>Team Member 2</h5>
        <p>Brief message or role description for team member 2.</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Team Member 3">
        <h5>Team Member 3</h5>
        <p>Brief message or role description for team member 3.</p>
      </div>
    </div>
  </div>

  <!-- Reviews Section -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Customer Reviews</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">"This is the best service I’ve ever used. Highly recommend to everyone!"</p>
          <h6 class="card-subtitle text-muted">- John Doe</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">"A wonderful experience from start to finish. Will definitely be back!"</p>
          <h6 class="card-subtitle text-muted">- Jane Smith</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <p class="card-text">"Excellent quality and fantastic customer service. Five stars!"</p>
          <h6 class="card-subtitle text-muted">- Alice Johnson</h6>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Crucial Information Block -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Crucial Information</h2>
    <div class="row">
      <div class="col-md-4 text-center">
        <i class="fas fa-phone fa-3x mb-3"></i>
        <h5>Phone</h5>
        <p>+1 (555) 123-4567</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
        <h5>Location</h5>
        <p>123 Business Street, City, Country</p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fas fa-clock fa-3x mb-3"></i>
        <h5>Hours</h5>
        <p>Mon-Fri: 9am - 6pm</p>
      </div>
    </div>
  </div>

  <!-- Contact Form Example -->
  <div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Your Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputMessage">Message</label>
        <textarea class="form-control" id="inputMessage" rows="4" placeholder="Your Message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
  <!-- Card Section -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Card Title 1</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Card Title 2</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Card Title 3</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Stylish Divider -->
  <div class="divider">
    <span>★</span>
  </div>
  <!-- Footer -->
  <footer class="text-center mt-4">
    <p>&copy; 2024 Waihi Motors. Designed and Developed by Josh Mcginty.</p>
  </footer>
  
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- FontAwesome for icons (optional) -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
