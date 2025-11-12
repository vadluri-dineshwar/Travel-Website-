<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Destinations - TravelSite</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <body>
   <style> 
   h2 {
        background-color: #0ef;
        font-family: italic;
        color: darkblue ;
    }
    p{
        background-color: lightgreen;
        color: black;
        font-family: cursive;


    }
    .carousel-item img {
    max-width: 80%;     /* Shrinks image width */
    height: auto;       /* Keeps aspect ratio */
    margin: 0 auto;     /* Centers the image horizontally */
    display: block;

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

<div class="container mt-5">
  <h2 class="text-center mb-4">Explore Popular Destinations</h2>

  <!-- Bootstrap Image Slider -->
<div id="destinationCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Hyderabad -->
    <div class="carousel-item active">
      <img src="images/hyderabad.jpg" class="d-block w-100 rounded" alt="Hyderabad">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hyderabad, Telangana</h5>
        <p>Tech-savvy city blending history and innovation.</p>
      </div>
    </div>

    <!-- Goa -->
    <div class="carousel-item">
      <img src="images/goa.jpg" class="d-block w-100 rounded" alt="Goa">
      <div class="carousel-caption d-none d-md-block">
        <h5>Goa, India</h5>
        <p>Vibrant coastal paradise with beaches, nightlife, and Portuguese charm.</p>
      </div>
    </div>

    <!-- Warangal -->
    <div class="carousel-item">
      <img src="images/warangal.jpg" class="d-block w-100 rounded" alt="Warangal">
      <div class="carousel-caption d-none d-md-block">
        <h5>Thousand Pillar Temple, Warangal</h5>
        <p>Modern city with royal heritage.</p>
      </div>
    </div>

    <!-- Arunachalam -->
    <div class="carousel-item">
      <img src="images/arunachalam.jpg" class="d-block w-100 rounded" alt="Arunachalam">
      <div class="carousel-caption d-none d-md-block">
        <h5>Arunachalam, Tamil Nadu</h5>
        <p>Peaceful town revered for its spiritual energy and ancient temple.</p>
      </div>
    </div>

    <!-- Tirupati -->
    <div class="carousel-item">
      <img src="images/tirupati.jpg" class="d-block w-100 rounded" alt="Tirupati">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tirupati, Andhra Pradesh</h5>
        <p>Spiritual haven known for divine devotion and sacred hills.</p>
      </div>
    </div>

    <!-- Kerala -->
    <div class="carousel-item">
      <img src="images/kerala.jpg" class="d-block w-100 rounded" alt="Kerala">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kerala, India</h5>
        <p>God's Own Country — where backwaters, spice hills, and traditions flow in harmony.</p>
      </div>
    </div>
  </div>

  <!-- Arrow Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#destinationCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#destinationCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>