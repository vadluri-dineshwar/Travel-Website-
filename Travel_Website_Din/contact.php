<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
  <!-- Script for not to select same destination -->
   <script>
  document.addEventListener("DOMContentLoaded", function () {
    const sourceInput = document.querySelector('input[name="source"]');
    const destinationInput = document.querySelector('input[name="destination"]');

    function checkMatch() {
      if (sourceInput.value.trim().toLowerCase() === destinationInput.value.trim().toLowerCase()) {
        alert("Source and Destination cannot be the same. Please choose a different location.");
        destinationInput.value = ""; // Clear destination
        destinationInput.focus();    // Focus for correction
      }
    }

    sourceInput.addEventListener("change", checkMatch);
    destinationInput.addEventListener("change", checkMatch);
  });
</script>


</head>
<body class="bg-light">
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
  <h2 class="text-center mb-4">Contact Us</h2>

  <form action="submit_enquiry.php" method="POST" class="p-4 shadow-sm bg-white rounded">
   
  <!-- Enquiry Form -->
  <form action="submit_enquiry.php" method="POST" class="border p-4 rounded bg-light shadow-sm">
    <div class="row mb-3">
      <div class="col-md-6">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label>Email</label>
        <input type="email" name="mail" class="form-control" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label>Source</label>
    <input list="source-options" name="source" id="source" class="form-control" required>
    
    <datalist id="source-options">
      <option value="Hyderabad">
      <option value="Goa">
      <option value="Warangal">
      <option value="Arunachalam">
      <option value="Tirupati">
      <option value="Kerala">
      <option value="Vizag">
      <option value="Ooty">
      <option value="Kanyakumari">
    </datalist>

      </div>
      <div class="col-md-6">
        <label for="destination">Destination</label>
        <input list="destination-options" name="destination" id="destination" class="form-control" required>

        <datalist id="destination-options">
          <option value="Hyderabad">
          <option value="Goa">
          <option value="Warangal">
      <option value="Arunachalam">
      <option value="Tirupati">
      <option value="Kerala">
      <option value="Vizag">
      <option value="Ooty">
      <option value="Kanyakumari">
    </datalist>

        
       
      </div>
    </div>

    <div class="mb-3">
      <label>Travel Date</label>
      <input type="date" name="travel_date" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Message</label>
      <textarea name="message" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary w-100">Submit Enquiry</button>
  </form>
</div>
</div>

</body>
</html>