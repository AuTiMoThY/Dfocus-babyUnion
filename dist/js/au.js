/*--------------------------------------*\
	babyunion
			by DFocus AuTiMoThY
\*--------------------------------------*/
function viewPortWidthHeight() {

	var wh = {};

	if(window.innerWidth) {
			wh.width = window.innerWidth;
			wh.height = window.innerHeight;
	}
	else if(document.documentElement.clientWidth) {
			wh.width = document.documentElement.clientWidth;
			wh.height = document.documentElement.clientHeight;
	}
	else if(document.body.clientWidth) {
			wh.width = document.body.clientWidth;
			wh.height = document.body.clientHeight;
	}
	return wh;
}
var viewPortWH = viewPortWidthHeight(),
	viewPortW = viewPortWH.width,
	viewPortH = viewPortWH.height;
var $win = $(window),
	$asideQuick = $("#floatMenu"),
	$asideQuickCtrl = $("#floatMenuCtrl");

/*----------------------------------------------------------------------------*\
	
\*----------------------------------------------------------------------------*/
function isOpen($this, $thisClass) {
	if (!($this.hasClass('open'))) {
		$this.addClass('open');
	} else{
		$thisClass.removeClass('open');
	};
}

function addcart(){
	alert("此商品已加入購物車");
}

function removecart(){
	confirm("確定刪除此商品?");
}

function asideQuickCtrl(){
	$asideQuickCtrl.click(function() {
		if (!$asideQuick.hasClass('open')) {
			$(this).addClass('open');
			$asideQuick.addClass('open').animate({
				right: '0.8em'
			}, 600, 'easeOutQuint');
			$asideQuickCtrl.html('<i class="fa fa-times"></i>關閉');
		} else{
			$("#floatMenu.open").removeClass('open').animate({
				right: '-112px'
			}, 600, 'easeOutQuint');
			$("#floatMenuCtrl.open").removeClass('open');
			$asideQuickCtrl.html('快速選單');
		};
	});
}

$(function() {
	asideQuickCtrl();
	var pdt_sub, tri1, tri2;
	tri1 = $('.hot_news-more svg.svg_icon-triangle_right');
	tri2 = $('.hot_news-more svg.svg_icon-triangle_right-more');
	pdt_sub = $('.pdt-sub_cate');

	$('#gototop').localScroll();

	$(".main_nav-item.item1").click(function(event) {
		isOpen($(".js-subNav"), $(".js-subNav.open"))
	});

	$(".hot_news-more a").hover(function() {
		$(this).find('.animated').each(function() {
			$(this).addClass('bounce');
			// tri1.delay(1000).attr("class", 'icon svg_icon-triangle_right animated bounce');
			// tri2.delay(2000).attr("class", 'icon svg_icon-triangle_right-more animated bounce');
		});
	}, function() {
		$(this).find('.animated').removeClass('bounce');
		// tri1.attr("class", 'icon svg_icon-triangle_right');
		// tri2.attr("class", 'icon svg_icon-triangle_right-more');
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