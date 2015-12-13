<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "常見問題";
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

<body class="faq_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
 include_once INC_PATH.'header.php';
 ?>

<main class="faq_page-main">

<section class="page_path container">
	 <div class="icons-home2 ib"></div>&nbsp;&nbsp;&gt;
	 &nbsp;&nbsp;<?php echo $page_title; ?>&nbsp;&nbsp;
</section>
<div class="container">
	<aside class="faq_page-aside">
		<header>
			<h2 class="iconTxt-title-faqaside hide_txt">問題分類</h2>
		</header>
		<div class="faq_page-aside-block">
			<ul class="cf">
				<li class="active"><a href="">會員常見問題</a></li>
				<li><a href="">購物相關問題</a></li>
				<li><a href="">退換貨及退款</a></li>
				<li><a href="">常見問題分類</a></li>
				<li><a href="">常見問題分類</a></li>
				<li><a href="">常見問題分類</a></li>
				<li><a href="">常見問題分類</a></li>
				<li><a href="">常見問題分類</a></li>
				<li><a href="">(文字有兩行的狀況)常見問題分類</a></li>
			</ul>
		</div>
	</aside>
	<section class="faq_page-cnt">
		<div class="faq_page-cnt-wrap">
			<header class="faq_page-cnt-top">
				<div class="faq_page-cnt-top-block">
					<h2 class="pattern-board"><span class="inner">問題分類標題顯示於此</span></h2>
					<ul id="gotoItem" class="cf">
						<li class="active"><a href="#q1">Q1: 如何辦理退換貨?</a></li>
						<li><a href="#q2">Q2: 退款方式及退款時間?</a></li>
						<li><a href="#q3">Q3: 未退回的退款，是否可直接折抵新訂單？</a></li>
						<li><a href="#q4">Q4: 發票遺失是否仍能辦理退換貨？</a></li>
						<li><a href="#q5">Q5: 我收到發票，但是統編有錯或漏開怎麼辦？</a></li>
						<li><a href="#q6">Q6: 什麼情況無法辦理退貨？</a></li>
						<li><a href="#q7">Q7: 關於加價購商品退貨辦理規則?</a></li>
					</ul>
				</div>
			</header>
			<div class="faq_page-list">
				<section id="q1" class="faq_page-item">
					<header>
						<h3>Q1: 如何辦理退換貨?</h3>
					</header>
					<article class="editorDF">
						<img src="<?php path_au('tmp', 'tem-faq1.png'); ?>" alt="" class="temporary">
					</article>
				</section>

				<section id="q2" class="faq_page-item">
					<header>
						<h3>Q2: 退款方式及退款時間??</h3>
					</header>
					<article class="editorDF">
						<img src="<?php path_au('tmp', 'tem-faq1.png'); ?>" alt="" class="temporary">
					</article>
				</section>

				<section id="q3" class="faq_page-item">
					<header>
						<h3>Q3: 未退回的退款，是否可直接折抵新訂單？</h3>
					</header>
					<article class="editorDF">
						<img src="<?php path_au('tmp', 'tem-faq1.png'); ?>" alt="" class="temporary">
					</article>
				</section>

				<section id="q4" class="faq_page-item">
					<header>
						<h3>Q4: 發票遺失是否仍能辦理退換貨？</h3>
					</header>
					<article class="editorDF">
						<img src="<?php path_au('tmp', 'tem-faq1.png'); ?>" alt="" class="temporary">
					</article>
				</section>

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
<script>
$(function() {
	$('#gotoItem').localScroll();
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
