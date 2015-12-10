<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	$page_title = "error 404";
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

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.inner {
	position: absolute;
	top: 0;
	bottom: 0;
	margin: auto;
	display: table;
	width: 100%;
	text-align: center;
}
	.inner a {
		display: block;
		margin: 3em auto 0;
	}
</style>
</head>

<body class="error404_page">
<?php include IMG_PATH.'svg-defs.svg'; ?>


<main class="error404_page-main">

<div class="inner">
	<img src="<?php path_au('img', 'error404.png'); ?>" alt="">
	<a href="./" class="btn-style1 q ib btns-goindex2 hide_txt">返回首頁</a>
</div>
</main>


<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
 include_once INC_PATH.'scriptfoot.php';
 ?>
<script>
$(function() {
	$(".error404_page-main").height(viewPortH);
});
</script>
</body>
</html>
