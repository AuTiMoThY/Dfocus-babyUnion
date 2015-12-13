<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "STEP4 完成訂購!!";
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
			<div class="cart-steps cart-step4 hide_txt">STEP4 完成訂購!!</div>
		</header>
		<div class="cart-container">
		<form action="" id="">

			<!-- 貨到付款 訂購成功 -->
			<section class="cart_result mod-resultBlock">
				<div class="mod-resultBlock-wrap">
					<div class="mod-resultBlock-container">
						<div class="mod-resultBlock-block">
							<h2 class="cart-bg-result_title txt-5">訂購成功</h2>
							<p>感謝您的訂購，本站將會主動由系統發送訊息至您的電子信箱，<br>並請務必詳記本次訂單編號，以便後續查詢使用，<br>您亦可至「<a href="order.php" class="txt-5 tdu">會員專區 &gt; 訂單查詢</a>」查詢本訂單。</p>
							<strong class="txt-8">201510100726069686</strong>
							<p>※提醒您！此筆訂單僅完成訂購作業，尚未完成付款。</p>
						</div>
					</div>
				</div>
			</section>

			<!-- 付款成功 -->
			<section class="cart_result mod-resultBlock">
				<div class="mod-resultBlock-wrap">
					<div class="mod-resultBlock-container">
						<div class="mod-resultBlock-block">
							<h2 class="cart-bg-result_title txt-5">付款成功</h2>
							<p>感謝您的訂購，本站將會主動由系統發送訊息至您的電子信箱，<br>並請務必詳記本次訂單編號，以便後續查詢使用，<br>您亦可至「<a href="order.php" class="txt-5 tdu">會員專區 &gt; 訂單查詢</a>」查詢本訂單。</p>
							<strong class="txt-8">201510100726069686</strong>
						</div>
					</div>
				</div>
			</section>

			<!-- 交易失敗 -->
			<section class="cart_result mod-resultBlock">
				<div class="mod-resultBlock-wrap">
					<div class="mod-resultBlock-container">
						<div class="mod-resultBlock-block">
							<h2 class="cart-bg-result_title txt-5">交易失敗</h2>
							<p>因金融理由導製作業失敗，請主動聯繫您的金融機構，確保您的帳戶功能正常。本次交易失敗，不會向您扣取任何費用。</p>
						</div>
					</div>
				</div>
			</section>

			<section class="cart-sec cf">
				<table class="cart-table">
					<tr>
						<th width="19"><img src="<?php path_au('img', 'th_before2.png'); ?>" alt=""></th>
						<th class="q" width="45%"><span class="cart-txt-cart1 hide_txt print">商品資訊</span></th>
						<th class="q" width="10%"><span class="cart-txt-cart2 hide_txt print">原價</span></th>
						<th class="q" width="10%"><span class="cart-txt-cart3 hide_txt print">折扣價</span></th>
						<th class="q"><span class="cart-txt-cart4 hide_txt print">數量</span></th>
						<th class="q"><span class="cart-txt-cart5 hide_txt print">小計</span></th>
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
						<td data-cnt="數量">2</td>
						<td data-cnt="小計">NT$ 846</td>
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
						<td data-cnt="數量">1</td>
						<td data-cnt="小計">NT$ 18320</td>
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
						<td data-cnt="數量">1</td>
						<td data-cnt="小計">NT$ 800</td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>

					<tr class="cart-total">
						<td colspan="3" class="text-left" style="padding-left:1.2em; vertical-align:top;">
							使用優惠卷
							<!-- <input type="text" name="" id="" class="frm__field coupon" placeholder="請輸入優惠代碼"><button type="button" class="btn btn-style3">OK</button> -->
							<!-- 使用優惠卷後顯示的文字 ↓↓↓ -->
							<span class="txt-8" style="margin-left:1.2em;">ABC12344321（滿1000元折100元遞增計算）</span>
						</td>
						<td colspan="4">
							<ul class="cf">
								<li>
									<div class="col-md-6 col-xs-12 text-right">商品金額</div>
									<div class="col-md-6 col-xs-12 q text-right">NT$ 20124</div>
								</li>
								<li>
									<div class="col-md-6 col-xs-12 text-right">優惠卷折扣</div>
									<div class="col-md-6 col-xs-12 q text-right">- NT$ 0</div>
								</li>
								<li>
									<div class="col-md-6 col-xs-12 text-right">運費小計</div>
									<div class="col-md-6 col-xs-12 q text-right">NT$ 0</div>
								</li>
								<li class="line"></li>
								<li>
									<div class="col-md-6 col-xs-12 text-right">總計</div>
									<div class="col-md-6 col-xs-12 q text-right"><span class="txt-price2_1">NT$ 20,124</span></div>
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
							<h2 class="cart-txt-paymentInfo hide_txt print">付款資訊</h2>
							<div class="payment-list">
								<ul class="cf">
