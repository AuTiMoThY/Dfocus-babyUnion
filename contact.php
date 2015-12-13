<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "小奶娃客服中心";
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

<body class="contact_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
 include_once INC_PATH.'header.php';
 ?>

<main class="contact_page-main">
<section class="page_path container">
	 <div class="icons-home2 ib"></div>&nbsp;&nbsp;&gt;
	 &nbsp;&nbsp;<?php echo $page_title; ?>&nbsp;&nbsp;
</section>
<div class="container">
	<div class="contact-wrap">
		<header>
			<h1 class="contact-title_contact hide_txt">小奶娃‧客服中心</h1>
			<div id="gotoSec" class="btns">
				<ul class="cf">
					<li><a href="#contactformSec" class="contact-btn_contactform hide_txt">聯絡我們</a></li>
					<li><a href="#tremsSec" class="contact-btn_trems hide_txt">使用條款</a></li>
					<li><a href="#privacySec" class="contact-btn_privacy hide_txt">隱私政策</a></li>
				</ul>
			</div>
		</header>
		<div class="contact-container">
			<hgroup class="babyunion-info">
				<h1 class="contact-babyunion hide_txt">Babyunion 小奶娃婦幼用品股份有限公司</h1>
				<a href="tel:02-8787-8586" class="contact-phone0287878586 hide_txt">02-8787-8586</a>
				<div class="contact-info">
					<p class="hidden">/ 服務時段 /<br>
						週一~週五 上午09:00~12:00 下午13:30~17:00<br>
						/ 客服信箱 /<br>
						babyunion.tw@gmail.com<br>
						/ 服務中心 /<br>
						台北市南京東路五段60號B1</p>
				</div>
			</hgroup>
			<section id="contactformSec" class="contactform">
				<div class="contactform-wrap">
					<div class="contactform-container">
						<h2 class="contact-title-contact_form hide_txt">聯絡我們-線上聯絡表單</h2>
						<div class="contactform-block">
<p>※感謝您的蒞臨，如果您對小奶娃婦幼用品有任何問題，歡迎於<strong>上班時間09:00~12:00 及 13:30~17:00</strong>，撥打客服專線<strong>02-87878586</strong>，或是利用以下聯絡表單與我們聯繫，我們將會派專人盡快與您連絡，謝謝。</p>
<form action="" class="frm__contact">
	<table>
		<tr>
			<td><label for="" class="frm__label">公司／單位</label></td>
			<td><input type="text" name="" id="" class="frm__field"></td>
		</tr>
		<tr class="required">
			<td><label for="" class="frm__label">您的姓名</label></td>
			<td><input type="text" name="" id="" class="frm__field" placeholder="必填項目"></td>
		</tr>
		<tr>
			<td><label for="" class="frm__label">聯絡電話</label></td>
			<td><input type="text" name="" id="" class="frm__field"></td>
		</tr>
		<tr class="required">
			<td><label for="" class="frm__label">E-mail</label></td>
			<td><input type="text" name="" id="" class="frm__field" placeholder="必填項目"></td>
		</tr>
		<tr class="required">
			<td><label for="" class="frm__label">詢問主題</label></td>
			<td>
				<select name="" id="" class="frm__select">
					<option value="">---請選擇---</option>
					<option value="">商品詢問</option>
					<option value="">退換貨相關</option>
					<option value="">合作提案</option>
					<option value="">ATM已付款通知</option>
					<option value="">其他</option>
				</select>
			</td>
		</tr>
		<tr class="required">
			<td style="vertical-align: top;"><label for="" class="frm__label">訊息內容</label></td>
			<td><textarea name="" id="" class="frm__textarea"></textarea></td>
		</tr>
		<tr class="required">
			<td><label for="" class="frm__label">輸入驗證碼</label></td>
			<td>
				<input type="text" name="" id="captcha" class="frm__field" placeholder="請輸入右圖文字">
				<img src="dist/captcha.php" alt="" class="ib">
				<button type="button" class="ib btns-re_captcha btn"></button>
			</td>
		</tr>
	</table>
	<button type="submit" class="btn btn-style4">送出表單</button>
</form>
						</div>
					</div>
				</div>
			</section>
			<section id="tremsSec" class="trems mod-contactblock">
				<div class="trems-wrap mod-contactblock-wrapper">
					<div class="trems-container mod-contactblock-container">
						<h2 class="contact-title-terms_of_use hide_txt">小奶娃網站服務條款</h2>
						<div class="trems-block mod-contactblock-block">
