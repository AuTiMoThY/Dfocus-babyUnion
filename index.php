<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	// echo $_SERVER['REMOTE_ADDR'];
	// echo $_SERVER['HTTP_HOST'];
?>
<title><?php echo PROJECT; ?></title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once INC_PATH.'head.php';
 ?>


<?php
//app
  include_once INC_PATH.'social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="index_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
 include_once INC_PATH.'header.php';
 ?>

<!-- 主視覺banner -->
<section class="main_banner pic">
	<img src="<?php path_au('img', 'banner-main1.jpg'); ?>" alt="">
</section>
<!-- 活動banner  -->
<section class="act_banner">
	<div class="container">
		<div class="row">
		    <div id="slider" class="flexslider">
		        <ul class="slides">
		            <li><img src="<?php path_au('img', 'banner-act1.jpg'); ?>" alt=""></li>
		            <li><img src="<?php path_au('img', 'banner-act2.jpg'); ?>" alt=""></li>
		        </ul>
		    </div>

		</div>
	</div>
</section>
<section class="small_banner">
	<div class="container">
		<div class="row">
			<div class="pic"><img src="<?php path_au('img', 'banner_s.jpg'); ?>" alt=""></div>
		</div>
	</div>
</section>
<main class="index_page-main">
<section class="best_seller container">
	<div class="best_seller-wrapper">
		<div class="best_seller-pattern">
			<img src="<?php path_au('img', 'btn-best_seller.png') ?>" alt="" class="" usemap="NextPrev">
		</div>
		<h2 class="best_seller-title iconTxt-title-best_seller hide_txt">熱銷商品 Best Seller</h2>
		<ul class="best_seller-list cf">
<?php
// 顯示 9 則
for ($i=0; $i < 9; $i++) {
?>
			<li class="best_seller-item col-xs-4"><a href="product_cnt.php" title="">
				<figure class="hint--bottom" data-hint="ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)">
					<div class="best_seller-pic pic">
						<img src="<?php path_au('tmp', 'tmp-pdt-1.jpg'); ?>" alt="ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)" >
					</div>
					<figcaption>
						<div class="best_seller-name txt-1"><b>ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)ABC Design - Zoom 雙人嬰幼兒手推車 (天空藍綠款)</b></div>
						<div class="best_seller-price">
							<span class="txt-price1 tdlt">$33,500</span>
							<span class="txt-price2 "><b>$26,800</b></span>
							
						</div>
					</figcaption>
				</figure>
			</a></li>

<?php
}
?>

		</ul>
		<div class="best_seller-control">
			<ul>
				<li class="number active"><a href="" class="icons-slide_control hide_txt">1</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">2</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">3</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">4</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">5</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">6</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">7</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">8</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">9</a></li>
				<li class="number"><a href="" class="icons-slide_control hide_txt">10</a></li>
			</ul>
			<map name="NextPrev">
				<area shape="rect" coords="59, 104, 120, 138" href="" alt="NEXT">
				<area shape="rect" coords="14, 148, 75, 180" href="" alt="PREV">
			</map>
		</div>
	</div><!-- /.best_seller-wrapper  END  !!-->
</section><!-- /.best_seller  END  !! -->

<?php 
$temp_date = strtotime(date("Y.m.d"));

 ?>
<section class="hot_news">
	<div class="hot_news-bg"></div>
	<div class="hot_news-wrapper container">
		<div class="hot_news-pattern"></div>
		<h2 class="hot_news-title iconTxt-title-hot_news hide_txt">最新消息  HOT NEWS</h2>
		<div class="hot_news-wall">
			<div class="hot_news-more">
				<a href="" class="">
				<i class="ib icons-cute_people animated"></i>
				MORE
				<i class="ib">
					<svg class="icon svg_icon-triangle_right">
					  <use xlink:href="#shape-triangle_right"></use>
					</svg>
					<svg class="icon svg_icon-triangle_right-more">
					  <use xlink:href="#shape-triangle_right"></use>
					</svg>
				</i>
				</a>
			</div>
			<div class="hot_news-container">
				<div class="hot_news-block">
					<ul class="hot_news-list cf">
<?php 
function tempNewsItem() {
echo "<li class=\"hot_news-item col-md-6\"><a href=\"news.php\" class=\"cf\">";
echo "	<div class=\"news-date txt-2 col-xs-2\">";
echo "		<span class=\"date-d\">16</span><br><span class=\"date-ym\">2015.10</span>";
echo "	</div>";
echo "	<div class=\"news-title txt-2 col-xs-9\">10/9~10/11暫停出貨通知</div>";
echo "	<div class=\"news-more col-xs-1 right\">";
echo "		<svg class=\"icon svg_icon-triangle_right\">";
echo "		  <use xlink:href=\"#shape-triangle_right\"></use>";
echo "		</svg>";
echo "	</div>";
echo "</a></li>";

}

// 顯示 6 則
for ($i=0; $i < 6; $i++) { 
?>

						<li class="hot_news-item col-xs-6"><a href="news.php" class="cf">
							<div class="news-date txt-2 col-xs-2">
								<span class="date-d">16</span><br><span class="date-ym">2015.10</span>
							</div>
							<div class="news-title txt-2 col-xs-9">10/9~10/11暫停出貨通知</div>
							<div class="news-more col-xs-1 right">
								<svg class="icon svg_icon-triangle_right">
								  <use xlink:href="#shape-triangle_right"></use>
								</svg>
							</div>
						</a></li>
<?php
}
?>
					</ul>
					<div class="line"></div>
					<div class="hot_news-row">
						<div class="hot_news-banner ib">
							<div class="pic">
								<img src="<?php path_au('img', 'banner-news1.jpg'); ?>" alt="">
							</div>
						</div>
						<div class="facebook_block ib">
							<div class="yo">
								<img src="<?php path_au('tmp', 'tmp-fb1.jpg'); ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.hot_news-wrapper  END  !! -->
</section><!-- /.hot_news  END  !! -->
</main>

<?php
// -------------------------------
// Footer
// -------------------------------
 include_once INC_PATH.'footer.php';
 ?>

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
 include_once INC_PATH.'scriptfoot.php';
 ?>
<script src="plugin/FlexSlider/jquery.flexslider.js"></script>
<script>
$(window).load(function() {
    $('#slider').flexslider({
		animation     : "fade",
		controlNav    : true,
		directionNav  : false,
		animationLoop : true,
		slideshow     : true
    });
});
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
