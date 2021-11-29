<?php 

// Details for logging in
$servername = "localhost";
$username = "madsquoa";
$password = "ForThe1MAn";
// Create new connection
$conn = mysqli_connect($servername, $username, $password, "madsquoa_cms");

// Check the connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    }

// Retrieving the data from the database
$sql = 'SELECT * FROM Articles';
// make a query and get results
$result = mysqli_query($conn, $sql);
// fetch resulting rows as an array
$bloginfo = mysqli_fetch_assoc($result);


$results_array = array();
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $results_array[] = $row;
}
// Free the result and close the connection
mysqli_free_result($result);
mysqli_close($conn);
foreach($results_array as $post) {
    if ($post["id"] == $_GET["id"])
        // echo $post["title"];
        // echo $post["description"];
        // echo $post["image"];
        // echo $post["created-at"];
        // echo $post["content"];
        $storypost = $post;
    }


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Earendil Capital</title>
    <link rel="shortcut icon" href="Favicon/favicon.ico" />
    <link rel="icon" href="Assets/Favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.js-1.5.0/parallax.min.js"></script>
  </head>


<!-- Titlepage -->

<body style="background-color: #f9f9f9;">
  <!-- Header -->
  <header>

  <div class="navbarbg" data-parallax="scroll" data-image-src="Assets/Home-screen/Navbar-BG.png"
  data-z-index="-100"></div>
  <div class="nav2">
    
  <a href="index.php" class="headerlogotext"
          >Earendil Capital
      <img
        src="Assets/Favicon/android-chrome-192x192.png"
        alt="logo of website"
        class="logo"
    /></a>
        <ul class="menu">
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="aboutme.php">About Me</a></li>
          <li><a href="investing.php">Investing</a></li>
          <li><a href="blog.php">Blog</a></li>
          <div class="dropdown" style="float: right">
            <button class="dropbtn">&or;</button>

            <div class="dropdown-content" style="right: 0">
              <a href="mental-models.php">Mental Models</a>
              <a href="miscelaneous.php">Miscelaneous</a>
              <a href="philosophy.php">Philosophy</a>
              <a href="politics.php">Politics</a>
              <a href="book-reviews.php">Book Reveiws</a>
              <a href="economics.php">Economics</a>
            </div>
          </div>
        </ul>
        <input type="checkbox" id="active">
        <div class="containernavbar">
          <label for="active" class="menu-button">&#9776</label>
          <ul class="menu-mobile">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="investing.php">Investing</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="mental-models.php">Mental Models</a></li>
            <li><a href="miscelaneous.php">Miscelaneous</a></li>
            <li><a href="philosophy.php">Philosophy</a></li>
            <li><a href="politics.php">Politics</a></li>
            <li><a href="book-reviews.php">Book Reveiws</a></li>
            <li><a href="economics.php">Economics</a></li>
            
          </ul>
        </div>
    </div>
      </div>

<!-- End of Header -->
<!-- Content -->
<p style="text-align: center;font-weight: 600;font-size: 4vmin;margin-top: 5%;">

<?php
 echo $storypost["Title"]
?>

</p>
<p style="text-align: center;font-weight: 400;font-size: 2vmin;margin-top: 0%;">
<?php
 echo $storypost["Summary"]
?>
</p>
      <div class="aboutme">
      <p class="aboutmetext">
        <?php
 echo "<img src='" . $storypost["Image"] . "'class='centerimage2'>"
?>
        <?php
 echo $storypost["HREF"]
?>
      </p>  
      </div>
  <!-- Footer -->

  <div class="footer">
    <div class="footer-content"></div>
    <form action="blogsearch.html">
      <input
        type="text"
        id="blogposts"
        placeholder="Search Topics..."
        style="padding: 6px; margin-top: 8px; border: none"
        class="round"
      />
      <input type="submit" id="submit" class="corner" />
    </form>
    <div class="footer-container">
      <div class="footer-subscribe-contact"><div>Contact Me</div>
        <button class="moreinfo2">Email</button>
      </div>
      <div class="footer-subscribe-contact"><div>Stay Updated</div>
        <button class="moreinfo2">Subscribe</button>
      </div>
    </div>
    <div class="footer-bottom">Back to top</div>
  </div>
</html>
