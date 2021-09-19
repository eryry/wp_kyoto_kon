$(function () {
  $(window).scroll(function () {
    $(".fade-in-img").each(function () {
      var targetElement = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > targetElement - windowHeight + 200) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  });
});

// ルミエールに変更
$(function () {
  $("#hall-kyotohotel").hover(
    function () {
      $(".wedding-hall-kyotohotel-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateX(0)");
        }
      });
    },
    function () {
      $(".wedding-hall-kyotohotel-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "0");
          $(this).css("transform", "translateX(100px)");
        }
      });
    }
  );
});

$(function () {
  $("#hall-lumiere").hover(
    function () {
      $(".wedding-hall-lumiere-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateX(0)");
        }
      });
    },
    function () {
      $(".wedding-hall-lumiere-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "0");
          $(this).css("transform", "translateX(100px)");
        }
      });
    }
  );
});


$(function () {
  $("#hall-viceo").hover(
    function () {
      $(".wedding-hall-viceo-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateX(0)");
        }
      });
    },
    function () {
      $(".wedding-hall-viceo-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "0");
          $(this).css("transform", "translateX(-100px)");
        }
      });
    }
  );
});
$(function () {
  $("#hall-okazakian").hover(
    function () {
      $(".wedding-hall-okazakian-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateX(0)");
        }
      });
    },
    function () {
      $(".wedding-hall-okazakian-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "0");
          $(this).css("transform", "translateX(100px)");
        }
      });
    }
  );
});
/*
$(function () {
  $("#hall-ana").hover(
    function () {
      $(".wedding-hall-ana-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateX(0)");
        }
      });
    },
    function () {
      $(".wedding-hall-ana-fade-in").each(function () {
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200) {
          $(this).css("opacity", "0");
          $(this).css("transform", "translateX(100px)");
        }
      });
    }
  );
});
*/