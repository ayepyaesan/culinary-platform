<?php include "config.php"; ?>
<?php include "login_process.php"; ?>
<?php $cookie_accepted = isset($_COOKIE['cookie_consent']); ?>
<?php
session_start();
$errors = [];
$firstName = $lastName = $email = $password = '';
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  // Validation
  if ($firstname === '')
    $errors[] = "First name is required.";
  if ($lastname === '')
    $errors[] = "Last name is required.";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = "Invalid email address.";
  if (strlen($password) < 6)
    $errors[] = "Password must be at least 6 characters.";

  if (empty($errors)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn, "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $success = true;
    $firstName = $lastName = $email = $password = '';

    // Set cookie to remember signup
    setcookie('register', '1', time() + 3600 * 3, "/"); // 3 mins 
  }
}
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
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 30px;
      border-radius: 10px;
      width: 90%;
      max-width: 500px;
      position: relative;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
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
  </style>
</head>

<body>

  <!-- Modal -->
  <div id="Registermodal" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!--&times; is an HTML entity that displays as a multiplication sign (×) in the browser.-->
        <span class="close" id="closeModal" data-bs-dismiss="modal">&times;</span>
        <h2>Join Our Culinary Community</h2>

        <?php if (!empty($errors)): ?>
          <div class="error">
            <?php foreach ($errors as $error): ?>
              <p>⚠️ <?= htmlspecialchars($error) ?></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <form method="POST" action="">
          <label>First Name</label>
          <input type="text" name="firstname" value="<?= htmlspecialchars($firstName) ?>" required>

          <label>Last Name</label>
          <input type="text" name="lastname" value="<?= htmlspecialchars($lastName) ?>" required>

          <label>Email</label>
          <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required>

          <label>Password</label>
          <input type="password" name="password" required>

          <button type="submit" class="btn btn-warning">Register</button>
        </form>
        <p class="mt-3 text-center">
          Already registered?
          <a href="#" id="openLoginModal">Login here</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div id="loginmodal" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <span class="close" id="closeLoginModal" data-bs-dismiss="modal">&times;</span>
        <h2>Login to FoodFusion</h2>
        <form method="POST" action="login_process.php">
          <label>Email</label>
          <input type="email" name="email" required>
          <label>Password</label>
          <input type="password" name="password" required>
          <button type="submit" class="btn btn-warning">Login</button>
        </form>
        <?php if (isset($_GET['login_error']) && $_GET['login_error']): ?>
          <p style="color:red;"><?= htmlspecialchars($_GET['login_error']) ?></p>
        <?php endif; ?>
        <p class="mt-3 text-center">
          Don't have an account?
          <a href="#" id="backToRegister">Register here</a>
        </p>
      </div>
    </div>
  </div>

  <script>
    // Modal logic for switching between Register and Login modals
    document.addEventListener("DOMContentLoaded", function () {
      var registerModal = document.getElementById("Registermodal");
      var loginModal = document.getElementById("loginmodal");
      var openLogin = document.getElementById("openLoginModal");
      var closeLogin = document.getElementById("closeLoginModal");
      var backToRegister = document.getElementById("backToRegister");
      var closeRegister = document.getElementById("closeModal");

      // Auto-open login modal if login_error is present
      if (window.location.search.indexOf('login_error=') !== -1) {
        loginModal.style.display = "block";
        registerModal.style.display = "none";
      }

      if (openLogin) {
        openLogin.onclick = function(e) {
          e.preventDefault();
          registerModal.style.display = "none";
          loginModal.style.display = "block";
        };
      }
      if (closeLogin) {
        closeLogin.onclick = function() {
          loginModal.style.display = "none";
        };
      }
      if (backToRegister) {
        backToRegister.onclick = function(e) {
          e.preventDefault();
          loginModal.style.display = "none";
          registerModal.style.display = "block";
        };
      }
      if (closeRegister) {
        closeRegister.onclick = function() {
          registerModal.style.display = "none";
        };
      }
      window.onclick = function(event) {
        if (event.target === registerModal) {
          registerModal.style.display = "none";
        }
        if (event.target === loginModal) {
          loginModal.style.display = "none";
        }
      };
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>