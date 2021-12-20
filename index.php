<?php 
require __DIR__ . '/inc/func.php';
$array = getinfo("ALL");
$lastestpost = $array["lp"];
$results_array = $array["ra"];

// Picking the featured article
// change the id to whatever it needs to be
$featured_ID = 6;
foreach ($results_array as $checkid) {
  if ($featured_ID == $checkid["id"]){
    $featured_post = $checkid;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('inc/head.inc') ?>

 <!-- CSS loader-->
 <!-- <div class="loaderwrapper"><div class="loader"></div></div> -->


  <!-- Titlepage -->
  <body style="background-color: #f9f9f9">
    <header style="height: 100vh;">
      <!-- <div class="Homepage-Background" data-parallax="scroll" data-image-src="Assets/Home-screen/HomescreenBackground.png"
      data-z-index="-100"></div> -->
      <div class="Homepage-Background" data-parallax="scroll" data-image-src="Assets/Blog/latestpostbg.jpg"
      data-z-index="-100">
      <!-- Navbar -->
  <?php include('inc/nav.inc') ?>
  <!-- Navbar end -->
      <div class="frontpage-desktop">
        <p id="frontpage-recent-blog">FEATURED POST</p>
        <div class="frontpagecontainer" >
        <a href=<?php echo "" . $featured_post["HREF"] . ""?>
          ><img
            src=<?php echo "" . $featured_post["Image"] . ""?>
            alt="book"
            class="frontpageimg"
        /></a>
        
          <h2 class="topictitle"><?php echo $featured_post["Title"] ?></h2>
          <h4 id="topictag"><?php echo $featured_post["Topic"] ?></h4>
          <h6 class="description">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia,
            hic!</h6>
            <h6 class="readtime"> 20 min to read...</h6>
        </div>
        <p class="frontpagedisc">
        <?php echo $featured_post["Summary"] ?>
        </p>
        <button class="readmorebtn" onclick='window.location.href="<?php echo "" . $featured_post["HREF"] . ""?>"'
          >Read More &rarr;</button>
      </div>
      <div class="quote"><p>Acquire worldly wisdom and adjust your behavior accordingly. If your new
        behavior gives you a little temporary unpopularity with your peer group
        then to hell with them</p>
        <!-- <h1 id="quoteby">- Charles T. Munger</h1> -->
      </div>
    </header>
  </body>

  <!-- About Me-->
  
  <div class="frontpage-mobile">
    <p id="frontpage-recent-blog">RECENT BLOG POST</p>
        <a href=<?php echo "" . $featured_post["HREF"] . ""?>
          ><img
            src=<?php echo "" . $featured_post["Image"] . ""?>
            alt="book"
            class="frontpageimg"
        /></a>
    <div class="frontpagecontainer" >
      <h2 class="topictitle"><?php echo $featured_post["Title"] ?></h2>
      <h4 id="topictag"><?php echo $featured_post["Topic"] ?></h4>
    </div>
    <p class="frontpagedisc">
      <?php echo $featured_post["Summary"]?>
    </p>
    <button class="moreinfo" id="moreinfo-mobile" onclick="window.location.href='aboutme.html'">
      Read More
    </button>
    <button id="readmorefrontpage">Read More &rarr;</button>
  </div>
  <div class="info">
    <div class="infocontainers">
      <p class="infotitle">Blog</p>
      <p class="infotext">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam placeat
        libero repellendus, doloremque perferendis natus optio molestiae omnis
        officiis repellat deleniti recusandae iusto itaque id magnam blanditiis
        ipsum accusantium autem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam placeat
        libero repellendus, doloremque perferendis natus optio molestiae omnis
        officiis repellat deleniti recusandae iusto itaque id magnam blanditiis
        ipsum accusantium autem
      </p>
    </div>
    <div class="infocontainers">
      <p class="infotitle">Investing</p>
      <p class="infotext">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero amet
        quaerat ad quis. Qui, consequuntur, ex ipsum tempora cumque blanditiis
        explicabo sint quam recusandae, maxime in dignissimos fugit rerum
        incidunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam placeat
        libero repellendus, doloremque perferendis natus optio molestiae omnis
        officiis repellat deleniti recusandae iusto itaque id magnam blanditiis
        ipsum accusantium autem
      </p>
    </div>
    <div class="infocontainers">
      <p class="infotitle">Mental Models</p>
      <p class="infotext">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
        iste eum accusamus sint repellat voluptatem, veritatis laborum aliquam
        aliquid quasi corporis totam excepturi maxime atque, in suscipit quos
        doloribus! Adipisci. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam placeat
        libero repellendus, doloremque perferendis natus optio molestiae omnis
        officiis repellat deleniti recusandae iusto itaque id magnam blanditiis
        ipsum accusantium autem
      </p>
    </div>
  </div>

  <!-- Lastest Posts -->
  <div class="latestpostcontainer">
    <div class="latestposts2" data-parallax="scroll" data-image-src="https://images.unsplash.com/photo-1536859975388-b5e6623e9223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80">

    <div class="latestpostsinfo">
      <div class="mylatestinfo">
        My Latest Posts:
      </div>
        <div class="scrollablepostbox">
        <div class="scrollablebox"></div>
        <?php 
          foreach ($results_array as $post) {
            echo '<div class="post">
            <div>
            <a href="' . $post["HREF"] . '">
              <img src="' . $post["Image"] . '" class="postimage"></a>
            <h1 class="posttitle">' . $post["Title"] . '</h1></div>
            <p class="postdescription">' . $post["Summary"] . '</p>
          </div>';
  }
          ?>
          <div class="scrollablebox2"></div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include('inc/footer.inc'); ?>
</html>
