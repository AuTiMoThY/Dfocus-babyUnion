		<hgroup class="pdt_page-aside-hgroup cf">
			<h1 class="hide_txt iconTxt-title-pdt_aside">商品分類</h1>
		</hgroup>
		<div class="pdt_page-aside-wrap">
			<div class="pdt_page-aside-container">
				<div class="pdt_page-aside-block">
					<!-- 主分類 pdt-main_cate -->
					<ul class="pdt-main_cate cf">
					<?php 
						//  aunav.php
						foreach ($tmp_pdt_arr as $key => $value) {
					?>
						<li class="pdt-main_cate-item js-pdt-main_cate">
							<?php 
								// 判斷該項目是否有子分類
								if (is_array($value['sub'])) {
									// 有子分類時，連結無作用，僅用來開闔
							?>
							<a href="javascript:void 0;"><?php echo $value['name']; ?></a>
							<!-- 子分類 pdt-sub_cate  -->
							<div class="pdt-sub_cate">
								<ul class="pdt-sub_cate-list cf">
								<?php 
									foreach ($value['sub'] as $key => $subvalue) {
								?>
									<li class="pdt-sub_cate-item"><a href="product.php"><?php echo $subvalue['sub_name']; ?></a></li>
								<?php
									}
								?>
								</ul><!-- /.pdt-sub_cate  END  !! -->
							</div>
							<?php
								}else {
									// 無子分類時，連結連到該分類列表頁
							?>
							<a href="product.php"><?php echo $value['name']; ?></a>
							<?php
								}
							 ?>
						</li>
					<?php
						}
					 ?>
					</ul><!-- /.pdt-main_cate  END  !! -->
				</div>
			</div>
		</div>
		<hgroup class="pdt_page-aside-hgroup2">
			<h1 class="hide_txt">最新消息</h1>
		</hgroup>
		<div class="pdt_page-aside-wrap2">
			<div class="pdt_page-aside-container2">
				<div class="pdt_page-aside-block2">
					<ul class="cf">
						<li class="aside_news-item"><a href="news.php">
							<div class="aside_news-date">2015/10/01</div>
							<div class="aside_news-title">本賣場販售之食品皆已依食安法完成業者登錄作業本賣場販售之食品皆已依食安法完成業者登錄作業 </div>
						</a></li>
						<li class="aside_news-item"><a href="news.php">
							<div class="aside_news-date">2015/10/01</div>
							<div class="aside_news-title">本賣場販售之食品皆已依食安法完成業者登錄作業本賣場販售之食品皆已依食安法完成業者登錄作業 </div>
						</a></li>
						<li class="aside_news-item"><a href="news.php">
							<div class="aside_news-date">2015/10/01</div>
							<div class="aside_news-title">本賣場販售之食品皆已依食安法完成業者登錄作業本賣場販售之食品皆已依食安法完成業者登錄作業 </div>
						</a></li>
						<li class="aside_news-item"><a href="news.php">
							<div class="aside_news-date">2015/10/01</div>
							<div class="aside_news-title">本賣場販售之食品皆已依食安法完成業者登錄作業本賣場販售之食品皆已依食安法完成業者登錄作業 </div>
						</a></li>
					</ul>
				</div>
			</div>
		</div>