/*--------------------------------------*\
	babyunion
			by DFocus AuTiMoThY
\*--------------------------------------*/
var viewPortWidthHeight = function () {

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

$(function() {
	$(".main_nav-item.item1").click(function(event) {
		isOpen($(".js-subNav"), $(".js-subNav.open"))
	});
});