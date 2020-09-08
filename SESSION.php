<?php
session_start();
?>


<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header('Location: http://127.0.0.1:8012/boostrapphpfin/ensaj/Login.php');
?>


