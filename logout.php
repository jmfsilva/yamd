<?php
$preTitle = "Logout";
include './parts/header.php';
session_destroy();
header("Location: /yamd");
include './parts/footer.php';
?>
