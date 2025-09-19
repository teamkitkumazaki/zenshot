<!doctype html>
<html style="--wHeight:100vh; --wHeightPx:100vh; --scroll:0; --wHeightFixedPx:100vh;">
<head>
	<?php get_template_part("parts/head"); ?>
</head>
<body>
	<header class="underpage">
		<?php get_template_part("parts/header"); ?>
	</header>
	<?php
		$post_id = $post->ID; //ポストID
		$authorID = $post->post_author; // 著者のID
		$meta = get_post_meta($post_id); //ポストID
		$image = get_the_post_thumbnail_url($id, 'full');
		$image_sp = get_the_post_thumbnail_url($id, 'medium_large');
		$date = get_the_date('Y.m.d');
		$page_ttl = get_the_title($post_id);
		$client_name = SCF::get('client_name',$post_id);
		$client_scale = SCF::get('client_scale',$post_id);
		$case_movie = SCF::get('case_movie',$post_id);
		$article_description = SCF::get('article_description',$post_id);
		$client_logo = wp_get_attachment_image_src($client_logo, 'medium_large');
		$article_content = SCF::get('article_contents',$post_id);
		$article_voice = SCF::get('article_voice',$post_id);
		$article_usescene = SCF::get('article_usescene',$post_id);
		$article_media = SCF::get('article_media',$post_id);

		$contents_length = 0;

		/* カテゴリー */
		$terms = get_the_terms($post->ID, 'news-category');

	?>
	<article id="caseDetail" class="page-case-detail">
		<div class="comp-page-bread">
			<div class="link_wrap">
				<a href="/">ホーム</a>
				<a href="/case">導入事例</a>
				<span class="current"><?= $client_name ;?></span>
			</div>
		</div><!-- comp-page-bread -->
		<section class="section-case-detail">
			<div class="section_inner">
				<div class="case_detail_flex">
					<div class="detail_header">
						<div class="case_wrapper">
							<div class="category">導入企業の声</div>
						</div>
						<h1 class="case_title"><?= $page_ttl; ?></h1>
						<div class="client_wrap">
							<h2 class="client_name"><?= $client_name ;?></h2>
							<div class="client_scale">(<?= $client_scale ;?>)</div>
						</div>
						<div class="comp-case-index">
							<h2 class="index_ttl">目次</h2>
							<div id="caseIndexPc"  class="index_wrapper">
							</div><!-- index_wrapper -->
						</div><!-- comp-case-index -->
					</div><!-- detail_header -->
					<div class="case_article">
						<div class="case_movie_wrap" style="display: none;">
							<?= $case_movie;?>
						</div>
						<div class="case_thumb_img">
							<img loading="lazy" class="portrait" src="<?= $image ?>" srcset="<?= $image ?> 1440w, <?= $image_sp ?> 768w, <?= $image ?> 2048w">
						</div>
						<div class="comp-case-sumary">
							<div class="summary_items">
								<h2 class="summary_ttl">課題</h2>
								<ul class="summary_list">
									<li>複数現場を担当する監督の移動時間が他業務を圧迫</li>
									<li>既存の撮影ツールは操作が煩雑で、現場での統一活用が難航</li>
									<li>高度化する施主要望が若手監督の心理的負担となり、定着や採用の障壁に</li>
								</ul>
							</div>
							<div class="summary_items">
								<h2 class="summary_ttl">効果</h2>
								<ul class="summary_list">
									<li>現場巡回の頻度が減り、交通状況の読みづらい首都圏を中心に移動時間を削減</li>
									<li>シンプルな操作性で、撮影者を選ばず現場の記録を確実に残せるように</li>
									<li>関係部門で現場状況を共有し、品質向上と心理的プレッシャー軽減を両立</li>
								</ul>
							</div>
						</div><!-- comp-case-sumary -->
						<div id="caseArticle" class="comp-case-article">
							<?php foreach ($article_content as $d):?>
							<div class="article_item">
								<div class="article_img">
									<?php if ($d['article_img']):?>
										<div class="img_wrap">
											<img
												class="<?= $d['media_size'];?>"
												src="<?= wp_get_attachment_image_src($d['article_img'], 'full')[0] ?>"
												srcset="<?= wp_get_attachment_image_src($d['article_img'], 'full')[0] ?> 1440w, <?= wp_get_attachment_image_src($d['article_img'], 'medium_large')[0] ?> 768w, <?= wp_get_attachment_image_src($d['article_img'], 'full')[0] ?> 2048w"
											>
											<?php if ($d['article_img_caption']):?>
											<span class="caption">
												<?= $d['article_img_caption'];?>
											</span>
											<?php endif; ?>
										</div>
										<?php endif; ?>
								</div>
								<?php if ($d['title_h2']):?>
									<h2 class="article_ttl"><?= $d['title_h2'];?></h2>
								<?php endif; ?>
								<?php if ($d['title_h3']):?>
									<h3 class="article_subttl"><?= $d['title_h3'];?></h3>
								<?php endif; ?>
								<div class="article_desc">
									<p style="white-space:pre-line;"><?= $d['article_desc'];?></p>
								</div>
							</div>
							<?php endforeach; ?>
						</div><!-- comp-case-article -->
					</div><!-- case_article -->
				</div><!-- case_detail_flex -->
			</div><!-- section_inner -->
		</section>
		<section class="section-case-list comp-section-case-list">
			<div class="section_inner">
				<div class="usecase_ttl_wrap">
					<h2 class="usecase_ttl">導入事例</h2>
					<div class="button_wrap">
						<div class="comp-link-button">
							<a href="/case">
								<span class="txt">導入事例一覧</span>
								<span class="arrow">
									<svg viewBox="0 0 21.95 19.13">
										<path class="cls-1" d="M12.88.35l8.12,8.12c.6.6.6,1.58,0,2.18l-8.12,8.12M21.24,9.57H0"></path>
									</svg>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="comp-case-list column3">
					<?php
						$order = 0;
						$param = array(
							'post_type' => 'case',
							'posts_per_page' => 3,
							'post_status'  => 'publish',
							'orderby' => 'menu_order',
							'order' => 'ASC',
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
				</div>
			</div><!-- section_inner -->
		</section>
		<?php get_template_part("parts/conversion");?>
	</article>
	<?php get_template_part("parts/hummenu"); ?>
	<?php get_template_part("parts/footer"); ?>
</body>
<?php get_template_part("parts/script"); ?>
</html>
