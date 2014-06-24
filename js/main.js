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

  $('video').get(0).play();
});