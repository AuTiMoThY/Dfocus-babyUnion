<?php 

// 暫時用的商品"子"分類

$tmp_subpdt_arr = array(
array('sub_id' => 1, 'sub_name' => '嬰幼兒手推車'),
array('sub_id' => 2, 'sub_name' => 'ABC 手推車配件'),
array('sub_id' => 3, 'sub_name' => '(兩行文字的狀況)(兩行文字的狀況)(兩行文字的狀況)'),
array('sub_id' => 4, 'sub_name' => 'Aprica 手推車配件'),
array('sub_id' => 5, 'sub_name' => 'Britax 手推車配件'),
array('sub_id' => 6, 'sub_name' => 'NUNA 手推車配件'),
array('sub_id' => 7, 'sub_name' => '他牌手推車配件'),
array('sub_id' => 8, 'sub_name' => '通用手推車配件'),
array('sub_id' => 9, 'sub_name' => '揹巾'),
array('sub_id' => 10, 'sub_name' => '背包 | 提袋 | 行李箱'),
array('sub_id' => 11, 'sub_name' => '外出用配件'),
array('sub_id' => 12, 'sub_name' => '防走失用品'),
array('sub_id' => 13, 'sub_name' => '推車用涼蓆 | 涼墊'),
array('sub_id' => 14, 'sub_name' => '(兩行文字的狀況)涼風扇')
                        );

// 暫時用的商品"主"分類
$tmp_pdt_arr = array (
array('id'=>1, 'name' => '迪士尼主題館', 'sub' => $tmp_subpdt_arr),
array('id'=>2, 'name' => '沐浴衛生用品沐浴衛生用品沐浴衛生用品沐浴衛生用品', 'sub' => $tmp_subpdt_arr),
array('id'=>3, 'name' => '嬰幼兒玩具', 'sub' => $tmp_subpdt_arr),
array('id'=>4, 'name' => '奶瓶及奶嘴', 'sub' => ''),
array('id'=>5, 'name' => '清潔保養系列', 'sub' => $tmp_subpdt_arr),
array('id'=>6, 'name' => '安撫系列', 'sub' => $tmp_subpdt_arr),
array('id'=>7, 'name' => '哺育用品', 'sub' => ''),
array('id'=>8, 'name' => '護理保養類', 'sub' => $tmp_subpdt_arr),
array('id'=>9, 'name' => '安全防護用品', 'sub' => $tmp_subpdt_arr),
array('id'=>10, 'name' => '哺育用家電', 'sub' => $tmp_subpdt_arr),
array('id'=>11, 'name' => '家用清潔產品', 'sub' => $tmp_subpdt_arr),
array('id'=>12, 'name' => '食品及飲品', 'sub' => $tmp_subpdt_arr),
array('id'=>13, 'name' => '吸乳器', 'sub' => $tmp_subpdt_arr),
array('id'=>14, 'name' => '寢具用品', 'sub' => $tmp_subpdt_arr),
array('id'=>15, 'name' => '媽媽用品', 'sub' => $tmp_subpdt_arr),
array('id'=>16, 'name' => '棉紡品', 'sub' => $tmp_subpdt_arr),
array('id'=>17, 'name' => '戶外用品', 'sub' => $tmp_subpdt_arr),
array('id'=>18, 'name' => '精選品牌', 'sub' => $tmp_subpdt_arr),
array('id'=>19, 'name' => '居家用品居家用品居家用品居家用品居家用品居家用品', 'sub' => $tmp_subpdt_arr),
array('id'=>20, 'name' => '汽車安全座椅系列汽車安全汽車安全座椅系列汽車安全', 'sub' => $tmp_subpdt_arr),
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
	echo "		<li class=\"subNav-item item{$NavLen}_{$subNavLen} ib\">";
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