<p>
歡迎您使用小奶娃婦幼用品網站<br>小奶娃係依據本服務條款提供小奶娃（http://www.babyunion.com.tw/）服務 (以下簡稱「本服務」)。當您使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。此外，當您使用小奶娃的特定服務時，可能會依據該特定服務之性質，而須遵守小奶娃所另行公告之服務條款或相關規定。此另行公告之服務條款或相關規定（包括但不限於反垃圾郵件政策）亦均併入屬於本服務條款之一部分。小奶娃有權於任何時間修改或變更本服務條款之內容，建議您隨時注意該等修改或變更。您於任何修改或變更後繼續使用本服務，視為您已閱讀、瞭解並同意接受該等修改或變更。如果您不同意本服務條款的內容，或者您所屬的國家或地域排除本服務條款內容之全部或一部時，您應立即停止使用本服務。<br>若您為未滿二十歲，除應符合上述規定外，並應於您的家長（或監護人）閱讀、瞭解並同意本服務條款之所有內容及其後修改變更後，方得使用或繼續使用本服務。當您使用或繼續使用本服務時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本服務條款之所有內容及其後修改變更。</p>
<h3>與第三人網站的連結</h3>
<p>本服務或協力廠商可能會提供連結至其他網站或網路資源的連結。您可能會因此連結至其他業者經營的網站，但不表示小奶娃與該等業者有任何關係。其他業者經營的網站均由各該業者自行負責，不屬小奶娃控制及負責範圍之內。小奶娃對任何檢索結果或外部連結，不擔保其合適性、可依賴性、即時性、有效性、正確性及完整性。您也許會檢索或連結到一些令您厭惡或不需要的網站，這是網際網路運作的可能結果，遇到此類情形時，小奶娃建議您不要瀏覽或儘速離開該等網站。您並同意小奶娃無須為您連結至非屬於小奶娃之網站所生之任何損害，負損害賠償之責任。</p>
<h3>您的註冊義務</h3>
<p>為了能使用本服務，會員同意以下事項：<br>
依本服務註冊表之提示提供會員本人正確、最新的資料，且不得以第三人之名義註冊為會員。每位會員僅能註冊登錄一個帳號，不可重覆註冊登錄。<br>
維持並更新您個人資料，確保其為正確、最新及完整。若您提供任何錯誤、不實或不完整的資料，本公司有權暫停或終止您的帳號，並拒絕您使用本服務之全部或一部份。<br>
..........................(以下省略,請提供使用條款完整文案!)
</p>
						</div>
					</div>
				</div>
			</section>
			<section id="privacySec" class="privacy mod-contactblock">
				<div class="privacy-wrap mod-contactblock-wrapper">
					<div class="privacy-container mod-contactblock-container">
						<h2 class="contact-title-privacy_policy hide_txt">隱私權政策</h2>
						<div class="privacy-block mod-contactblock-block">
<p>小奶娃婦幼用品網站(以下簡稱「本網站」)絕對尊重各位使用者之隱私權，請詳閱下列本網站的隱私權保護政策，以協助您瞭解本網站蒐集您個人資料之目的、類別、利用範圍及方式以及您所得行使之權利。<br>本網站有權隨時修訂本隱私權保護政策暨個資蒐集告知及相關告知事項，並得於修訂後公布於本網站之適當位置或更新本網頁內容，不另行個別通知。您可以隨時在本網站詳閱修訂後的隱私權保護政策暨個資蒐集告知及相關說明事項。</p>
<h3 class="q">個人資料之蒐集目的、方式與適用範圍</h3>
<p>
1. 本網站蒐集您個人資料的目的在於進行客戶與會員管理服務、商業與技術資訊、網路購物及其他電子商務服務、本網站及商品之行銷、購買商品之運送及交付、統計調查與分析、資訊與資料庫管理。<br>
2. 瀏覽本網站不必輸入您的個人資料。但本網站將依照個別服務性質取得使用者之姓名、地址、住家電話號碼、行動電話號碼、退款轉帳帳戶資訊等金融機構帳戶之號碼與姓名、身分證字號、外籍人士護照號碼、出生年月日、性別、年齡、國籍、使用消費品之種類及服務之細節、個人或家庭之消費模式（包含瀏覽cookies記錄）等。使用者有自由選擇提供個人資料之權利，但若您不提供，本網站將無法提供相關服務，亦可能無法履行與您間的會員契約權利義務。<br>
3. 本網站為保護您的隱私及權益，當您使用信用卡方式進行購物結帳時，付款作業系統將直接連結至信用卡收單銀行之網路刷卡介面，本網站不會記錄您在該介面輸入的任何資料，以維護您信用卡資料之機密性。<br>
4. 本網站為提供給您更快速、方便的退款服務，當您的訂單有退款情況時，本網站會請您提供訂單購買人或收件人的退款帳戶資料：銀行名稱、帳號及戶名。本網站僅將您的退款帳戶資訊，利用於退款服務。<br>
5. 除上述個人資料類別外，為了便利使用者，本網站可能使用Cookies技術，進行電子商務網站管理及記錄您於本網站中的活動紀錄，以便於提供更適合使用者個人需要之服務。Cookies是讓網站伺服器 (Web Server) 能夠辨識使用者的資料。一般網頁被讀取時，伺服器無法辨識使用者是否曾經來過以及來過的時間次數等資料，於是瀏覽網頁時，伺服器將一段簡短資訊經由瀏覽器寫入使用者硬碟，下次瀏覽器在要求伺服器傳回網頁之前，會將Cookies的資料先傳給伺服器，伺服器可依據Cookies的資料來判斷使用者，有了使用者的造訪資料，網頁伺服器可分析並針對不同讀者之不同喜好，執行不同的動作或傳回特定的資訊。<br>
本網站會在下列情況下，在您瀏覽器中寫入並讀取Cookies：<br>
●為提供更好、更個人化的服務，並方便您參與個人化的互動活動，例如儲存您偏好的特定領域資料，或儲存密碼以方便您至本網站時不必每次再輸入密碼。<br>
●為統計瀏覽人數及分析瀏覽模式，以了解網頁瀏覽的情況，做為本網站改善服務的參考。<br>
如果您選擇拒絕所有的Cookies，您可能無法使用部份個人化服務，或是參與部份的活動，您可以在瀏覽器中選擇修改對Cookies的接受程度，包括接受所有Cookies、設定Cookies時得到通知、拒絕所有Cookies等。<br>
6. 此外，本網站會保留使用者在上網瀏覽或查詢時於伺服器自行產生的相關記錄，包括連線的IP位址、使用時間、使用的瀏覽器、瀏覽以及點選的資料和紀錄等。這些資料係供本網站內部作網站流量和網路行為調查的總量分析，以利於提昇本網站的服務品質。本網站僅對全體使用者行為總和進行分析，並不會對個別使用者進行分析。<br>
..........................(以下省略,請提供使用條款完整文案!)</p>
						</div>
					</div>
				</div>
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
$(function() {
	$('#gotoSec').localScroll();
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
