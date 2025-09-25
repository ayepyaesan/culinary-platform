<?php include "header.php"; ?>
<?php $cookie_accepted = isset($_COOKIE['cookie_consent']); ?> 

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
    <a href="#join" class="btn btn-warning hero-btn">Join Our Community</a>
  </div>
</section>
<!-- End HERO SECTION -->

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
