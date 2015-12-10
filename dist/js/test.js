(function() {
  var isOpen, root, viewPortH, viewPortW, viewPortWH, viewPortWidthHeight;

  viewPortWidthHeight = function() {
    var wh;
    wh = {};
    if (window.innerWidth) {
      wh.width = window.innerWidth;
      wh.height = window.innerHeight;
    } else if (document.documentElement.clientWidth) {
      wh.width = document.documentElement.clientWidth;
      wh.height = document.documentElement.clientHeight;
    } else if (document.body.clientWidth) {
      wh.width = document.body.clientWidth;
      wh.height = document.body.clientHeight;
    }
    return wh;
  };

  viewPortWH = viewPortWidthHeight();

  viewPortW = viewPortWH.width;

  viewPortH = viewPortWH.height;


  /*
   *	isOpen
   */

  isOpen = function($this, $thisClass) {
    if (!$this.hasClass('open')) {
      $this.addClass('open');
    } else {
      $thisClass.removeClass('open');
    }
  };


  /*
   * function
   */

  root = typeof exports !== "undefined" && exports !== null ? exports : this;

  root.addcart = function(say) {
    if (say == null) {
      say = '此商品已加入購物車';
    }
    return alert(say);
  };

  root.removecart = function() {
    return confirm('確定刪除此商品?');
  };

  $(function() {
    var pdt_sub, tri1, tri2;
    tri1 = $('.hot_news-more svg.svg_icon-triangle_right');
    tri2 = $('.hot_news-more svg.svg_icon-triangle_right-more');
    pdt_sub = $('.pdt-sub_cate');
    $('.main_nav-item.item1').click(function(event) {
      isOpen($('.js-subNav'), $('.js-subNav.open'));
    });
    $('.hot_news-more a').hover((function() {
      $(this).find('.animated').each(function() {
        $(this).addClass('bounce');
      });
    }), function() {
      $(this).find('.animated').removeClass('bounce');
    });
    pdt_sub.hide();
    $('.js-pdt-main_cate').click(function() {
      if ($(this).closest("li").children('div.pdt-sub_cate').length > 0) {
        console.log("yoyo");
        if (!$(this).hasClass('open')) {
          $('.js-pdt-main_cate.open').children('.pdt-sub_cate').hide();
          $('.js-pdt-main_cate.open').removeClass('open');
          $(this).addClass('open');
          $(this).children('.pdt-sub_cate').show();
        } else {
          $('.js-pdt-main_cate.open').removeClass('open');
          $(this).children('.pdt-sub_cate').hide();
        }
      }
    });
  });

}).call(this);
