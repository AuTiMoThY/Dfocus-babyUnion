<?php
// fb-root
//  include_once INC_PATH.'fbscript.php';
 ?>

<div id="top"></div>
<header class="global_hd">
	<div class="container">
		<header id="logo" class=""><a href="./" title="小奶娃"><img src="dist/images/logo.png" alt=""></a></header>
		<div class="train_wrap ">
			<nav class="main_nav left">
				<ul class="cf">
				<?php headerNavAu(); ?>
				</ul>
			</nav>
			<div class="quick_search left">
				<div class="quick_search-bg"></div>
				<div class="quick_search-frm">
					<form action="dist/gotoresult.php" method="" id="">
						<input type="text" name="" id="" class="frm__field" placeholder="請輸入商品名稱">
						<button type="submit" class="frm__submit btn">
							<svg class="icon svg_icon-magnifier">
							  <use xlink:href="#shape-magnifier"></use>
							</svg>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<aside id="floatMenu" class="float_menu">
		<div id="floatMenuCtrl" class="float_menu-ctrl">
			快速選單
		</div>
		<header class="pattern-level_crossing"></header>
		<div class="float_menu-wrap">
			<div class="float_menu-container">
				<div class="float_menu-block">
					<ul class="cf">
						<li><a href="login.php">
							<span class="inner"><i class="icons-float1"></i>
								<span class="txt">會員登入</span></span>
						</a></li>
						<li><a href="order.php">
							<span class="inner"><i class="icons-float2"></i>
								<span class="txt">訂單查詢</span></span>
						</a></li>
						<li><a href="member.php">
							<span class="inner"><i class="icons-float3"></i>
								<span class="txt">會員資料</span></span>
						</a></li>
						<li><a href="cart_step1.php">
							<span class="inner"><i class="icons-float4"></i>
								<span class="txt">購物車</span></span>
						</a></li>
					</ul>
				</div>
			</div>
		</div>
		<footer id="gototop" class="pattern-gotop"><a href="#top" class=" hide_txt">TOP</a></footer>
	</aside>
</div>