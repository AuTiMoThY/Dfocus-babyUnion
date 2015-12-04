<?php 
	include 'sitemap-php/Sitemap.php';
	$sitemap = new Sitemap('http://www.wpstudiotw.com/test');
	// $sitemap->startSitemap();
	$sitemap->addItem('/', '1.0', 'daily', 'Today');
	$sitemap->addItem('/about', '1.0', 'daily', 'Today');
	$sitemap->setPath('sitemap/');
	// $sitemap->setFilename('customsitemap');
	$sitemap->createSitemapIndex('http://www.wpstudiotw.com/test/sitemap/', 'Today');
	// $sitemap->endSitemap();

 ?>