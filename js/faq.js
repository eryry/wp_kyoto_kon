$(function(){
  $('.faq-question').on('click',function(){
    $(this).next().slideToggle();
    $(this).toggleClass('faq-toggle-open');
  });
});

$(function () {
  $('a[href^="#"]').on('click', function () {
    // スクロールの速度
    var speed = 400; // ミリ秒で記述
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - 130;//50px上にスクロール
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
});