<?php
session_start();

unset($_SESSION['name']);
unset($_SESSION['shopping_cart']);

session_destroy();
header("Location: homepage.php" );

?>
