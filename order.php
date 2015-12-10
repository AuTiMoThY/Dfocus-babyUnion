<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "訂單查詢";
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
					<li><a href="member.php" class="btns-member1 hide_txt">會員資料</a></li>
					<li class="active"><a href="javascript:void 0;" class="btns-member2 hide_txt">訂單查詢</a></li>
				</ul>
			</div>
		</header>
		<div class="member-container">
			<div class="member-block member-order cf">
				<table class="order_table">
					<tr>
						<th width="19"><img src="<?php path_au('img', 'th_before.png'); ?>" alt=""></th>
						<th class="q"><span class="member-txt-order1 hide_txt">訂單編號/日期</span></th>
						<th class="q"><span class="member-txt-order2 hide_txt">付款方式</span></th>
						<th class="q"><span class="member-txt-order3 hide_txt">使用優惠券</span></th>
						<th class="q"><span class="member-txt-order4 hide_txt">金額</span></th>
						<th class="q"><span class="member-txt-order5 hide_txt">訂單狀態</span></th>
						<th class="q"><span class="member-txt-order6 hide_txt">付款狀態</span></th>
						<th class="q"><span class="member-txt-order7 hide_txt">出貨狀態</span></th>
						<th class="q"><span class="member-txt-order8 hide_txt">取消/退貨</span></th>
						<th width="19"><img src="<?php path_au('img', 'th_after.png'); ?>" alt=""></th>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td data-cnt="訂單編號/日期"><a href="order_cnt.php">201510100726069686</a><br>2015-10-01</td>
						<td data-cnt="付款方式">刷卡一次付清</td>
						<td data-cnt="使用優惠券">ABC12344321</td>
						<td data-cnt="金額">18,124</td>
						<td data-cnt="訂單狀態">訂單成立</td>
						<td data-cnt="付款狀態">已付款</td>
						<td data-cnt="出貨狀態">已出貨<br><a href="">配送查詢</a></td>
						<td data-cnt="取消/退貨"><a href="">申請取消訂單 / 退貨</a></td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>
					<tr>
						<td>&nbsp;</td>
						<td data-cnt="訂單編號/日期"><a href="order_cnt.php">201510100726069686</a><br>2015-09-25</td>
						<td data-cnt="付款方式">轉帳匯款</td>
						<td data-cnt="使用優惠券">ABC12344321</td>
						<td data-cnt="金額">18,124</td>
						<td data-cnt="訂單狀態">訂單成立</td>
						<td data-cnt="付款狀態">未付款</td>
						<td data-cnt="出貨狀態">未處理</td>
						<td data-cnt="取消/退貨"><a href="">申請取消訂單 / 退貨</a></td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>
					<tr>
						<td>&nbsp;</td>
						<td data-cnt="訂單編號/日期"><a href="order_cnt.php">201510100726069686</a><br>2015-09-23</td>
						<td data-cnt="付款方式">3期分期付款</td>
						<td data-cnt="使用優惠券">ABC12344321</td>
						<td data-cnt="金額">18,124</td>
						<td data-cnt="訂單狀態">訂單成立</td>
						<td data-cnt="付款狀態">已付款</td>
						<td data-cnt="出貨狀態">商品已送達<br><a href="">配送查詢</a></td>
						<td data-cnt="取消/退貨">已申請</td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>
					<tr>
						<td>&nbsp;</td>
						<td data-cnt="訂單編號/日期"><a href="order_cnt.php">201510100726069686</a><br>2015-08-21</td>
						<td data-cnt="付款方式">刷卡一次付清</td>
						<td data-cnt="使用優惠券">ABC12344321</td>
						<td data-cnt="金額">18,124</td>
						<td data-cnt="訂單狀態">訂單成立</td>
						<td data-cnt="付款狀態">已付款</td>
						<td data-cnt="出貨狀態">處理中</td>
						<td data-cnt="取消/退貨"><a href="">申請取消訂單 / 退貨</a></td>
						<td>&nbsp;</td>
					</tr><tr><td colspan="10" class="line"></td></tr>
				</table>
				<div class="order_total">
					共 4 筆訂單
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

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
