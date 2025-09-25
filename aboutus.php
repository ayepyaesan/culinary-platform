<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FoodFusion</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet">
  
</head>
<body>
<!-- Hero / Introduction Section -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6">
        <h1 class="display-4 fw-bold mb-3">About FoodFusion</h1>
        <p class="lead mb-4">
          We’re a vibrant culinary platform dedicated to celebrating home cooking, creativity, and community. Our goal is to inspire food lovers to discover, share, and reinvent recipes that bring people together.
        </p>
        <a href="#join" class="btn btn-primary btn-lg">Join Our Community</a>
      </div>
      <!-- Optional Image -->
      <div class="col-md-6 text-center">
        <img src="cooking/images/aboutusintro.jpeg" alt="Cooking together" class="img-fluid rounded-3 shadow">
      </div>
    </div>
  </div>
</section>
<!-- End Hero / Introduction Section -->

 <!-- Our Culinary Philosophy Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Optional Image -->
      <div class="col-lg-6 text-center">
        <img src="cooking/images/ourphilisophy.webp" alt="Fresh ingredients on a table" class="img-fluid rounded-3 shadow">
      </div>
      <!-- Text Content -->
      <div class="col-lg-6 mb-4 mb-lg-0 mt-3">
        <h2 class="fw-bold mb-3">Our Culinary Philosophy</h2>
        <p class="lead">
          We believe cooking at home is more than just preparing meals — it’s an act of creativity, care and connection. 
          Our platform celebrates the joy of discovering new flavors, reviving traditional recipes and sharing kitchen wisdom with a welcoming community. 
          By combining fresh ingredients, mindful techniques and a passion for learning, we inspire everyday cooks to turn simple dishes into memorable experiences.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- End Our Culinary Philosophy Section -->

<!-- Our Values Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Our Values</h2>
    <div class="row text-center">
      
      <!-- Card 1 -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="cooking/images/authenticity.webp" class="card-img-top" alt="Authenticity">
          <div class="card-body">
            <h5 class="card-title fw-bold">Authenticity</h5>
            <p class="card-text">
              Honoring the rich traditions and stories behind every recipe.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="cooking/images/community.webp" class="card-img-top" alt="Community">
          <div class="card-body">
            <h5 class="card-title fw-bold">Community</h5>
            <p class="card-text">
              Creating a supportive space where food lovers exchange ideas and inspiration.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="cooking/images/creativity.webp" class="card-img-top" alt="Creativity">
          <div class="card-body">
            <h5 class="card-title fw-bold">Creativity</h5>
            <p class="card-text">
              Encouraging experimentation to bring fresh twists to beloved dishes.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="cooking/images/sustainability.jpg" class="card-img-top" alt="Sustainability">
          <div class="card-body">
            <h5 class="card-title fw-bold">Sustainability</h5>
            <p class="card-text">
              Promoting mindful sourcing, minimal waste and respect for the planet.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- End Our Values Section -->

<!-- Meet the Team Section -->
<section class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Meet the Team</h2>

    <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Team Member 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center text-center">
            <div class="col-md-6">
              <img src="cooking/images/janedoe.jpg" class="rounded-circle mb-3" alt="Team Member 1" style="width:150px; height:150px; object-fit:cover;">
              <h5 class="fw-bold">Jane Doe</h5>
              <p class="text-muted">Founder & Head Chef</p>
              <p>
                Passionate about blending traditional flavors with modern twists, Jane brings over 10 years of culinary expertise to the platform.
              </p>
            </div>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center text-center">
            <div class="col-md-6">
              <img src="cooking/images/johnsmith.jpg" class="rounded-circle mb-3" alt="Team Member 2" style="width:150px; height:150px; object-fit:cover;">
              <h5 class="fw-bold">John Smith</h5>
              <p class="text-muted">Community Manager</p>
              <p>
                John ensures our food enthusiasts stay connected, inspired and supported in our growing community.
              </p>
            </div>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center text-center">
            <div class="col-md-6">
              <img src="cooking/images/emilybrown.jpg" class="rounded-circle mb-3" alt="Team Member 3" style="width:150px; height:150px; object-fit:cover;">
              <h5 class="fw-bold">Emily Brown</h5>
              <p class="text-muted">Recipe Curator</p>
              <p>
                Emily curates and tests recipes to ensure only the most delicious, reliable creations reach our community.
              </p>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>
<!-- End Meet the Team Section -->

<!-- Our Journey Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Text Column -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold mb-3">Our Journey</h2>
        <p class="lead">
          FoodFusion began with a simple idea: to inspire home cooks everywhere to rediscover the joy of cooking. 
          Starting as a small recipe-sharing blog in 2020, we’ve grown into a thriving culinary community.
        </p>
        <p>
          Over the years we’ve reached major milestones — launching our community cookbook, hosting live online classes, and partnering with local farmers to highlight sustainable ingredients. 
          Every step reflects our passion for authentic flavors, creativity, and bringing people together through food.
        </p>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 text-center">
        <img src="cooking/images/foodblog.jpg" alt="Our Journey" class="img-fluid rounded-3 shadow">
      </div>

    </div>
  </div>
</section>
<!-- End Our Journey Section -->

 <!-- Timeline Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Our Milestones</h2>
    <div class="row">
      <div class="col-md-6 mb-4">
        <h5 class="fw-bold">📍 2020 – The Beginning</h5>
        <p>Started as a small recipe blog connecting friends and family.</p>
      </div>
      <div class="col-md-6 mb-4">
        <h5 class="fw-bold">📍 2021 – Growing Community</h5>
        <p>Launched our interactive platform and welcomed thousands of new members.</p>
      </div>
      <div class="col-md-6 mb-4">
        <h5 class="fw-bold">📍 2022 – Community Cookbook</h5>
        <p>Published our first community cookbook featuring members’ recipes.</p>
      </div>
      <div class="col-md-6 mb-4">
        <h5 class="fw-bold">📍 2023 – Live Classes & Partnerships</h5>
        <p>Hosted live online classes and partnered with local farmers for fresh, sustainable ingredients.</p>
      </div>
    </div>
  </div>
</section>
<!-- End Timeline Section -->
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include "footer.php"; ?>
