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
  <?php include 'includes/nav.php';
  include 'includes/server.php'; ?>

  <div class="container mt-5 mb-5 contact-section">
  <div class="contact-info col-md-5">
    <h3>Contact Us</h3>
    <p>essentialmassagewithjo@gmail.com</p>
    <p>(027) 566-0066</p>
    <p>30 Main Road Katikati</p>
    <p>Shop 11 Cherry Court</p>
    <p>Katikati, Bay of Plenty, 3129</p>
    <a href="https://www.facebook.com/essentialmassagewithjo" target="_blank" class="btn-facebook mt-3">Facebook</a>
  </div>
  <div class="contact-form col-md-7">
    <form method="POST">
      <input type="hidden" name="action" value="submit">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName">First Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="form-group col-md-6">
          <label for="lastName">Last Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message <span class="text-danger">*</span></label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
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
$email = "";
$message = "";
// Process form submission
if ($action == "submit") {
    try {
        // Insert form data into the database
        $query = "INSERT INTO queries (first_name, last_name, email, message) VALUES (:first_name, :last_name, :email, :message)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':first_name', $_POST['firstName']);
        $stmt->bindParam(':last_name', $_POST['lastName']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':message', $_POST['message']);
        $stmt->execute();

    } catch (PDOException $exception) { // Handle errors
        echo '<div class="alert error">';
        echo '<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>';
        echo 'Error: ' . $exception->getMessage();
        echo '</div>';
    }
}

?>
