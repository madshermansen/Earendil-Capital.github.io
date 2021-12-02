<?php
require __DIR__ . '/inc/func.php';
$array = getinfo("ALL");
$lastestpost = $array["lp"];
$results_array = $array["ra"];
?>

<!DOCTYPE html>
<html lang="en">
<?php include('inc/head.inc') ?>

<!-- Titlepage -->

<body>
  <!-- Header -->
  <header>
  <div class="navbarbg" data-parallax="scroll" data-image-src="Assets/Home-screen/Navbar-BG.png"
  data-z-index="-100"></div>
  <?php include('inc/nav.inc') ?>
    <h1 class="Page-Heading">Blog</h1>
  </header>
  <!-- End of Header -->
  <?php include('inc/blog.inc') ?>
  
  <!-- Footer -->
  <?php include('inc/footer.inc'); ?>
</html>
