
// Go to top button
function gototop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }

// Navbar stuff with scrolling 
const navbarafter = document.getElementById("navbar")
var prevScrollpos = window.pageYOffset;
document.getElementById("navbar").style.top = "0";
document.getElementById("menuchange").style.top = "10px";

window.onscroll = function() {
  var scrollTop = $(window).scrollTop();
  var pixels = window.innerHeight;
  if (prevScrollpos > pixels*1/7) {
      document.getElementById("navbar").style.background = "#0E1B31";
    } else {
      document.getElementById("navbar").style.background = "transparent";
    }
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.visibility = "visible";
    document.getElementById("navbar").style.top = "0";
    document.getElementById("menuchange").style.top = "10px";
  } else {
    document.getElementById("navbar").style.top = "-80px";
    document.getElementById("navbar").style.visibility = "hidden";
    document.getElementById("menuchange").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}

// Menu button checked change nav header on pixel count

  // Disable Scroll on Checkbox

  $('#active').change(function() {
    var pixels = window.innerHeight;
    if ($('#active').is(":checked")) { 
      $('html').css('overflow','hidden');
    }
      else {
      $('html').css('overflow','auto');
    }
  });
  
