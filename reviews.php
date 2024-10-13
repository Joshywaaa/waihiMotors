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
  <?php 
    include 'includes/nav.php';
    include 'includes/server.php'; 
  ?>
  
  <div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Review</h2>
    <div class="row">
      <!--left half -->
      <div class="col-md-6">
        <p>
          Please leave a review. your review will be displayed for other customers to view once it has been verified
        </p>
      </div>

      <!-- Form on the right half -->
      <div class="col-md-6">
        <form method="POST" action="">
          <input type="hidden" name="action" value="submit">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message <span class="text-danger">*</span></label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
<!-- reviews -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Customer Reviews</h2>
  <?php
    // Database query to fetch verified reviews
    $query = "SELECT `id`, `first_name`, `last_name`, `message`, `verified` FROM `reviews` WHERE `verified` = 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($reviews) {
        echo '<div class="container">';
        
        // Start row counter
        $counter = 0;
        echo '<div class="row">';
        
        // Loop through the reviews
        foreach ($reviews as $review) {
            // Open a new row after every 3 reviews
            if ($counter % 3 == 0 && $counter != 0) {
                echo '</div><div class="row">';
            }
            
            // Output the review card
            echo '<div class="col-md-4 mb-4">
                    <div class="card text-center p-4 border-0 shadow-sm">
                        <i class="fas fa-user fa-3x mb-3 text-primary"></i>
                        <p class="card-text">' . htmlspecialchars($review['message']) . '</p>          
                        <h6 class="card-subtitle text-muted"> '  . htmlspecialchars($review['first_name']) . ' ' . htmlspecialchars($review['last_name']) . '</h6>
                    </div>
                  </div>';
            
            // Increment the counter
            $counter++;
        }

        // Close the last row
        echo '</div>';
        echo '</div>';
    } else {
        // No reviews found
        echo '<p>No verified reviews found.</p>';
    }
  ?>
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
  <!-- form processing -->
<?php
$dsn = 'mysql:dbname=' . $dbname . ';host=' . $servername;

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Check if form is submitted
$action = isset($_POST['action']) ? $_POST['action'] : "";

// Initialize form fields
$firstName = "";
$lastName = "";
$message = "";
$verified = 0;

// Process form submission
if ($action == "submit") {
    try {
        // Insert form data into the database
        $query = "INSERT INTO reviews (first_name, last_name, message, verified) VALUES (:first_name, :last_name, :message, :verified)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':first_name', $_POST['firstName']);
        $stmt->bindParam(':last_name', $_POST['lastName']);
        $stmt->bindParam(':message', $_POST['message']);
        $stmt->bindParam(':verified', $verified);
        $stmt->execute();

        // Display success message
        echo '<div class="alert alert-success">';
        echo '<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
        echo '<strong>Success!</strong> Your message has been sent successfully.';
        echo '</div>';

    } catch (PDOException $exception) { // Handle errors
        echo '<div class="alert error">';
        echo '<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
        echo 'Error: ' . $exception->getMessage();
        echo '</div>';
    }
}

?>