<?php
    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['pseudo']);
   header("location: index.php");
  }