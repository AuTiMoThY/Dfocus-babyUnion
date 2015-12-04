<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "STEP1 確認商品清單";
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

<body class="cart_page">
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
			<div class="cart-steps cart-step1 hide_txt">STEP1 確認商品清單</div>
		</header>
		<div class="cart-container">
			<div class="cart-block cf">
			<form action="">
				<table class="cart-table">
					<tr>
						<th width="19"><img src="<?php path_au('img', 'th_before2.png'); ?>" alt=""></th>
						<th class="q" width="45%"><span class="cart-txt-cart1 hide_txt">商品資訊</span></th>
						<th class="q" width="10%"><span class="cart-txt-cart2 hide_txt">原價</span></th>
						<th class="q" width="10%"><span class="cart-txt-cart3 hide_txt">折扣價</span></th>
						<th class="q"><span class="cart-txt-cart4 hide_txt">數量</span></th>
						<th class="q"><span class="cart-txt-cart5 hide_txt">小計</span></th>
						<th class="q" width="50"><span class="cart-txt-cart6 hide_txt">刪除</span></th>
						<th width="19"><img src="<?php path_au('img', 'th_after2.png'); ?>" alt=""></th>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td data-cnt="商品資訊" class="text-left">
							<div class="pdt-pic left"><img src="<?php path_au('tmp', 'tmp-pdt-2.jpg'); ?>" alt=""></div>
							<div class="pdt-name left">
								chu chu 啾啾 - 夜光型 口腔發展安撫奶嘴<br>
								規格：授乳期用 (0-6m)<br>
								<span class="txt-7">商品編號：CHU99371</span>
							</div>
						</td>
						<td data-cnt="原價"><span class="tdlt">NT$ 650</span></td>
						<td data-cnt="折扣價"><b>NT$ 423</b></td>
						<td data-cnt="數量"><input type="number" name="" id="" class="frm__field amount" min="1" value="2"></td>
						<td data-cnt="小計">NT$ 846</td>
						<td data-cnt="刪除"><button type="button" class="icons-remove btn"></button></td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>

					<tr>
						<td>&nbsp;</td>
						<td data-cnt="商品資訊" class="text-left">
							<div class="pdt-pic left"><img src="<?php path_au('tmp', 'tmp-pdt-2.jpg'); ?>" alt=""></div>
							<div class="pdt-name left">
								Aprica愛普力卡 - Fladea DX 729 平躺型臥床椅(汽座) -鸚鵡紅愛普力卡 - Fladea DX 729 平躺型臥床椅(汽座)<br>
								規格：授乳期用 (0-6m)<br>
								<span class="txt-7">商品編號：CHU99371</span>
							</div>
							<div class="cf"></div>



						</td>
						<td data-cnt="原價"><span class="tdlt">NT$ 22900</span></td>
						<td data-cnt="折扣價"><b>NT$ 18320</b></td>
						<td data-cnt="數量"><input type="number" name="" id="" class="frm__field amount" min="1" value="1"></td>
						<td data-cnt="小計">NT$ 18320</td>
						<td data-cnt="刪除"><button type="button" class="icons-remove btn"></button></td>
						<td>&nbsp;</td>
					</tr>

					<tr class="spa_offer">
						<td>&nbsp;</td>
						<td data-cnt="商品資訊" class="text-left">
							<div class="pdt-pic left"><img src="<?php path_au('tmp', 'tmp-pdt-4.jpg'); ?>" alt=""></div>
							<div class="pdt-name left">
								Aprica愛普力卡 - 輕鬆洗多用途兩用吸汗軟墊 (流線粉)<br>
								<div class="cart-spa_offer hide_txt">加購品</div>
							</div>
							<div class="cf"></div>

						</td>
						<td data-cnt="原價"><span class="tdlt">NT$ 1000</span></td>
						<td data-cnt="折扣價"><b>NT$ 800</b></td>
						<td data-cnt="數量"><input type="number" name="" id="" class="frm__field amount" min="1" value="1"></td>
						<td data-cnt="小計">NT$ 800</td>
						<td data-cnt="刪除"><button type="button" class="icons-remove btn"></button></td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>

					<tr class="cart-total">
						<td colspan="3" class="text-left" style="padding-left:1.2em; vertical-align:top;">
							使用優惠卷<input type="text" name="" id="" class="frm__field coupon" placeholder="請輸入優惠代碼"><button type="button" class="btn btn-style3">OK</button>
						</td>
						<td colspan="5">
							<ul class="cf">
								<li>
									<div class="col-md-6 text-right">商品金額</div>
									<div class="col-md-6 q text-right">NT$ 20124</div>
								</li>
								<li>
									<div class="col-md-6 text-right">優惠卷折扣</div>
									<div class="col-md-6 q text-right">- NT$ 0</div>
								</li>
								<li>
									<div class="col-md-6 text-right">運費小計</div>
									<div class="col-md-6 q text-right">NT$ 0</div>
								</li>
								<li class="line"></li>
								<li>
									<div class="col-md-6 text-right">總計</div>
									<div class="col-md-6 q text-right"><span class="txt-price2_1">NT$ 20,124</span></div>
								</li>
							</ul>
						</td>
					</tr>

				</table>
			</form>
			</div>
		</div>
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

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
