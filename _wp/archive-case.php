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
							<?php
								$order = 0;
								$param = array(
									'post_type' => 'case',
									'posts_per_page' => 10,
									'post_status'  => 'publish',
									'order' => 'DESC',
									'paged' => $paged,
								);
								$the_query = new WP_Query( $param );
								$wp_query->query($param);
								if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
							?>
							<?php
								$order = intval($order) + intval(1);
								$post_id = get_the_ID();
								$page_ttl = get_the_title($post_id);
								$image = get_the_post_thumbnail_url($id, 'medium_large');
								$image_sp = get_the_post_thumbnail_url($id, 'medium_large');
								$date = get_the_date('Y.m.d');
								$client_name = SCF::get('client_name',$id);
								$client_logo = SCF::get('client_logo',$post_id);
								$client_logo_url = wp_get_attachment_image_src($client_logo, 'medium_large');
								/* カテゴリー */
								$terms = get_the_terms($post->ID, 'news-category');
								if ($terms) :
									foreach ($terms as $term) {
										$category_name = $term->name;
										$category_slug = $term->slug;
									}

								endif;
							 ?>
							<div class="case_item">
								<a class="case_wrap" href="<?php the_permalink();?>">
									<span class="case_img">
										<img loading="lazy" class="portrait" src="<?= $image ?>" srcset="<?= $image ?> 1440w, <?= $image_sp ?> 768w, <?= $image ?> 2048w">
										<img class="logo" src="<?= $client_logo_url[0];?>">
									</span>
									<span class="case_txt">
										<span class="client_name"><?= $client_name;?></span>
										<span class="case_ttl"><?= $page_ttl;?></span>
									</span>
								</a>
								<div class="comp-link-button">
									<a href="<?php the_permalink();?>">
										<span class="txt">詳細を見る</span>
										<span class="arrow">
											<svg viewBox="0 0 21.95 19.13">
												<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<?php endwhile; else : endif; wp_reset_postdata();?>
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
