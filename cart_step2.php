<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "STEP2 填寫訂購資料";
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

<body class="cart_page cart2_page">
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
			<div class="cart-steps cart-step2 hide_txt">STEP2 填寫訂購資料</div>
		</header>
		<div class="cart-container">
		<form action="dist/gotocart3.php" id="cart2Form">

			<!-- 訂購人資訊  START -->
			<section class="ordering_info mod-cartBlock">
				<div class="mod-cartBlock-wrap">
					<div class="mod-cartBlock-container">
						<div class="mod-cartBlock-block">
							<h2 class="cart-ordering_info hide_txt">訂購人資訊</h2>
							<!-- 已登入時顯示  ↓↓↓ -->
							<p>※若欲修改會員資料，請至「<a href="" class="tdu txt-5">會員專區 > 會員資訊</a>」修改編輯。</p>
							<!-- 已登入時顯示  ↑↑↑ -->
							<div class="frm__wrap">
							<!-- 首購未註冊 顯示  ↓↓↓ -->
								<ul class="cf">
									<li>
										<label for="" class="frm__label">會員帳號：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="請輸入e-mail帳號">
										<span class="txt-6_1 ib">訂單成立後，電子郵件即為您的小奶娃會員帳號。</span>
									</li>
									<li>
										<label for="" class="frm__label">會員密碼：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="請輸入您的密碼">
										<span class="txt-6_1 ib">請熟記密碼，此為往後登入小奶娃的會員密碼，並請定期更換密碼設定。</span>
									</li>
									<li>
										<label for="" class="frm__label">確認密碼：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="再輸入一次密碼">
									</li>
									<li>
										<label for="" class="frm__label">會員姓名：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="必填">
									</li>
									<li>
										<label for="" class="frm__label">生日性別：</label>
										<input type="text" name="" id="" class="frm__field" style="width:190px;" placeholder="請選擇日期">
										<input type="radio" name="sex" value="M" id="sexM" class="frm__radio" checked>
										<label for="sexM" class="frm__label q">男</label>
										<input type="radio" name="sex" value="F" id="sexF" class="frm__radio">
										<label for="sexF" class="frm__label q">女</label>
									</li>
									<li>
										<label for="" class="frm__label">聯絡電話：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="選填，範例：02-8787-8586">
									</li>
									<li>
										<label for="" class="frm__label">手機號碼：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="必填，範例：0988111222">
									</li>
									<li>
										<label for="" class="frm__label">聯絡地址：</label>
										<input type="text" name="" id="" class="frm__field" placeholder="選填，商品遞送僅限台灣地區">
									</li>

								</ul>
							<!-- 首購未註冊 顯示  ↑↑↑ -->
							<!-- 已登入時顯示  ↓↓↓ -->
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
						<!-- 已登入時顯示  ↑↑↑ -->
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
							<h2 class="cart-recipient_info hide_txt">收件人資訊</h2>
							<div class="check_same">
								<input type="checkbox" name="" id="same" class="frm__checkbox">
								<label for="same" class="frm__label">收件人同上請打勾</label>
							</div>
							<div class="frm__wrap">
								<ul class="cf">
									<li>
										<label for="" class="frm__label">姓名性別：</label>
										<input type="text" name="" id="" class="frm__field" style="width:190px;">
										<input type="radio" name="sex2" value="M" id="sexM2" class="frm__radio" checked>
										<label for="sexM2" class="frm__label q">男</label>
										<input type="radio" name="sex2" value="F" id="sexF2" class="frm__radio">
										<label for="sexF2" class="frm__label q">女</label>
									</li>
									<li>
										<label for="" class="frm__label">手機號碼：</label>
										<input type="text" name="" id="" class="frm__field" style="width:315px;" placeholder="必填，範例：0988111222">
									</li>
									<li>
										<label for="" class="frm__label">收件地址：</label>
										<input type="text" name="" id="" class="frm__field" placeholder="必填，商品遞送僅限台灣地區">
									</li>
									<li>
										<label for="" class="frm__label">備註說明：</label>
										<textarea name="" id="" class="frm__textarea"></textarea>
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
							<h2 class="cart-invoice_info hide_txt">發票資訊</h2>
							<div class="frm__wrap">
							<ul class="cf">
								<li>
									<input type="radio" name="invoice" id="invoice1" class="frm__radio" checked>
									<label for="invoice1" class="frm__label q">二聯式發票</label>
									<input type="radio" name="invoice" id="invoice2" class="frm__radio">
									<label for="invoice2" class="frm__label q">三聯式發票（公司報帳用）</label>
									，統一編號<input type="text" name="" id="" class="frm__field" style="width:190px;">
									，抬頭<input type="text" name="" id="" class="frm__field" style="width:190px;">
								</li>
								<li>
									發票寄送地址：
									<input type="radio" name="invoiceAddr" id="invoiceAddr1" class="frm__radio" checked>
									<label for="invoiceAddr1" class="frm__label q">同訂購人地址</label>
									<input type="radio" name="invoiceAddr" id="invoiceAddr2" class="frm__radio">
									<label for="invoiceAddr2" class="frm__label q">同收件人地址</label>
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
							<h2 class="cart-agree hide_txt">同意聲明</h2>
							<div class="frm__wrap">
								<input type="checkbox" name="" id="" class="frm__checkbox col">
								<p class="col">我已仔細閱讀並明瞭小奶娃網站「<a href="" class="tdu txt-5">使用條款</a>」與「<a href="" class="tdu txt-5">隱私政策</a>」等所載內容及其意義，<br>茲同意該等條款規定，並願遵守網站現今、嗣後規範的各種規則。</p>
							</div>
						</div><!-- /.mod-cartBlock-block  END  !! -->
					</div>
				</div>
			</section>

		</form>
		
		<section class="btns">
			<a href="javascript:history.go(-1)" class="btn-style1 q ib btns-prev hide_txt">回上一步</a>
			<button type="button" class="btn-style1 q ib btns-next hide_txt" onclick="cart2FormSubmit();">下一步</button>
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
function cart2FormSubmit(){
	$("#cart2Form").submit();
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
