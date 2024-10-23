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
  <?php 
    include 'includes/nav.php'; 
    include 'includes/server.php'; // Assuming this sets up the $conn variable
  ?>

 <!-- Services Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Essential Massage Treatments</h2>
    <div class="row d-flex align-items-stretch">
        <?php
        $sql = "SELECT `id`, `title`, `time_price`, `description`, `image` FROM `essentialServices`";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card text-center p-4 border-0 shadow-sm flex-fill">
                        <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="card-img-fixed mb-3">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <p class="time-price"> <?php echo htmlspecialchars($row['time_price']); ?></p>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                      </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>No services available at the moment.</p>";
        }
        ?>
    </div>
</div>

<!-- Sports Treatments Section -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Essential Sport Therapeutic Treatments</h2>
    <div class="row d-flex align-items-stretch">
        <?php
        $sql = "SELECT `id`, `title`, `time_price`, `description`, `image` FROM `sportServices`";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card text-center p-4 border-0 shadow-sm flex-fill">
                        <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="card-img-fixed mb-3">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <p class="time-price"> <?php echo htmlspecialchars($row['time_price']); ?></p>
                        <p class="card-text"><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>No services available at the moment.</p>";
        }
        // Close connection after all queries
        $conn->close();
        ?>
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
      <p>&copy; 2024 Essential Massage. Designed and Developed by Josh McGinty.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <?php include 'includes/dependencies.php'; ?>
</body>
</html>