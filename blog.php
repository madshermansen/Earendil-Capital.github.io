<?php 

// Details for logging in
$servername = "localhost";
$username = "root";
$password = "";
// Create new connection
$conn = mysqli_connect($servername, $username, $password, "madsquoa_cms");

// Check the connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    }

// Retrieving the data from the database
$sql = 'SELECT * FROM `articles` ORDER BY `articles`.`id` ASC';
// make a query and get results
$result = mysqli_query($conn, $sql);
// fetch resulting rows as an array
$bloginfo = mysqli_fetch_assoc($result);


$results_array = array();
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  if (True) {
    $results_array[] = $row;
  }
}
$lastestpost = end($results_array);
// Free the result and close the connection
mysqli_free_result($result);
mysqli_close($conn);
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

  <?php include('inc/nav2.inc') ?>
    <h1 class="Page-Heading">Blog</h1>

<!-- End of Header -->
  <?php include('inc/blog.inc') ?>
  
  <!-- Footer -->
  <?php include('inc/footer.inc'); ?>
</html>
