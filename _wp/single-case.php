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
							<div class="client_name"><?= $client_name; ?></div>
						</div>
						<h1 class="case_title"><?= $page_ttl; ?></h1>
						<div class="comp-case-index">
							<h2 class="index_ttl">目次</h2>
							<div id="caseIndexPc"  class="index_wrapper">
							</div><!-- index_wrapper -->
						</div><!-- comp-case-index -->
					</div><!-- detail_header -->
					<div class="case_article">
						<div class="case_movie_wrap">
							<?= $case_movie;?>
						</div>
						<div id="caseArticle" class="comp-case-article">
							<div class="article_item">
								<div class="article_desc">
									<p class="white-space: pre-line;"><?= $article_description;?></p>
								</div>
							</div>
							<div class="comp-case-index">
								<h2 class="index_ttl">目次</h2>
								<div id="caseIndexSp" class="index_wrapper">
								</div><!-- index_wrapper -->
							</div><!-- comp-case-index -->
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
										</div>
										<?php endif; ?>
								</div>
								<?php if ($d['title_h2']):?>
									<h2 class="article_ttl"><?= $d['title_h2'];?></h2>
								<?php endif; ?>
								<div class="article_desc">
									<p style="white-space:pre-line;"><?= $d['article_desc'];?></p>
								</div>
							</div>
							<?php endforeach; ?>
							<hr>
							<div class="article_item">
								<h2 class="article_ttl">現場の声</h2>
								<div class="article_voice">
									<?php foreach ($article_voice as $d):?>
									<div class="voice_item">
										<?php if ($d['voice_img']):?>
										<div class="voice_img">
											<img
												src="<?= wp_get_attachment_image_src($d['voice_img'], 'medium_large')[0] ?>"
												srcset="<?= wp_get_attachment_image_src($d['voice_img'], 'medium_large')[0] ?> 1440w, <?= wp_get_attachment_image_src($d['voice_img'], 'medium_large')[0] ?> 768w, <?= wp_get_attachment_image_src($d['voice_img'], 'medium_large')[0] ?> 2048w"
											>
										</div>
										<?php endif; ?>
										<div class="voice_contents">
											<?php if ($d['voice_ttl']):?>
											<h3 class="voice_name" style="white-space:pre-line;"><?= $d['voice_ttl'];?></h3>
											<?php endif; ?>
											<?php if ($d['voice_desc']):?>
											<div class="voice_description">
												<p style="white-space:pre-line;"><?= $d['voice_desc'];?></p>
											</div>
											<?php endif; ?>
										</div>
									</div>
									<?php endforeach; ?>
								</div><!-- article_voice -->
							</div><!-- article_item -->
							<hr>
							<div class="article_item">
								<h2 class="article_ttl">ご利用の様子</h2>
								<div class="usescene_wrap">
									<?php foreach ($article_usescene as $d):?>
									<div class="usescene_item <?php if ($d['usescene02']):?>image2<?php endif; ?>">
										<?php if ($d['usescene01']):?>
										<div class="img_item">
											<img
												src="<?= wp_get_attachment_image_src($d['usescene01'], 'full')[0] ?>"
												srcset="<?= wp_get_attachment_image_src($d['usescene01'], 'full')[0] ?> 1440w, <?= wp_get_attachment_image_src($d['usescene01'], 'medium_large')[0] ?> 768w, <?= wp_get_attachment_image_src($d['usescene01'], 'full')[0] ?> 2048w"
											>
										</div>
										<?php endif; ?>
										<?php if ($d['usescene02']):?>
										<div class="img_item">
											<img
												src="<?= wp_get_attachment_image_src($d['usescene02'], 'full')[0] ?>"
												srcset="<?= wp_get_attachment_image_src($d['usescene02'], 'full')[0] ?> 1440w, <?= wp_get_attachment_image_src($d['usescene02'], 'medium_large')[0] ?> 768w, <?= wp_get_attachment_image_src($d['usescene02'], 'full')[0] ?> 2048w"
											>
										</div>
										<?php endif; ?>
										<?php if ($d['usescene_caption']):?>
											<p class="caption"><?= $d['usescene_caption'];?></p>
										<?php endif; ?>
									</div>
									<?php endforeach; ?>
								</div><!-- usescene_wrap -->
							</div>
							<hr>
							<div class="article_item">
								<h2 class="article_ttl">メディア掲載</h2>
									<div class="comp-media-voverage">
										<?php foreach ($article_media as $d):?>
										<div class="media_item">
											<?php if ($d['media_name']):?>
											<div class="media_name"><?= $d['media_name'];?></div>
											<?php endif; ?>
												<div class="contents_ttl">
													<p>
														<?php if ($d['media_ttl']):?><?= $d['media_ttl'];?><?php endif; ?><?php if ($d['media_url']):?><br><a target="_blank" href="<?= $d['media_url'];?>"><?= $d['media_url'];?></a><?php endif; ?>
													</p>
												</div>
										</div>
									<?php endforeach; ?>
								</div><!-- comp-media-voverage -->
							</div>
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