<li>
	<div class="col-md-3">
		<label for="payment8" class="frm__label" style="width:100%">貨到付款</label>
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

			<!-- 訂購人資訊  START -->
			<section class="ordering_info mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-ordering_info hide_txt print">訂購人資訊</h2>
							<div class="frm__wrap">
								<ul class="cf">
									<li>
										<label for="" class="frm__label ib">會員帳號：</label><p class="ib">test@babyunion.com.tw</p>
									</li>
									<li>
										<label for="" class="frm__label ib">會員姓名：</label><p class="ib">王小明</p>
									</li>
									<li>
										<label for="" class="frm__label ib">生日性別：</label><p class="ib">1980-10-10  先生</p>
									</li>
									<li>
										<label for="" class="frm__label ib">聯絡電話：</label><p class="ib">02-8787-8586</p>
									</li>
									<li>
										<label for="" class="frm__label ib">手機號碼：</label><p class="ib">0988111555</p>
									</li>
									<li>
										<label for="" class="frm__label ib">聯絡地址：</label><p class="ib">台北市松山區南京東路5段60號</p>
									</li>
								</ul>
							</div>
						</div><!-- /.mod-cartBlock-block  END  !! -->
					</div>
				</div>
			</section>

			<!-- 收件人資訊  START -->
			<section class="recipient_info mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-recipient_info hide_txt print">收件人資訊</h2>
							<div class="frm__wrap">
								<ul class="cf">
									<li>
										<label for="" class="frm__label">姓名性別：</label>
										<p class="ib">王小明  先生</p>
									</li>
									<li>
										<label for="" class="frm__label">手機號碼：</label>
										<p class="ib">0988111555</p>
									</li>
									<li>
										<label for="" class="frm__label">收件地址：</label>
										<p class="ib">台北市松山區南京東路5段60號</p>
									</li>
									<li>
										<label for="" class="frm__label">備註說明：</label>
										<p class="ib">貨到府前，請來電通知，謝謝。</p>
									</li>
								</ul>
							</div>
						</div><!-- /.mod-cartBlock-block  END  !! -->
					</div>
				</div>
			</section>

			<!-- 發票資訊  START -->
			<section class="invoice_info mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-invoice_info hide_txt print">發票資訊</h2>
							<div class="frm__wrap">
							<ul class="cf">
								<li>
									<label for="invoice2" class="frm__label q">三聯式發票（公司報帳用）</label>
									<b>，統一編號</b><p class="ib">22225555</p>
									<b>，抬頭</b><p class="ib">滿意企業有限公司</p>
								</li>
								<li>
									<b>發票寄送地址：</b>
									<p class="ib">同訂購人地址（台北市松山區南京東路5段60號）</p>
								</li>
							</ul>
							<p class="txt-6_1">※ 統一發票將於出貨時，依上述地址設定寄出。</p>
							<p class="txt-8_1">※ 依統一發票使用辦法規定：個人戶（二聯式）發票一經開立，不得任意更改為公司戶（三聯式）發票。</p>
							</div>
						</div><!-- /.mod-cartBlock-block  END  !! -->
					</div>
				</div>
			</section>

			<!-- 同意聲明  START -->
			<section class="agree mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-agree hide_txt print">同意聲明</h2>
							<div class="frm__wrap">
								<p class="col">我已仔細閱讀並明瞭小奶娃網站「<a href="" class="tdu txt-5">使用條款</a>」與「<a href="" class="tdu txt-5">隱私政策</a>」等所載內容及其意義，<br>茲同意該等條款規定，並願遵守網站現今、嗣後規範的各種規則。</p>
							</div>
						</div><!-- /.mod-cartBlock-block  END  !! -->
					</div>
				</div>
			</section>

		</form>

		<section class="btns">
			<button type="button" class="btn-style1 q ib btns-print hide_txt" onclick="javascript:window.print();">列印本頁</button>
			<a href="./" class="btn-style1 q ib btns-goindex hide_txt">返回首頁</a>
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

</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
