<?php 
include "header.php"; 
include "config.php";
session_start();
if (isset($_SESSION['user_id'])) {
   $user_id= $_SESSION['user_id'];
} 

$upload_success = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $topic = trim($_POST['topic']);
    $description= trim($_POST['description']);
    $content= trim($_POST['content']);
    $type_id= 2;
   
    if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] === 0) {

        /*
        $_FILES['uploaded_file'] = [
        'name' => 'myphoto.jpg',
        'type' => 'image/jpeg',
        'tmp_name' => '/tmp/phpXYZ.tmp',
        'error' => 0,
        'size' => 123456];      */
        
        $file_name = $_FILES['uploaded_file']['name'];
        $file_type = $_FILES['uploaded_file']['type'];
        $file_size = $_FILES['uploaded_file']['size'];
        $file_tmp = $_FILES['uploaded_file']['tmp_name']; //temporary filename where the file is stored on the server before you move it.

        // Check if file actually exists
        if (!file_exists($file_tmp)) {
            $error = "Temporary file not found.";
        } else {
            $file_data = file_get_contents($file_tmp);

            if ($file_data === false) {
                $error = "Failed to read uploaded file.";
            } else {
                // Validate file type
                $allowed_types = ['image/jpeg', 'image/png', 'application/pdf', 'text/plain', 'application/doc', 'video/mp4' , 'video/quicktime'];

                if (!in_array($file_type, $allowed_types)) {
                    $error = "Only jpg, png, pdf, doc, mp4, mov and txt files are allowed.";
                } elseif ($file_size > 100 * 1024 * 1024) {
                    $error = "File size must be under 100MB.";
                } else {
                    $stmt = mysqli_prepare($conn, "INSERT INTO resources (user_id,type_id,topic,description,content,file_name, file_type, file_size, file_data) VALUES (?,?,?,?,?,?, ?, ?, ?)");

                    if ($stmt) {

                        mysqli_stmt_bind_param($stmt, "iisssssis",$user_id,$type_id,$topic,$description,$content, $file_name, $file_type, $file_size, $file_data);
                        mysqli_stmt_send_long_data($stmt, 3, $file_data);

                        if (mysqli_stmt_execute($stmt)) {
                            $upload_success = "File uploaded successfully!";
                        } else {
                            $error = "Failed to upload file. DB Error: " . mysqli_stmt_error($stmt);
                        }

                        mysqli_stmt_close($stmt);
                    } else {
                        $error = "Database prepare failed: " . mysqli_error($conn);
                    }
                }
            }
        }
    } else {
        $error = "Please select a valid file.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Share Your Resources</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container py-5">
  <h1 class="mb-4 text-center">Share Your Educational Resource</h1>
  <?php if ($upload_success): ?>
        <p class="success"><?= htmlspecialchars($upload_success) ?></p>
        <?php elseif ($error): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
  <?php endif; ?>
  <form action="createeresource.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <!-- Topic -->
    <div class="mb-3">
      <label for="topic" class="form-label">Recipe Topic</label>
      <input type="text" class="form-control" id="topic" name="topic" placeholder="Enter your recipe title" required>
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
      <label for="uploaded_file" class="form-label">Upload Recipe File (optional)</label>
      <input class="form-control" type="file" id="uploaded_file" name="uploaded_file" accept=".pdf,.doc,.docx,.jpg,.png,.mp4,.mov">
      <div class="form-text">You can upload PDF, DOC, video or image files.</div>
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
