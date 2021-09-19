$(function() {
  var window_size = window.innerWidth;
  if (window_size <= 1023) {
    $('.js-image-change')
      .children('img')
      .attr('src','images/consultation/flow_sp.png');
  }
});

$(window).resize(function() {
  var window_resize = window.innerWidth;
  if (window_resize <= 1023) {
    $('.js-image-change')
      .children('img')
      .attr('src', 'images/consultation/flow_sp.png');
  } else {
    $('.js-image-change')
      .children('img')
      .attr('src', 'images/consultation/flow.png');
  }
}); 