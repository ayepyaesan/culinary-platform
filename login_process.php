<?php
include "config.php";
session_start(); // Start session at top

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST['email']);
    $password    = $_POST['password'];
    $sql = "SELECT user_id,firstname, password, failed_attempts, last_attempt_time FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 0) {
        $message = "User not found.";
    } else {
        mysqli_stmt_bind_result($stmt, $user_id,$firstname, $hashed_password, $failed_attempts, $last_attempt_time);
        mysqli_stmt_fetch($stmt);

        $now = time();
        $lock_duration = 180; // 3 minutes

        // lock the account
        if ($failed_attempts >= 3 && $last_attempt_time !== null) {
            $last_time = strtotime($last_attempt_time);
            $elapsed = $now - $last_time;

            if ($elapsed < $lock_duration) {
                $wait = $lock_duration - $elapsed;
                $message = "Account locked. Try again in $wait seconds.";
            } else {
                // Unlock account
                $sql = "UPDATE users SET failed_attempts = 0 WHERE user_id = $user_id";
                mysqli_query($conn, $sql);
                $failed_attempts = 0;
            }
        }

        //failed attempts doesn't exceed max time 3
        if ($failed_attempts < 3) {
            if (password_verify($password, $hashed_password)) {
                echo "Login successful!";
                // Set session variables
                // ✅ SUCCESS: store login session & redirect
                $_SESSION['user_id'] = $user_id;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['email'] = $email;
                $_SESSION['login_time'] = date("Y-m-d H:i:s");
                // Reset failed attempts
                $sql = "UPDATE users SET failed_attempts = 0, last_attempt_time = NULL WHERE user_id = $user_id";
                mysqli_query($conn, $sql);
                header("Location: index.php");
                exit;
            } else {
                $failed_attempts++;
                $now_str = date("Y-m-d H:i:s");
                $sql = "UPDATE users SET failed_attempts = $failed_attempts, last_attempt_time = '$now_str' WHERE user_id = $user_id";
                mysqli_query($conn, $sql);

                if ($failed_attempts >= 3) {
                    $message = "❌ Account locked. Try again in 3 minutes.";
                } else {
                    $remaining = 3 - $failed_attempts;
                    $message = "❌ Wrong password. $remaining attempt(s) left.";
                }
                // Redirect back to modal_popup.php with error message
                header("Location: modal_popup.php?login_error=" . urlencode($message));
                exit;
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}
?>

  
