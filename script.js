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
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-75px";
  }
  prevScrollpos = currentScrollPos;
}