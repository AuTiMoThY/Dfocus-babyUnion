<?php 

// 暫時用的商品"主"分類
$tmp_pdt_arr = array (
array('id'=>1, 'name' => '迪士尼主題館'),
array('id'=>2, 'name' => '沐浴衛生用品'),
array('id'=>3, 'name' => '嬰幼兒玩具'),
array('id'=>4, 'name' => '奶瓶及奶嘴'),
array('id'=>5, 'name' => '清潔保養系列'),
array('id'=>6, 'name' => '安撫系列'),
array('id'=>7, 'name' => '哺育用品'),
array('id'=>8, 'name' => '護理保養類'),
array('id'=>9, 'name' => '安全防護用品'),
array('id'=>10, 'name' => '哺育用家電'),
array('id'=>11, 'name' => '家用清潔產品'),
array('id'=>12, 'name' => '食品及飲品'),
array('id'=>13, 'name' => '吸乳器'),
array('id'=>14, 'name' => '寢具用品'),
array('id'=>15, 'name' => '媽媽用品'),
array('id'=>16, 'name' => '棉紡品'),
array('id'=>17, 'name' => '戶外用品'),
array('id'=>18, 'name' => '精選品牌'),
array('id'=>19, 'name' => '居家用品居家用品居家用品'),
array('id'=>20, 'name' => '汽車安全座椅系列汽車安全'),
array('id'=>21, 'name' => '熱門品牌熱門品牌熱門品牌')
);

// foreach ($tmp_pdt_arr as $key => $value) {
// 	echo $value['name']."<br>";
// }

/**
* 
*/
class PageUrlAu {
	public $projectName  = "baby";
	public $webPageBuild = "javascript: alert('網頁建置中，敬請稍待!');";
	public $index        = "index.php";
	public $product      = "product.php"; // 商品分類
	public $about        = "about.php"; // 品牌故事
	public $faq          = "faq.php"; // 常見問題
	public $service      = "service.php";  // 客服中心 = 聯絡我們+使用條款+隱私政策

	public $news         = "news.php";  // 最新消息
	public $member       = "member.php";  // 會員資料
	public $member_login = "member_login.php";  // 會員登入
	public $member_order = "member_order.php";  // 訂單查詢
	public $cart         = "cart.php";  // 購物車

	// public $contact      = "contact.php"; // 聯絡我們
	// public $terms        = "terms.php";  // 使用條款
	// public $privacy      = "privacy.php";  // 隱私政策
}
/**
* 
*/
class navAu extends PageUrlAu {

	function navListAu($headerOrFooter) {
		global $tmp_pdt_arr;
		$product_sub = $tmp_pdt_arr;


		$Nav = array(
			'商品分類' => $product_sub,
			'品牌故事' => $this->about,
			'聯絡我們' => $this->contact,
			'常見問題' => $this->faq
						);
		$NavLen = 0;
		$NavLen ++;


		if ($headerOrFooter == 'headerNav') {
			foreach ($Nav as $item => $url) {
						# code...
echo "<li class=\"main_nav-item nav-$this->projectName item$NavLen\">";
if (is_array($url)) {
echo "	<a href=\"javascript:void 0;\">";
}else{
echo "	<a href=\"$url\">";
}
echo "		<span class=\"wrap\"><i class=\"main_nav-icon\"></i><span class=\"main_nav-txt\">$item</span></span>";
echo "	</a>";
// 子選單
if (is_array($url)) {
	$subNavLen = 0;
	$subNavLen ++;
	echo "	<ul class=\"subNav js-subNav cf\">";
		foreach ($url as $key => $value) {
	echo "		<li class=\"subNav-item item{$NavLen}_{$subNavLen} col-md-4\">";
	echo "			<a href=\"$this->product\">{$value['name']}</a>";
	echo "		</li>";
	++$subNavLen;
		}
	echo "		<li class=\"padding\"></li>";
	echo "	</ul>";
}
echo "</li>";

				++$NavLen;
			}
		} elseif ($headerOrFooter == 'footerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="footer_nav-item nav-$this->projectName item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="footer_nav-icon"></span><span>$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		}
	}
}

/**
* function
*/

function headerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='headerNav');

}

function footerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='footerNav');

}

function webPageUrlAu($url){
	$PageUrlAu = new PageUrlAu();
	echo $PageUrlAu->{$url};
}



 ?>