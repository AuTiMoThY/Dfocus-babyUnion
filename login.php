<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "會員登入";
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

<body class="member_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
 include_once INC_PATH.'header.php';
 ?>

<main class="member_page-main">
<section class="page_path container">
	 <div class="icons-home2 ib"></div>&nbsp;&nbsp;&gt;
	 &nbsp;&nbsp;<?php echo $page_title; ?>&nbsp;&nbsp;
</section>
<div class="container">
	<header class="login-header">
		<h1 class="iconTxt-title-member hide_txt">會員專區  MEMBER AREA</h1>
	</header>
	<div class="login-block cf">
		<div class="col-md-6">
			<section class="login-sign_in">
				<header>
					<h2 class="member-m_login hide_txt">會員登入</h2>
					<button type="button" class="btns-fb_login btn-style1 hide_txt">FB快速註冊</button>
				</header>
				<form action="dist/gotomember.php" class="frm__wrap">
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
					</li>
				</ul>
				</form>
			</section>
			<section class="login-forget">
				<header>
					<h2 class="member-m_forget hide_txt ib">忘記密碼</h2>
					<p class="txt-6 ib">別擔心！<br>請輸入您的小奶娃會員帳號，<br>系統會將重置資訊以Email方式寄發給您。</p>
				</header>
				<form action="" class="frm__wrap">
				<ul class="cf">
					<li>
						<label for="m_id_forget" class="frm__label">會員帳號：</label>
						<input type="text" name="" id="m_id_forget" class="frm__field" placeholder="請輸入e-mail帳號">
					</li>
					<li>
						<label for="" class="empty"></label>
						<button type="submit" class="btns-submit1 frm__submit btn-style1 hide_txt">送出申請</button>
					</li>
				</ul>
				</form>
			</section>
		</div>
		<div class="col-md-6">
			<section class="login-sign_up">
				<header>
					<h2 class="member-m_forget hide_txt ib">加入會員</h2>
					<p class="txt-6 ib">歡迎加入小奶娃會員，<br>立即加入會員即可享有各項會員專屬服務 !</p>
					<div class="member-title-register hide_txt">使用下表立即註冊會員</div>
					<button type="button" class="btns-fb_register btn-style1 hide_txt">FB快速註冊</button>
				</header>
				<form action="" class="frm__wrap">
				<ul class="cf">
					<li>
						<label for="m_id_signup" class="frm__label m_id_signup">會員帳號：</label>
						<input type="text" name="" id="m_id_signup" class="frm__field" placeholder="請輸入e-mail帳號">
					</li>
					<li>
						<label for="m_pw_signup" class="frm__label m_pw_signup">會員密碼：</label>
						<input type="text" name="" id="m_pw_signup" class="frm__field" placeholder="請輸入您的密碼">
					</li>
					<li>
						<label for="m_pw_signup2" class="frm__label m_pw_signup2">確認密碼：</label>
						<input type="text" name="" id="m_pw_signup2" class="frm__field" placeholder="再輸入一次密碼">
					</li>
					<li>
						<label for="m_name_signup" class="frm__label m_name_signup">會員姓名：</label>
						<input type="text" name="" id="m_name_signup" class="frm__field" placeholder="必填">
					</li>
					<li>
						<label for="m_bd_signup" class="frm__label m_bd_signup">生日性別：</label>
						<input type="text" name="" id="m_bd_signup" class="frm__field" placeholder="請選擇日期">
						<input type="radio" name="sex" value="M" id="sexM" class="frm__radio" checked>
						<label for="sexM" class="frm__label">男</label>
						<input type="radio" name="sex" value="F" id="sexF" class="frm__radio">
						<label for="sexF" class="frm__label">女</label>
					</li>
					<li>
						<label for="m_tel_signup" class="frm__label m_tel_signup">聯絡電話：</label>
						<input type="text" name="" id="m_tel_signup" class="frm__field" placeholder="選填，範例：02-8787-8586">
					</li>
					<li>
						<label for="m_phone_signup" class="frm__label m_phone_signup">手機號碼：</label>
						<input type="text" name="" id="m_phone_signup" class="frm__field" placeholder="必填，範例：0988111222">
					</li>
					<li>
						<label for="m_addr_signup" class="frm__label m_addr_signup">聯絡地址：</label>
						<input type="text" name="" id="m_addr_signup" class="frm__field" placeholder="選填，商品遞送僅限台灣地區">
					</li>
					<li>
						<label for="captcha" class="frm__label captcha">驗證碼：</label>
						<input type="text" name="" id="captcha" class="frm__field" placeholder="請輸入右圖文字">
						<img src="dist/captcha.php" alt="" class="ib">
						<button type="button" class="ib btns-re_captcha btn"></button>
					</li>
					<li class="agree">
						<input type="checkbox" name="" id="" class="frm__checkbox col">
						<p class="txt-6 col">我已仔細閱讀並明瞭小奶娃網站「<a href="" class="txt-5 tdu">使用條款</a>」與「<a href="" class="txt-5 tdu">隱私政策</a>」等所載內容及其意義，茲同意該等條款規定，並願遵守網站現今、嗣後規範的各種規則。</p>
					</li>
					<li>
						<label for="" class="empty"></label>
						<button type="submit" class="btns-submit2 frm__submit btn-style1 hide_txt">確認送出註冊</button>
					</li>
				</ul>
				</form>
			</section>
		</div>
	</div>
	<div class="login-block-pattern">
		<div class="pattern-tree_bee2"></div>
		<div class="pattern-trees"></div>
		<div class="pattern-fox"></div>
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
$(function() {
	var star = "<i class=\"fa fa-star\"></i>";
	var staro = "<i class=\"fa fa-star-o\"></i>";
	var star0 = staro+staro+staro+staro+staro;
	var star1 = star+staro+staro+staro+staro;
	var star2 = star+star+staro+staro+staro;
	var star3 = star+star+star+staro+staro;
	var star4 = star+star+star+star+staro;
	var star5 = star+star+star+star+star;
	$('.js-stars').each(function(){
		var starNum = $(this).data('star');
		// console.log(starNum);
		switch(starNum){
			case "stars-0":
				$(this).append(star0);
				break;
			case "stars-1":
				$(this).append(star1);
				break;
			case "stars-2":
				$(this).append(star2);
				break;
			case "stars-3":
				$(this).append(star3);
				break;
			case "stars-4":
				$(this).append(star4);
				break;
			case "stars-5":
				$(this).append(star5);
				break;
			default:
				$(this).append(star5);
				break;
		}

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
