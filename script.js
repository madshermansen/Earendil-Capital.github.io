var controller = new ScrollMagic.Controller();

var page = new ScrollMagic.Scene({
    triggerElement: '.info'
})
.setClassToggle('.info', 'show')
.addTo('controller')