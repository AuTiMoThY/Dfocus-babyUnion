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

$(function() {
	$(".main_nav-item.item1").click(function(event) {
		isOpen($(".js-subNav"), $(".js-subNav.open"))
	});

	var tri1 = $('.hot_news-more svg.svg_icon-triangle_right');
	var tri2 = $('.hot_news-more svg.svg_icon-triangle_right-more');
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
});