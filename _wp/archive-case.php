<!doctype html>
<html style="--wHeight:100vh; --wHeightPx:100vh; --scroll:0; --wHeightFixedPx:100vh;">
<head>
	<?php get_template_part("parts/head"); ?>
</head>
<?php
  $post_per_page = 10;
  $wp_query2 = new WP_Query();
  $param2 = array(
    'post_type' => 'news',
    'post_status' => 'publish',
  );
  $the_query2 = new WP_Query( $param2 );
  $post_num = $the_query2->found_posts;
  $page_num = $post_num / $post_per_page;
  $pager_num = ceil($page_num);
  wp_reset_query();
?>
<body>
	<header class="underpage">
		<?php get_template_part("parts/header"); ?>
	</header>
	<article id="caseList" class="page-case-list">
		<section class="section-case-list">
			<div class="section_inner">
				<div class="caselist_flex">
					<div class="caselist_ttl">
						<div class="comp-underpage-title">
							<div class="comp-page-bread">
								<div class="link_wrap">
									<a href="/">ホーム</a>
									<span class="current">導入事例</span>
								</div>
							</div>
							<h1 class="ttl">導入事例</h1>
						</div><!-- comp-underpage-title -->
					</div><!-- caselist_ttl -->
					<div class="caselist_contents">
						<div class="comp-case-list column2">
							<div class="case_item">
								<a class="case_wrap" href="#aaaa">
									<span class="case_img">
										<img class="portrait" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_img01.jpg">
										<img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_logo01.jpg">
									</span>
									<span class="case_txt">
										<span class="client_name">住友林業株式会社様</span>
										<span class="case_ttl">AI施工管理サービス「zenshot」を全ての工事現場に導入し、現場監督の移動時間を最大60%削減。</span>
									</span>
								</a>
								<div class="comp-link-button">
									<a href="#aaaa">
										<span class="txt">詳細を見る</span>
										<span class="arrow">
											<svg viewBox="0 0 21.95 19.13">
												<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<div class="case_item">
								<a class="case_wrap" href="#aaaa">
									<span class="case_img">
										<img class="portrait" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_img02.jpg">
										<img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_logo02.jpg">
									</span>
									<span class="case_txt">
										<span class="client_name">株式会社リビングディー</span>
										<span class="case_ttl">AI施工管理サービス「zenshot」を全支店に導入し、チーム管理体制で急成長を支える。</span>
									</span>
								</a>
								<div class="comp-link-button">
									<a href="#aaaa">
										<span class="txt">詳細を見る</span>
										<span class="arrow">
											<svg viewBox="0 0 21.95 19.13">
												<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<div class="case_item">
								<a class="case_wrap" href="#aaaa">
									<span class="case_img">
										<img class="portrait" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_img03.jpg">
										<img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_logo03.jpg">
									</span>
									<span class="case_txt">
										<span class="client_name">ネクストイノベーション株式会社</span>
										<span class="case_ttl">AI施工管理サービス「zenshot」を全ての工事現場に導入し、現場監督の移動時間を最大60%削減。</span>
									</span>
								</a>
								<div class="comp-link-button">
									<a href="#aaaa">
										<span class="txt">詳細を見る</span>
										<span class="arrow">
											<svg viewBox="0 0 21.95 19.13">
												<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<div class="case_item">
								<a class="case_wrap" href="#aaaa">
									<span class="case_img">
										<img class="portrait" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_img04.jpg">
										<img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_logo04.jpg">
									</span>
									<span class="case_txt">
										<span class="client_name">近藤建設株式会社</span>
										<span class="case_ttl">AI施工管理サービス「zenshot」を全支店に導入し、チーム管理体制で急成長を支える。</span>
									</span>
								</a>
								<div class="comp-link-button">
									<a href="#aaaa">
										<span class="txt">詳細を見る</span>
										<span class="arrow">
											<svg viewBox="0 0 21.95 19.13">
												<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<div class="case_item">
								<a class="case_wrap" href="#aaaa">
									<span class="case_img">
										<img class="portrait" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_img05.jpg">
										<img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/case/case_logo05.jpg">
									</span>
									<span class="case_txt">
										<span class="client_name">不動産SHOPナカジツ様</span>
										<span class="case_ttl">AI施工管理サービス「zenshot」を全ての工事現場に導入し、現場監督の移動時間を最大60%削減。</span>
									</span>
								</a>
								<div class="comp-link-button">
									<a href="#aaaa">
										<span class="txt">詳細を見る</span>
										<span class="arrow">
											<svg viewBox="0 0 21.95 19.13">
												<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
											</svg>
										</span>
									</a>
								</div>
							</div>
						</div><!-- comp-case-list -->
					</div><!-- caselist_contents -->
				</div><!-- caselist_flex -->
			</div><!-- section_inner -->
		</section>
		<?php get_template_part("parts/conversion");?>
	</article>
	<?php get_template_part("parts/hummenu"); ?>
	<?php get_template_part("parts/footer"); ?>
</body>
<?php get_template_part("parts/script"); ?>
</html>
