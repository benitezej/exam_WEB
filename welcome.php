<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<h1>Привет, <?php echo $_SESSION['username']; ?></h1>
