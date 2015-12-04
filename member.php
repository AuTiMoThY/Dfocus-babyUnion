<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "會員資料";
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
	<div class="member-wrap">
		<header>
			<h1 class="iconTxt-title-member hide_txt">會員專區  MEMBER AREA</h1>
			<div class="member-menu">
				<ul class="cf">
					<li class="active"><a href="javascript:void 0;" class="btns-member1 hide_txt">會員資料</a></li>
					<li><a href="order.php" class="btns-member2 hide_txt">訂單查詢</a></li>
				</ul>
			</div>
		</header>
		<div class="member-container">
			<div class="member-block cf">
				<div class="col-md-6 member-modify">
					<header>
						<h2 class="member-title-modify hide_txt">修改會員資料</h2>
					</header>
					<form action="" class="frm__wrap">
					<ul class="cf">
						<li>
							<label for="" class="frm__label ib">會員帳號：</label>
							<p class="txt-6 ib">test@babyunion.com.tw</p>
						</li>
						<li>
							<label for="m_name" class="frm__label ib">會員姓名：</label>
							<input type="text" name="" id="m_name" class="frm__field" value="王小明">
						</li>
						<li>
							<label for="" class="frm__label ib">生日性別：</label>
							<p class="txt-6 ib">1980-10-10&nbsp;&nbsp;&nbsp;先生</p>
						</li>
						<li>
							<label for="m_tel" class="frm__label ib">聯絡電話：</label>
							<input type="text" name="" id="m_tel" class="frm__field" placeholder="選填，範例：02-8787-8586" value="02-8787-8586">
						</li>
						<li>
							<label for="m_phone" class="frm__label ib">手機號碼：</label>
							<input type="text" name="" id="m_phone" class="frm__field" value="0988111222">
						</li>
						<li>
							<label for="m_addr" class="frm__label ib">聯絡地址：</label>
							<input type="text" name="" id="m_addr" class="frm__field" placeholder="選填，商品遞送僅限台灣地區" value="">
						</li>
						<li>
							<label for="" class="empty"></label>
							<button type="submit" class="btns-confirm1 frm__submit btn-style1 hide_txt">確認修改</button>
						</li>
					</ul>
					</form>
				</div>
				<div class="col-md-6">
					<header>
						<h2 class="member-title-change hide_txt">修改密碼</h2>
					</header>
					<form action="" class="frm__wrap">
						<ul class="cf">
							<li>
								<label for="" class="frm__label ib">舊的密碼：</label>
								<input type="text" name="" id="" class="frm__field ib" placeholder="請輸入您的舊密碼">
							</li>
							<li>
								<label for="" class="frm__label ib">更新密碼：</label>
								<input type="text" name="" id="" class="frm__field ib" placeholder="請輸入您的更新密碼">
							</li>
							<li>
								<label for="" class="frm__label ib">確認密碼：</label>
								<input type="text" name="" id="" class="frm__field ib" placeholder="再輸入一次密碼">
							</li>
							<li>
								<label for="" class="empty"></label>
								<button type="submit" class="btns-confirm1 frm__submit btn-style1 hide_txt">確認修改</button>
							</li>
						</ul>
					</form>
				</div>
			</div>
			<div class="member-pattern"></div>
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
