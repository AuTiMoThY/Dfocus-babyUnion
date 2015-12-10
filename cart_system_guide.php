<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "系統導向中";
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

<body class="cart_page cart3_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
 include_once INC_PATH.'header.php';
 ?>

<main class="cart_page-main">
<section class="page_path container">
	 <div class="icons-home2 ib"></div>&nbsp;&nbsp;&gt;
	 &nbsp;&nbsp;購物流程&nbsp;&nbsp;
</section>
<div class="container">
	<div class="cart-wrap">
		<header>
			<h1 class="cart-title_cart hide_txt">小奶娃‧購物流程</h1>
			<div class="cart-steps cart-step3 hide_txt">STEP3 最後確認訂單</div>
		</header>
		<div class="cart-container">
		<form action="" id="">
			

			<section class="system_guide mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-system_guide hide_txt">系統導向中...</h2>
							<img src="<?php path_au('img', 'loading.gif') ?>" alt="">
							<p class="text-center">系統正在導向金流頁面，請稍待片刻，請勿關閉本視窗！<br>(若瀏覽器過久無反應，請直接點擊下方「<a href="" class="txt-5 tdu">前往線上交易</a>」按鈕繼續付款。)</p>
						</div>
					</div>
				</div>
			</section>

		</form>

		<section class="btns">
			<a href="#" class="btn-style1 q ib btns-goOnlineTrading hide_txt">前往線上交易</a>
		</section>
		</div><!-- /.cart-container  END  !! -->
	</div>
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
function cart3FormSubmit(payment){
	if (payment == "1") {
		$("#cart3Form").submit();
	}else if (payment == "2") {
		location.href = "system_guide.php";
	};
}
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
