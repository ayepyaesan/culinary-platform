<?php include "header.php"; ?>
<?php include "config.php"; ?>
<?php $cookie_accepted = isset($_COOKIE['cookie_consent']); ?> 
<?php
session_start();
?>

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
  <style>
/* Hero Section Styling */
    .hero {
      position: relative;
      background-image: url('cooking/images/background.jpeg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh; /* full viewport height */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      padding: 20px;
    }

    .hero-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .hero-text {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    .hero-btn {
      font-size: 1.1rem;
      padding: 0.75rem 1.5rem;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .hero-btn:hover {
      background-color: #FFC106;
      transform: translateY(-3px);
    }
/*modal pupup*/

button {
  padding: 12px 24px;
  background-color: #4CAF50;
  color: white;
  border: none;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0; top: 0;
  width: 100%; height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 30px;
  border-radius: 10px;
  width: 90%;
  max-width: 500px;
  position: relative;
  box-shadow: 0 0 15px rgba(0,0,0,0.2);
}

.close {
  position: absolute;
  right: 15px;
  top: 10px;
  font-size: 24px;
  cursor: pointer;
  color: #888;
}

form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

input {
  padding: 10px;
  font-size: 14px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

input:focus {
  border-color: #4CAF50;
  outline: none;
}

.error {
  background: #ffe6e6;
  color: #b30000;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 15px;
  text-align: left;
}

.success {
  background: #e6ffe6;
  color: #007700;
  padding: 15px;
  border-radius: 5px;
  margin-bottom: 20px;
  max-width: 400px;
  margin: 20px auto;
}

    /* Cookie banner */
  .cookie-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #252525;
    color: #fff;
    padding: 20px;
    text-align: center;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

  .cookie-banner p {
  margin: 0;
  flex: 1;
}

  .cookie-banner a {
  color: #4fc3f7;
  text-decoration: underline;
}

  .cookie-banner button {
  background-color: #FFCA2B;
  color: white;
  padding: 10px 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 20px;
}

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2rem;
      }
      .hero-text {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
 
<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-content">
    <h1 class="hero-title">FoodFusion – Where Home Cooking Meets Creativity</h1>
    <p class="hero-text">
      Our mission is to empower home cooks and food enthusiasts to discover, create, and share 
      recipes, tips and trends that inspire everyday culinary creativity.
    </p>
   <button class="btn btn-warning hero-btn" data-bs-toggle="modal" data-bs-target="#Registermodal">Join Our Community</button>
  </div>
</section>
<!-- End HERO SECTION -->
<!-- Event Carousel -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">Upcoming Cooking Events</h2>
      <p class="text-muted mb-0">Beautifully crafted services designed to make every moment special.</p>
    </div>

    <!-- Carousel -->
    <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
      <?php  $result = mysqli_query($conn, "SELECT event_name,title,description,event_type,location,start_datetime, end_datetime FROM events ORDER BY start_datetime");?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <!-- Service 1 -->
     <div class="carousel-item active">
          <div class="card shadow-lg border-0">
            <div class="row g-0 align-items-stretch">
              <div class="col-md-5">
                <img src="images/event.webp" 
                     class="img-fluid rounded-start service-img" 
                     alt="Cooking events">
              </div>
              <div class="col-md-7 d-flex">
                <div class="card-body d-flex flex-column justify-content-center">
                 
                  <h2 class="card-title"><?php echo htmlspecialchars($row['event_name'])?></h2>
                  <h4><?php echo htmlspecialchars($row['title'])?></h4>
                  <p class="card-text"><?php echo htmlspecialchars($row['description'])?></p>
                  <ul class="text-muted">
                    <li><strong>Event Type:</strong><?php echo htmlspecialchars($row['event_type'])?></li>
                    <li><strong>Location:</strong><?php echo htmlspecialchars($row['location'])?></li>
                    <li><strong>Start Date/Time:</strong> <?php echo htmlspecialchars($row['start_datetime'])?></li>
                    <li><strong>End Date/Time:</strong> <?php echo htmlspecialchars($row['end_datetime'])?></li>
                  </ul>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- End Event Carousel -->

<!-- Cookies Consent Banner -->
 <?php if (!$cookie_accepted): ?> 
    <!-- Cookie Consent Banner --> 
    <div class="cookie-banner" id="cookie-banner">  
      <p>  
        We use cookies to improve your browsing experience, personalize content, and analyze our traffic.  
        <a href="cookie-policy.php" target="_blank">Learn More</a>  
      </p>  
      <button onclick="acceptCookies()">Accept</button>  
    </div> 
  <?php endif; ?> 

<script>
  function acceptCookies() {
  fetch('set_cookie.php')
    .then(response => {
      if (response.ok) {
        document.getElementById('cookie-banner').style.display = 'none';
      }
    });
}
</script> 
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include "footer.php"; ?>
