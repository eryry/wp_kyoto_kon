$(function() {
  $('#contact-form-submit').prop('disabled',true);
  $('#contact-form-check').click(function() {
    if($(this).prop('checked') == false) {
      $('#contact-form-submit')
      .prop('disabled',true)
      .removeClass('arrow-color-change')
      .css('background-color','#fff')
      .css('color', '#9B867B')
      .css('cursor','default');
    } else {
      $('#contact-form-submit')
      .prop('disabled',false)
      .addClass('arrow-color-change')
      .css('background-color','#9B867B')
      .css('color','#fff')
        .css('cursor','pointer');
    }
  });
});