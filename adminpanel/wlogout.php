<?php
session_Start();
unset($_SESSION['userEmail']);
echo "<script>location.assign('signin.php')</script>";
?>