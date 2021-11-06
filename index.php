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
$sql = 'SELECT * FROM Blog';
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
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>

 <!-- CSS loader-->
 <!-- <div class="loaderwrapper"><div class="loader"></div></div> -->


  <!-- Titlepage -->

  <body style="background-color: #f9f9f9">
    <header>
      <div class="Homepage-Background" data-parallax="scroll" data-image-src="Assets/Home-screen/HomescreenBackground.png"
      data-z-index="-100"></div>

      <div class="nav">
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
      <div class="frontpage-desktop">
        
        <a href="#"
          ><img
            src="Assets/Blog/Economics-of-Education.jpg"
            alt="book"
            class="frontpageimg"
        /></a>
        <div class="frontpagecontainer" >
          <button class="topic" id="topictag">Economics</button>
          <h2 class="topictitle">The Economics of Education</h2>
          <h6 class="description">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia,
            hic!</h6>
            <h6 class="readtime">July 15, 20 min to read...</h6>
        </div>
        <p class="frontpagedisc">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
          ratione perspiciatis praesentium quas vero animi. Repellendus ut,
          accusantium numquam architecto, quaerat, sed temporibus laboriosam
          ipsum ducimus commodi quam iure nemo mollitia explicabo rem eos
          voluptatum quae veniam minus magni error odio? Ab ratione similique
          minus quos sit eaque voluptatum voluptates?
        </p>
        <button style="border: none; color: #444; font-weight: 200;font-size: 1.5vmin; margin-left: 6%;">Read More &rarr;</button>
      </div>
      <div class="quote">
        Acquire worldly wisdom and adjust your behavior accordingly. If your new
        behavior gives you a little temporary unpopularity with your peer group
        then to hell with them
        <p id="quoteby">- Charles T. Munger</p>
      </div>
      
    </header>
  </body>

  <!-- About Me-->
  
  <div class="frontpage-mobile">
    <h2 class="topictitle">The Economics of Education</h2>
    <a href="#"
      ><img
        src="Assets/Blog/Economics-of-Education.jpg"
        alt="book"
        class="frontpageimg"
    /></a>
    <div class="frontpagecontainer" >
      <button class="topic">Economics</button>
      
      <h6 class="description">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia,
        hic!</h6>
        <h6 class="readtime">July 15, 20 min to read...</h6>
    </div>
    <p class="frontpagedisc">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
      ratione perspiciatis praesentium quas vero animi. Repellendus ut,
      accusantium numquam architecto, quaerat, sed temporibus laboriosam
      ipsum ducimus commodi quam iure nemo mollitia explicabo rem eos
      voluptatum quae veniam minus magni error odio? Ab ratione similique
      minus quos sit eaque voluptatum voluptates?
    </p>
    <button class="moreinfo" id="moreinfo-mobile" onclick="window.location.href='aboutme.html'">
      Read More
    </button>
    <button id="readmorefrontpage">Read More &rarr;</button>
  </div>
  <div class="info">
    <div class="infocontainers">
      <p class="infotitle">Investing</p>
      <p class="infotext">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam placeat
        libero repellendus, doloremque perferendis natus optio molestiae omnis
        officiis repellat deleniti recusandae iusto itaque id magnam blanditiis
        ipsum accusantium autem!
      </p>
      <button class="moreinfo" onclick="window.location.href='investing.html'">
        Investing
      </button>
    </div>
    <div class="infocontainers">
      <p class="infotitle">A Little About me</p>
      <p class="infotext">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero amet
        quaerat ad quis. Qui, consequuntur, ex ipsum tempora cumque blanditiis
        explicabo sint quam recusandae, maxime in dignissimos fugit rerum
        incidunt.
      </p>
      <button class="moreinfo" onclick="window.location.href='aboutme.html'">
        About Me
      </button>
    </div>
    <div class="infocontainers">
      <p class="infotitle">Mental Models</p>
      <p class="infotext">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
        iste eum accusamus sint repellat voluptatem, veritatis laborum aliquam
        aliquid quasi corporis totam excepturi maxime atque, in suscipit quos
        doloribus! Adipisci.
      </p>
      <button class="moreinfo" onclick="window.location.href='hi.html'">
        Mental Models
      </button>
    </div>
  </div>

  <!-- Lastest Posts -->
  <div class="latestpostcontainer">
    <div class="latestposts2" data-parallax="scroll" data-image-src="Assets/Blog/latestpostbg.jpg">

    <div class="latestpostsinfo">
      <div class="mylatestinfo">
        My Latest Posts
        <p class="mylatestinfo3">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nemo,
          at consequatur quaerat, necessitatibus voluptatibus sapiente voluptas
          magni rerum dolor aut optio eveniet modi? Qui in beatae nemo expedita!
          Possimus vitae sapiente rerum perspiciatis harum facere voluptatibus
          nam beatae eum?
        </p>
      </div>
      <div class="scrollablepostbox">

      <?php 
        foreach ($results_array as $post) {
        echo '<div class="post">
          <img src="Assets/Blog/Blog Post 1 Pic.jpeg" class="postimage">
          <h1 class="posttitle">' . $post["title"] . '</h1>
          <p class="postdescription">' . $post["description"] . '</p>
        </div>';
}
        ?>
        </div>
      </div>
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
      <div class="footer-subscribe-contact" style="margin-top: 0;"><div>Contact Me</div>
        <button class="moreinfo2">Email</button>
      </div>
      <div class="footer-subscribe-contact"><div>Stay Updated</div>
        <button class="moreinfo2">Subscribe</button>
      </div>
    </div>
    <div class="footer-bottom"><button onclick="gototop()" id="top-button">Back to top</button></div>
  </div>
</html>