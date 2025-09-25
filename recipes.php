<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipes Collection</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .card-img-top {
        height: 350px; /* Fixed height */
        object-fit: cover; /* Maintain aspect ratio and cover the area */
    }
</style>
<body>

<!-- Header / Hero Section -->
<div class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-5 fw-bold">Our Recipes Collection</h1>
    <p class="lead">Browse delicious recipes shared by our community</p>
    <a href="sharerecipe.php" class="btn btn-warning btn-lg mt-3">Share Your Recipe</a>
  </div>
</div>

<!-- Cuisine Filter Section -->
<div class="container text-center py-4">
  <h2 class="mb-3">What to <span class="text-warning">cook?</span></h2>
  <div class="d-flex flex-wrap justify-content-center gap-2">
    <button class="btn btn-outline-warning">Appetizers</button>
    <button class="btn btn-outline-warning">Soups</button>
    <button class="btn btn-outline-warning">Salads</button>
    <button class="btn btn-outline-warning">Main Dishes</button>
    <button class="btn btn-outline-warning">Side Dishes</button>
    <button class="btn btn-outline-warning">Breads</button>
    <button class="btn btn-outline-warning">Sauces</button>
    <button class="btn btn-outline-warning">Desserts</button>
    <button class="btn btn-outline-warning">Beverages</button>
  </div>
</div>


<!-- Recipes Grid -->
<div class="container py-5">
  <div class="row g-4">
    <!-- Example Recipe Card 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="cooking/images/recipes/tonkatsubowl.jpeg" class="card-img-top" alt="Recipe 1">
        <div class="card-body">
            <h5 class="card-title mb-0">Tonkatsu Bowl</h5>
            <div class="badge-group">
              <span class="badge bg-primary">Japanese</span>
              <span class="badge bg-success">Non-Vegetarian</span>
              <span class="badge bg-warning text-dark">Moderate</span>
            </div>
          <p class="card-text mt-2">
            Juicy salmon fillet grilled to perfection with lemon butter sauce. Ready in under 30 minutes.
          </p>
          <a href="#" class="btn btn-outline-warning">View Recipe</a>
        </div>
        
      </div>
    </div>

    <!-- Example Recipe Card 2 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="cooking/images/recipes/spaghetti.jpeg" class="card-img-top" alt="Recipe 2">
        <div class="card-body">
          <h5 class="card-title mb-0">Spaghetti Carbonara</h5>
          <div class="badge-group">
              <span class="badge bg-primary">Italian</span>
              <span class="badge bg-success">Non-Vegetarian</span>
              <span class="badge bg-warning text-dark">Moderate</span>
            </div>
          <p class="card-text mt-2">Classic Italian pasta with creamy sauce and crispy bacon.</p>
          <a href="#" class="btn btn-outline-warning">View Recipe</a>
        </div>
      </div>
    </div>

    <!-- Example Recipe Card 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="cooking/images/recipes/dumpling.jpeg" class="card-img-top" alt="Recipe 3">
        <div class="card-body">
          <h5 class="card-title mb-0">Pan-Fried Dumplings</h5>
          <div class="badge-group">
              <span class="badge bg-primary">Chinese</span>
              <span class="badge bg-success">Non-Vegetarian</span>
              <span class="badge bg-warning text-dark">Moderate</span>
            </div>
          <p class="card-text mt-2">Light, healthy salad with seasonal vegetables and dressing.</p>
          <a href="#" class="btn btn-outline-warning btn-sm">View Recipe</a>
        </div>
      </div>
    </div>

    <!-- Repeat more cards dynamically from your database if needed -->
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include "footer.php"; ?>