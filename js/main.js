$(function() {
  $.fn.fullpage({
    verticalCentered: true,
    keyboardScrolling: true,
    touchSensitivity: 15,
    navigation: true,
    slidesNavigation: true,
    slidesNavPosition: 'bottom',
    anchors: ['1', '2', '3', '4'],
	menu: '#menu'

  });

  // What's the time? it's responsive time!

  if (document.documentElement.clientWidth > 900) {
    $('video source').attr('src', 'img/ashanti.mp4');
    $('video').get(0).play();
  }

});