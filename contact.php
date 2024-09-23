<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Waihi Motors</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <?php include 'includes/nav.php' ?>

  <!-- Contact Form Example -->
  <div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="firstName" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputName"> / </label>
          <input type="text" class="form-control" id="lastName" placeholder="Last Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputName">Phone</label>
          <input type="text" class="form-control" id="phone" placeholder="Your Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="eimail" placeholder="Your Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputName">Registration (Plate) Number</label>
          <input type="text" class="form-control" id="inputName" placeholder="Your Name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputMessage">Message</label>
        <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="text-center mt-4">
    <p>&copy; 2024 Your Business. All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <?php include 'includes/dependencies.php' ?>

</body>
</html>
<?php 


?>