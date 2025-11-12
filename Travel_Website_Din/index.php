<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Website</title>
    <link rel="stylesheet" 

  <link rel="stylesheet" href="style.css">
  


</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Wel come to our Travel Web-Site</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="destinations.php">Destinations</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
   <?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">TravelSite</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home Section</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="container mt-4">
  <h1 class="text-center mb-4">Plan Your Journey With Us 🌍</h1>
<div class="container my-5">
  <h2 class="text-center">Why Travel With Us?</h2>
  <p class="text-center">We help you discover India’s most beautiful destinations — from spiritual retreats to beach escapes. Explore, book, and experience unforgettable journeys.</p>
</div>

<div class="container my-5">
  <h2 class="text-center mb-4">Top Destinations</h2>
  <div class="row">
    <!-- kerala -->
    <div class="col-md-4">
      <div class="card">
        <img src="images/kerala.jpg" class="card-img-top" alt="Kerala">
        <div class="card-body">
          <h5 class="card-title">Kerala</h5>
          <p class="card-text">Where backwaters whisper and nature sings </p>
        </div>
      </div>
      </div>
      <!-- hyderabad -->
      <div class="col-md-4 ">
        <div class="card">
        <img src="images/hyderabad.jpg" class="card-img-top" alt="hyderabad">
        <div class="card-body">
          <h5 class="card-title">Hyderabad</h5>
          <p class="card-text">Pearls, biryani, and the pulse of tech dreams</p>
        </div>
      </div>
    </div>
<!-- Andhra Pradesh -->
      <div class="col-md-4 ">
        <div class="card">
        <img src="images/tirupati.jpg" class="card-img-top" alt="Titupati">
        <div class="card-body">
          <h5 class="card-title">Tirupati ,Andhra Pradesh</h5>
          <p class="card-text">Steps of devotion leading to divine heights </p>
        </div>
      </div>
    </div>

    <!-- tamil nadu -->
      <div class="col-md-4 ">
        <div class="card">
        <img src="images/arunachalam.jpg" class="card-img-top" alt="Arunachalam">
        <div class="card-body">
          <h5 class="card-title">Arunachalam</h5>
          <p class="card-text">Sacred silence beneath the shadow of Arunachala.</p>
        </div>
      </div>
    </div>

    <!-- goa -->
      <div class="col-md-4 ">
        <div class="card">
        <img src="images/goa.jpg" class="card-img-top" alt="Goa">
        <div class="card-body">
          <h5 class="card-title">Goa</h5>
          <p class="card-text">Sun-kissed shores and soulful freedom</p>
        </div>
      </div>
    </div>

    <!-- warangal -->
      <div class="col-md-4 ">
        <div class="card">
        <img src="images/warangal.jpg" class="card-img-top" alt="Warangal">
        <div class="card-body">
          <h5 class="card-title">Warangal</h5>
          <p class="card-text">Echoes of Kakatiya glory carved in stone</p>
        </div>
      </div>
    </div>

    <!-- Repeat for Goa, Tirupati, etc. -->
  </div>
</div>
<div class="text-center my-5">
  <a href="contact.php" class="btn btn-primary btn-lg">Book Your Trip Now</a>
</div>
</body>
</html>
</head>
<body>
    <footer class="bg-dark text-white text-center py-3">
  <p>&copy; 2025 TravelSite. Designed by Vadluri.</p>
</footer>
</body>
</html>