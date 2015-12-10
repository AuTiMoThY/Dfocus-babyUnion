<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "最新消息";
	// echo $_SERVER['REMOTE_ADDR'];
	// echo $_SERVER['HTTP_HOST'];
?>
<title><?php echo $page_title." | ".PROJECT; ?></title>

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

<body class="news_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
 include_once INC_PATH.'header.php';
 ?>

<main class="news_page-main">
<section class="page_path container">
	 <div class="icons-home2 ib"></div>&nbsp;&nbsp;&gt;
	 &nbsp;&nbsp;<?php echo $page_title; ?>&nbsp;&nbsp;
</section>
<div class="container">
	<section class="news-content">
		<header>
			<h1 class="news-title-cnt hide_txt">最新消息 LATEST NEWS</h1>
			<h2 class="news-content-title txt-6">(會直接顯示最新消息的第一則，點擊下方列表也會直接顯示該篇內文於此)本公司已依法完成販賣業藥商許可執照申請作業。 許可字號為 北市衛藥販(松)字第620101H232。(此區為標題) </h2>
			<div class="news-content-date news-pattern-date">
				<div class="inner">
					<span class="day">11</span><br><span class="yyyymm">2015.06</span>
				</div>
			</div>
		</header>
		<article class="news-content-art">
			<div class="news-content-art-container">
				<div class="news-content-art-block">
					<div class="editorDF">
						<!-- 圖文編輯器 -->
						 <img src="<?php path_au('tmp', 'tem-news1.png'); ?>" alt="" class="temporary">
					</div>
				</div>
			</div>
		</article>
	</section>

	<section class="news-list">
		<header>
			<h1 class="news-title-list hide_txt">消息列表 NEWS LIST</h1>
		</header>
		<div class="news-list-pattern"></div>
		<div class="news-list-container">
			<ul class="hot_news-list cf">
			<?php 
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
			<div class="pages_btn">
				<ul class="cf">
					<li class="prev"><a href="">
						<span class="txt ib txt-11">Prev</span>
						<i class="icon ib">
							<svg class="icon svg_icon-tri_prev">
							  <use xlink:href="#shape-tri_prev"></use>
							</svg>
						</i>
					</a></li><!-- 在第一頁時不顯示 -->
					<li class="number active"><a href="">1</a></li>
					<li class="number"><a href="">2</a></li>
					<li class="number"><a href="">3</a></li>
					<li class="number"><a href="">4</a></li>
					<li class="number"><a href="">5</a></li>
					<li class="next"><a href="">
						<i class="icon ib">
							<svg class="icon svg_icon-tri_next">
							  <use xlink:href="#shape-tri_next"></use>
							</svg>
						</i>
						<span class="txt ib txt-11">Next</span>
					</a></li><!-- 在最後一頁時不顯示 -->
				</ul>
			</div>
		</div>
	</section>
</div>


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

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
