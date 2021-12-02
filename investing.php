<?php
require __DIR__ . '/inc/func.php';
$array = getinfo("Investing");
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
    <h1 class="Page-Heading">Investing</h1>
  </header>
  <!-- End of Header -->


<!-- Content --> 
      <div class="aboutme" id="investingpage">
        <img src="Assets/Hexagon-BG.svg" class="svg-hexagon">
      <div class="aboutmetext">
        <?php 
        echo '<img src="' . $lastestpost["Image"] . '" class="centerimage2">';
        echo "<div class='block'></div>";
        echo '<div class="investingpost">' . $lastestpost["Title"] . "</div>";
        echo "<p>" . $lastestpost["Summary"] . "</p>";
        ?>
        
      </div>
      
      </div>
        <div class="allposts">
        <div class="latestposts" style="" data-parallax="scroll" data-image-src="Assets/Investing/Section-3-BG.jpg"
        data-z-index="-100"></div>
          <?php 
          foreach ($results_array as $post) {
            echo '<div class="individual-post"><a href="' . $post["HREF"] . '"><img src="' . $post["Image"] . 
            '" class="investingimages"><div class="block4"></div><h1 class="posttitle2">' .
             $post["Title"] . '</h1></a><p class="caption2">' . $post["Summary"] . '</p><div class="psuedopadding"></div></div>'
            ;
                  }
          ?>
        </div>
  <!-- Footer -->
  <?php include('inc/footer.inc'); ?>
</html>