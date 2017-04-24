<?php require_once '../../../core/init.php';

if (!isset($_SESSION['user'])) {
  header("location:../index.php");
}
?>

Ini halaman profile <?php echo $_SESSION['user']; ?>
<a href="../../../../index.php">home</a>
<a href="../logout.php">logout</a>
