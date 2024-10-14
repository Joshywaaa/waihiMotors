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
<!-- Voucher Section -->
<div class="voucher-container">
  <div class="voucher-card">
    <div class="top-ribbon"></div>
    <h5>Essential 30min voucher</h5>
    <div class="price">$65</div>
    <p>30 Minute Essential Back Neck and Shoulder Massage</p>
    <button class="btn btn-purchase">Purchase</button>
  </div>

  <div class="voucher-card">
    <div class="top-ribbon"></div>
    <div class="popular-badge">Popular</div>
    <h5>Essential 60min voucher</h5>
    <div class="price">$95</div>
    <p>One Hour Essential Full Body Massage</p>
    <button class="btn btn-purchase">Purchase</button>
  </div>

  <div class="voucher-card">
    <div class="top-ribbon"></div>
    <h5>Essential 90min voucher</h5>
    <div class="price">$165</div>
    <p>Essential Bliss Massage - Therapeutic and Intuitive Massage for Ultimate Stress Management and Relaxation</p>
    <button class="btn btn-purchase">Purchase</button>
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
    <p>&copy; 2024 Essential Massage. Designed and Developed by Josh Mcginty.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
    <?php include 'includes/dependencies.php' ?>
</body>
</html>