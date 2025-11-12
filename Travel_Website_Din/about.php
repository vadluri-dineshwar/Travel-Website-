<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - TravelSite</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="style.css">
    <style>
        h3 {
            background-color: #0ef;
            font-family: 'Arial Italic', italic;
        }


  .id {
    background-image: url("images/beach.jpg"); /* Your transparent image */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 40px;
    border-radius: 10px;
  }


    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">TravelSite</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      <li class="nav-item"><a class="nav-link" href="destinations.php">Destinations</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
<div>
<!-- About Section -->
<div class="container mt-5">
  <h2 class="text-center mb-4">About Us</h2>
  <div class="row">
    <div class="col-md-6">
      <p>Welcome to <strong>TravelSite</strong>! We are passionate about making your travel dreams come true. Whether it’s a relaxing beach vacation, an adventurous mountain trek, or exploring cultural landmarks, we provide the best travel experiences for you.</p>
      <p>Our mission is to make travel simple, affordable, and memorable. We help you plan every step of your journey so that you can focus on creating amazing memories.</p>
    </div>
    <div class="col-md-6">
      <img id="bg"src="images/travel.jpg" class="img-fluid rounded" alt="Travel">
    </div>
  </div>
</div>
  <hr class="my-5">

  <h3 class="text-center mb-4">Why Choose Us?</h3>
  <div class="row text-center">
    <div class="col-md-3 mb-3">
      <h5>Personalized Plans</h5>
      <p>Tailor-made itineraries just for you.</p>
    </div>
    <div class="col-md-3 mb-3">
      <h5>Affordable Packages</h5>
      <p>Get the best value for your money.</p>
    </div>
    <div class="col-md-3 mb-3">
      <h5>Expert Guidance</h5>
      <p>Travel tips and support from professionals.</p>
    </div>
    <div class="col-md-3 mb-3">
      <h5>24/7 Assistance</h5>
      <p>We’re here for you anytime, anywhere.</p>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>