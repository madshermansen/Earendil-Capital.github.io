// Go to top button
function gototop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }

  

  // Disable Scroll on Checkbox

$('#active').change(function() {
  if ($('#active').is(":checked")) {
    $('html').css('overflow','hidden');
  } else {
    $('html').css('overflow','auto');
  }
});

var prevScrollpos = window.pageYOffset;
document.getElementById("navbar").style.top = "0";
document.getElementById("menuchange").style.top = "20";

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
    document.getElementById("menuchange").style.top = "20px";
  } else {
    document.getElementById("navbar").style.top = "-80px";
    document.getElementById("navbar").style.visibility = "hidden";
    document.getElementById("menuchange").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}