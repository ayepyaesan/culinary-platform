<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Share Your Recipe</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
  <h1 class="mb-4 text-center">Share Your Recipe</h1>

  <form action="upload.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <!-- Topic -->
    <div class="mb-3">
      <label for="title" class="form-label">Recipe Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter your recipe title" required>
      <div class="invalid-feedback">
        Please enter a topic.
      </div>
    </div>

    <!-- Description -->
    <div class="mb-3">
      <label for="description" class="form-label">Short Description</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write a short description..." required></textarea>
      <div class="invalid-feedback">
        Please enter a description.
      </div>
    </div>

    <!-- Content -->
    <div class="mb-3">
      <label for="content" class="form-label">Recipe Content</label>
      <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write the recipe steps here..." required></textarea>
      <div class="invalid-feedback">
        Please enter the recipe content.
      </div>
    </div>

    <!-- File Upload -->
    <div class="mb-3">
      <label for="file" class="form-label">Upload Recipe File (optional)</label>
      <input class="form-control" type="file" id="file" name="file" accept=".pdf,.doc,.docx,.jpg,.png">
      <div class="form-text">You can upload PDF, DOC, or image files.</div>
    </div>

     <!-- Category Dropdown -->
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" id="category">
        <option selected disabled>Select category</option>
        <option>Appetizer</option>
        <option>Main Course</option>
        <option>Dessert</option>
        <option>Snack</option>
        <option>Beverage</option>
      </select>
    </div>

    <!-- Cuisine Type Dropdown -->
    <div class="mb-3">
      <label for="cuisine" class="form-label">Cuisine Type</label>
      <select class="form-select" id="cuisine">
        <option selected disabled>Select cuisine</option>
        <option>Italian</option>
        <option>Japanese</option>
        <option>Chinese</option>
        <option>Indian</option>
        <option>Mexican</option>
        <option>French</option>
        <option>Burmese</option>
      </select>
    </div>

    <!-- Dietary Preferences Dropdown -->
    <div class="mb-3">
      <label for="dietary" class="form-label">Dietary Preference</label>
      <select class="form-select" id="dietary">
        <option selected disabled>Select preference</option>
        <option>Vegetarian</option>
        <option>Non-Vegetarian</option>
        <option>Sugar-Free</option>
        <option>Keto</option>
        <option>Halal</option>
        <option>High-Protein</option>
        <option>Allergen-Friendly</option>
        <option>None</option>
      </select>
    </div>

    <!-- Difficulty Level Dropdown -->
    <div class="mb-3">
      <label for="difficulty" class="form-label">Difficulty Level</label>
      <select class="form-select" id="difficulty">
        <option selected disabled>Select difficulty</option>
        <option>Very Easy</option>
        <option>Easy</option>
        <option>Moderate</option>
        <option>Hard</option>
        <option>Expert</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary w-100">Submit Recipe</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Bootstrap validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</body>
</html>

<?php include "footer.php"; ?>
