$(function() {
  $('.btn-hamburger').on('click',function(){
    $(this).toggleClass('nav-open');
    $('.sp-drawer').toggleClass('drawer-open');
  });
});