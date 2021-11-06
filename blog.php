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
    
    <a href="homepage.php" class="headerlogotext"
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
    <h1 class="Page-Heading">Blog</h1>

<!-- End of Header -->


<!-- Content -->
      <div class="aboutme" id="investingpage">
      <p class="aboutmetext" id="investingpage">My Latest Post
        <img src="Assets/Mental Models/brain blocked.png" class="centerimage2">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quam, minus itaque accusamus at eaque officia laboriosam dolore quis vero sit deleniti. In corrupti quod mollitia a consequuntur sit sed laboriosam harum asperiores, odit error maxime, blanditiis, laborum aliquid nobis quo veniam beatae. Sunt aliquam, ipsa quo minus necessitatibus consequatur.
      </p>  
      </div>
      <div class="posts">
        <div class="latestposts" id="blog" data-parallax="scroll" data-image-src="Assets/Blog/Section BG 2.jpg"
        data-z-index="-100"></div>
        <div class="allposts">
          <div class="individual-post">
            <img src="Assets/Mental Models/confirmation bias.jpg" class="blogimages">
            <h1 class="blogtitle">Warren Buffet - The Man </h1>
          </div>
          <div class="individual-post" >
            <img src="Assets/Mental Models/tantalus.jpg" class="blogimages2">
            <h1 class="blogtitle">Kraft Heinz - Zero to Hero?</h1>
          </div>
          <div class="individual-post" >
            <img src="Assets/Mental Models/contrast.jpg" class="blogimages">
            <h1 class="blogtitle">Tesla - Autonomous driving to the future</h1>
          </div>
          <div class="individual-post" >
            <img src="Assets/Mental Models/procrastination.jpg" class="blogimages2">
            <h1 class="blogtitle">When will the housing market finally crash?</h1>
          </div>
        </div>
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

</html>
