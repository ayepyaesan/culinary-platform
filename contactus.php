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
  <!-- <link href="css/main.css" rel="stylesheet"> -->
  <style>

  </style>
</head>
<body>
<!-- Contact Us Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <p class="text-center mb-5">Reach out to us with inquiries, recipe requests, or feedback. We’d love to hear from you!</p>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Your User ID</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your ID" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your name" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="subject" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="subject" placeholder="Enter your email" required>
          </div>

           <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter your Subject" required>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Write your message here..." required></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-warning px-5">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include "footer.php"; ?>
