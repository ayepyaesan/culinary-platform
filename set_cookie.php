<?php
// Set cookie for 1 year
setcookie("cookie_consent", "true", time() + (60 * 60), "/");
http_response_code(200); // Let JS know it worked
?>