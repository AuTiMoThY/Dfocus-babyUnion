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
		<form action="dist/gotocart2.php" id="cart1Form">
			<section class="cart-sec cf">
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
						<td data-cnt="刪除"><button type="button" class="icons-remove btn" onclick="removecart();"></button></td>
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
						<td data-cnt="刪除"><button type="button" class="icons-remove btn" onclick="removecart();"></button></td>
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
						<td data-cnt="刪除"><button type="button" class="icons-remove btn" onclick="removecart();"></button></td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>

					<tr class="cart-total">
						<td colspan="3" class="text-left" style="padding-left:1.2em; vertical-align:top;">
							使用優惠卷
							<input type="text" name="" id="" class="frm__field coupon" placeholder="請輸入優惠代碼"><button type="button" class="btn btn-style3">OK</button>
							<!-- 使用優惠卷後顯示的文字 ↓↓↓ -->
							<span class="txt-8">ABC12344321（滿1000元折100元遞增計算）</span>
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
			</section>

			<section class="payment-sec mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-txt-paymentInfo hide_txt">付款資訊</h2>
							<div class="payment-list">
								<ul class="cf">
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment1" class="frm__radio"><label for="payment1" class="frm__label">刷卡一次付清</label>
	</div>
	<div class="col-md-9 payment-exp">
		線上刷卡一次付清，可使用卡別<img src="<?php path_au('img', 'card.jpg'); ?>" alt=""><br>刷卡時需要輸入手機號碼，系統會傳驗證號碼簡訊至手機。
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment2" class="frm__radio"><label for="payment2" class="frm__label">銀聯卡</label>
	</div>
	<div class="col-md-9 payment-exp">
		銀聯卡一次付清<img src="<?php path_au('img', 'card1.jpg'); ?>" alt="">
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment3" class="frm__radio"><label for="payment3" class="frm__label">3期0利率</label>
	</div>
	<div class="col-md-9 payment-exp">
		每期<span class="txt-8">NT$6,708</span>，分期除不盡餘數於第一期收取；提供 <b>中國信託</b> 信用卡刷卡分期服務。<br>
		刷卡時需要輸入手機號碼，系統會傳驗證號碼簡訊至手機。
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment4" class="frm__radio"><label for="payment4" class="frm__label">6期0利率</label>
	</div>
	<div class="col-md-9 payment-exp">
		每期<span class="txt-8">NT$3,354</span>，分期除不盡餘數於第一期收取；提供 <b>中國信託</b> 信用卡刷卡分期服務。<br>
		刷卡時需要輸入手機號碼，系統會傳驗證號碼簡訊至手機。
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment5" class="frm__radio"><label for="payment5" class="frm__label">12期分期付款</label>
	</div>
	<div class="col-md-9 payment-exp">
		每期<span class="txt-8">NT$1,778</span>，分期除不盡餘數於第一期收取，利率6%計算；提供 <b>中國信託</b> 信用卡刷卡分期服務。<br>
		刷卡時需要輸入手機號碼，系統會傳驗證號碼簡訊至手機。
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment6" class="frm__radio"><label for="payment6" class="frm__label">紅利折抵</label>
	</div>
	<div class="col-md-9 payment-exp">
		提供 <b>中國信託</b> 信用卡紅利折抵服務。<br>
		刷卡時需要輸入手機號碼，系統會傳驗證號碼簡訊至手機。
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment7" class="frm__radio"><label for="payment7" class="frm__label">WebATM</label>
	</div>
	<div class="col-md-9 payment-exp">
		需使用讀卡機，請備妥您的讀卡機與提款卡。
	</div>
</li>
<li>
	<div class="col-md-3">
		<input type="radio" name="payment" id="payment8" class="frm__radio"><label for="payment8" class="frm__label">貨到付款</label>
	</div>
	<div class="col-md-9 payment-exp">
		小奶娃提供新竹貨運貨到付款服務，需酌收代收手續費：<br>
		購物未滿NT2,000元(不含NT2,000)酌收<span class="txt-8">NT$30</span>，購物滿NT2,000元酌收<span class="txt-8">NT$60</span>
	</div>
</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

		</form>

		<!-- 未登入時顯示 ↓↓↓ -->
		<section class="login-sec mod-cartBlock">
			<div class="mod-cartBlock-wrap">
				<div class="mod-cartBlock-container">
					<div class="mod-cartBlock-block cf">
						<div class="col-md-6">
							<section class="login-sec-sign_in">
								<header>
									<h2 class="member-m_login hide_txt">會員登入</h2>
									<button type="button" class="btns-fb_login btn-style1 hide_txt">FB 帳號登入</button>
								</header>
								<form action="cart_step1.php" class="frm__wrap">
								<ul class="cf">
									<li>
										<label for="m_id" class="frm__label">會員帳號：</label>
										<input type="text" name="" id="m_id" class="frm__field" placeholder="請輸入e-mail帳號">
									</li>
									<li>
										<label for="m_pw" class="frm__label">會員密碼：</label>
										<input type="text" name="" id="m_pw" class="frm__field" placeholder="請輸入您的密碼">
									</li>
									<li>
										<label for="" class="empty"></label>
										<button type="submit" class="btns-login frm__submit btn-style1 hide_txt">我要登入</button>
										<a href="forget.php" class="tdu txt-9">忘記密碼了?</a>
									</li>
								</ul>
								</form>
							</section>
						</div>
						<div class="col-md-6">
							<section class="login-sec-first_shopping">
								<header>
									<h2 class="member-first_shopping hide_txt">首次購物</h2>
								</header>
								<p class="txt-6">小奶娃提供首次購物免註冊功能，完成購物後，即成為會員！<br>請先確認上方商品清單，再點擊下方按鈕前往下一步。</p>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- 未登入時顯示 ↑↑↑ -->
		<section class="btns">
			<a href="product.php" class="btn-style1 q ib btns-shopping hide_txt">繼續選購</a>
			<button type="button" class="btn-style1 q ib btns-next hide_txt" onclick="cart1FormSubmit();">下一步</button>
		</section>
		<section class="shopping_notes">
			<h2 class="shopping_notes-title cart-shopping_notes hide_txt">購物須知</h2>
			<p>我們提供多種付款方式，方便且快速讓您自由選購商品，詳細說明請見<a href="" class="tdu txt-5">常見問題 - 付款方式說明</a>。<br>您最在乎的商品出貨事宜，詳細說明請見<a href="" class="tdu txt-5">常見問題 - 出貨方式說明</a>。<br>小奶娃的退換貨機制，均符合消費者保護法規定，讓您安心選購，詳細說明請見<a href="" class="tdu txt-5">常見問題 -商品退換貨說明</a>。</p>
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
function cart1FormSubmit(){
	$("#cart1Form").submit();
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
