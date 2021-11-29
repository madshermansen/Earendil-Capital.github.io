

<!-- Content --> 
<div class="aboutme blogaboutme">
<p id="frontpage-recent-blog">RECENT POST</p>
        <img src="Assets/Hexagon-BG.svg" class="svg-hexagon">

      <div class="blogcontainer">
        
        <?php 
        
        echo '<img src="' . $lastestpost["Image"] . '" class="centerimage">';
        echo "<div class='textcontainer'>";
        echo '<div class="investingpost">' . $lastestpost["Title"] . "</div>";
        echo "<h2>" . $lastestpost["Topic"] . "</h2>";
        echo "<p>" . $lastestpost["Summary"] . "</p>";
        ?>
        <button class="readmorebtn" onclick='window.location.href="<?php echo "" . $lastestpost["HREF"] . ""?>"'
          >Read More</button></div>
      </div>
      
      </div>
        <div class="allposts">
        <div class="latestposts" style="" data-parallax="scroll" data-image-src="Assets/Investing/Section-3-BG.jpg"
        data-z-index="-100"></div>
          <?php 
          foreach ($results_array as $post) {
            echo '<div class="individual-post">
            <a href="' . $post["HREF"] . '">
            <img src="' . $post["Image"] . 
            '" class="blogimages6"><h1 class="posttitle3"><div class="block2"></div>'
            . $post["Title"] . '</h1>' . "<h2>" . $post["Topic"] . "</h2>" . '</a><p class="caption3">' 
            . $post["Summary"] . '</p><div class="psuedopadding"><div class="block3"></div></div></div>'
            ;
                  }
          ?>
        </div>