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
    <form method="POST" action="">
      <input type="hidden" name="action" value="submit">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
        </div>
        <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" value="submit">Send Message</button>
    </form>
  </div>

  <!-- devider -->
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