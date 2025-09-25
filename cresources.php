<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Culinary Resources</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
.herosection{
    background: url('cooking/images/cresourcebg.jpg') center center/cover no-repeat;
}
</style>
<body>

<!-- Hero Section -->
<div class="herosection bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-5 text-white fw-bold">Culinary Resources</h1>
    <p class="lead text-white">Download recipe cards, read tutorials & learn from videos shared by our community</p>
    <a href="createcresource.php" class="btn btn-warning btn-lg mt-3">Share Your Resource</a>
  </div>
</div>

<!-- Recipe Cards Section -->
<div class="container py-5">
  <h2 class="mb-4 text-center">Recipe Cards</h2>
  <div class="row g-4">
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/card1.jpg" class="card-img-top" alt="Recipe Card 1">
        <div class="card-body">
          <h5 class="card-title">Chocolate Chip Cookies</h5>
          <p class="card-text">Download a printable recipe card for classic chocolate chip cookies.</p>
          <a href="downloads/choco-cookies.pdf" class="btn btn-outline-warning btn-sm" download>Download Card</a>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/card2.jpg" class="card-img-top" alt="Recipe Card 2">
        <div class="card-body">
          <h5 class="card-title">Homemade Pizza</h5>
          <p class="card-text">Printable recipe card for making delicious homemade pizza.</p>
          <a href="downloads/pizza-card.pdf" class="btn btn-outline-warning btn-sm" download>Download Card</a>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/card3.jpg" class="card-img-top" alt="Recipe Card 3">
        <div class="card-body">
          <h5 class="card-title">Fresh Salad</h5>
          <p class="card-text">Printable recipe card for a quick and healthy fresh salad.</p>
          <a href="downloads/salad-card.pdf" class="btn btn-outline-warning btn-sm" download>Download Card</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Cooking Tutorials Section -->
<div class="container py-5">
  <h2 class="mb-4 text-center">Cooking Tutorials</h2>
  <div class="row g-4">
    <!-- Tutorial Card 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/tutorial1.jpg" class="card-img-top" alt="Tutorial 1">
        <div class="card-body">
          <h5 class="card-title">Perfect Pasta Tutorial</h5>
          <p class="card-text">Step-by-step written tutorial on making perfect pasta from scratch.</p>
          <a href="tutorials/pasta.html" class="btn btn-outline-warning btn-sm" target="_blank">View Tutorial</a>
        </div>
      </div>
    </div>
    <!-- Tutorial Card 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/tutorial2.jpg" class="card-img-top" alt="Tutorial 2">
        <div class="card-body">
          <h5 class="card-title">Baking Bread at Home</h5>
          <p class="card-text">Learn to bake artisan bread at home with this detailed guide.</p>
          <a href="tutorials/bread.html" class="btn btn-outline-warning btn-sm" target="_blank">View Tutorial</a>
        </div>
      </div>
    </div>
    <!-- Tutorial Card 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/tutorial3.jpg" class="card-img-top" alt="Tutorial 3">
        <div class="card-body">
          <h5 class="card-title">Cake Decorating Basics</h5>
          <p class="card-text">Improve your cake decorating skills with this tutorial.</p>
          <a href="tutorials/cake.html" class="btn btn-outline-warning btn-sm" target="_blank">View Tutorial</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Instructional Videos Section -->
<div class="container py-5">
  <h2 class="mb-4 text-center">Instructional Videos</h2>
  <div class="row g-4">
    <!-- Video Card 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/video1.jpg" class="card-img-top" alt="Video 1">
        <div class="card-body">
          <h5 class="card-title">Knife Skills Video</h5>
          <p class="card-text">Watch and download this video to learn essential knife skills.</p>
          <a href="videos/knife-skills.mp4" class="btn btn-outline-warning btn-sm" download>Download Video</a>
        </div>
      </div>
    </div>
    <!-- Video Card 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/video2.jpg" class="card-img-top" alt="Video 2">
        <div class="card-body">
          <h5 class="card-title">Grilling Secrets</h5>
          <p class="card-text">Download this grilling tutorial video and up your BBQ game.</p>
          <a href="videos/grilling.mp4" class="btn btn-outline-warning btn-sm" download>Download Video</a>
        </div>
      </div>
    </div>
    <!-- Video Card 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="images/video3.jpg" class="card-img-top" alt="Video 3">
        <div class="card-body">
          <h5 class="card-title">Making Sushi Rolls</h5>
          <p class="card-text">Download and watch this instructional video on sushi rolling.</p>
          <a href="videos/sushi-rolls.mp4" class="btn btn-outline-warning btn-sm" download>Download Video</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include "footer.php"; ?>