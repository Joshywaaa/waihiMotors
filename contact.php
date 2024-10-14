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

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f4f6ff;
      color: #333;
    }
    .container {
      max-width: 900px;
    }
    .contact-info {
      font-size: 1.1rem;
    }
    .form-group label {
      font-weight: bold;
    }
    .btn-primary {
      background-color: #333;
      border-color: #333;
    }
    .btn-primary:hover {
      background-color: #555;
      border-color: #555;
    }
    .btn-facebook {
      background-color: #333;
      border-color: #333;
      color: white;
    }
    .btn-facebook:hover {
      background-color: #555;
      border-color: #555;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <?php include 'includes/nav.php'; ?>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-5 contact-info">
        <h3>Contact us.</h3>
        <p>essentialmassagewithjo@gmail.com</p>
        <p>(027) 566-0066</p>
        <p>30 Main Road Katikati</p>
        <p>Shop 11 Cherry Court</p>
        <p>Katikati, Bay of Plenty, 3129</p>
        <a href="#" class="btn btn-facebook mt-3">Facebook</a>
      </div>
      <div class="col-md-7">
        <form method="POST" action="">
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
