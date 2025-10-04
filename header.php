<?php include "modal_popup.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FoodFusion</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <!-- <link href="css/main.css" rel="stylesheet"> -->
  
</head>
<style>
  /* Extra centering and spacing */
.navbar-nav {
  margin: 0 auto; /* center nav links */
}
.navbar-brand {
  font-weight: bold;
  font-size: 1.8rem;
}
/* === NAV LINK HOVER ANIMATION === */
.navbar-nav .nav-link {
  position: relative;
  margin: 0 8px;
  font-weight: 500;
  color: #333;
  transition: color 0.3s ease;
}

/* underline animation */
.navbar-nav .nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  background-color: #FFC106; /* accent color */
  transition: width 0.3s ease;
}

.navbar-nav .nav-link:hover {
  color: #FFC106;
}

.navbar-nav .nav-link:hover::after {
  width: 100%;
}

/* active link */
.navbar-nav .nav-link.active {
  color: #FFC106;
  font-weight: 600;
}

/* === JOIN BUTTON ANIMATION === */
.join-btn {
  margin-left: 1rem;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.join-btn:hover {
  background-color: #FFC106;
  transform: translateY(-2px);
}

.join-btn:active {
  transform: translateY(0);
}


</style>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="#">FoodFusion</a>
    
    <!-- Toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav links + button -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="recipes.php">Recipe Collection</a></li>
        <li class="nav-item"><a class="nav-link" href="community.php">Community Cookbook</a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="cresources.php">Culinary Resources</a></li>
        <li class="nav-item"><a class="nav-link" href="eresources.php">Educational Resources</a></li>
      </ul>
      <button class="btn btn-warning join-btn" data-bs-toggle="modal" data-bs-target="#Registermodal">Join Us</button>
    </div>
  </div>
</nav>


<!-- End NAVBAR -->
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
