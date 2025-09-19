<!doctype html>
<html style="--wHeight:100vh; --wHeightPx:100vh; --scroll:0; --wHeightFixedPx:100vh;">
<head>
	<?php get_template_part("parts/head"); ?>
</head>
<body>
	<header class="underpage">
		<?php get_template_part("parts/header"); ?>
	</header>
	<article id="about" class="page-about">
		<section class="section-introduction">
			<div class="section_inner">
				<div class="intro_flex">
					<div class="intro_ttl">
						<div class="comp-page-bread">
							<div class="link_wrap">
								<a href="/">ホーム</a>
								<span class="current">zenshotとは</span>
							</div>
						</div><!-- comp-page-bread -->
						<div class="comp-underpage-title">
							<h1 class="ttl">zenshotとは</h1>
							<div class="title_description">
								<p>zenshotは建設現場の施工管理を変革するプロダクトです。現場の360動画データから、AIが現場状況を自動的に構造化します。現場状況の可視化と、工程・安全・品質の時間変化を捉えたAIで、施工管理業務を省人化・自動化します。</p>
							</div>
						</div><!-- comp-underpage-title -->
					</div>
					<div class="intro_movie">
						<div class="movie_wrap">
							<button id="playButton">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/about/movie_thumb.png">
							</button>
						</div>
					</div>
				</div><!-- intro_flex -->
			</div><!-- section_inner -->
		</section>
		<section class="section-kadai comp-about-section">
			<div class="section_inner">
				<div class="title_flex">
					<hgroup>
						<h2 class="kadai_ttl">建設業界の大きな課題</h2>
						<h3 class="kadai_subttl">建設業ではAI化に向けた<br>現場データが乏しい</h3>
					</hgroup>
					<div class="kadai_description">
						<p>建設業は「一品受注生産」「現地屋外生産」「労働集約型生産」といった特性を持つため、製造業のように技術導入や効率化を進めることが難しい領域でした。特に、日々変化する広大な現場をデータ化することは困難であり、その結果データ収集がボトルネックとなって、AI・データを活用した自動化・効率化を妨げていました。</p>
					</div>
				</div>
				<div class="kadai_img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/about/about_img01.jpg">
				</div>
			</div><!-- section_inner -->
		</section>
		<section class="section-solution comp-about-section">
			<div class="section_inner">
				<div class="title_flex">
					<hgroup>
						<h2 class="kadai_ttl">zenshotが実現すること</h2>
						<h3 class="kadai_subttl">リアルデータを起点に<br>業務の効率化・AI化を実現</h3>
					</hgroup>
					<div class="kadai_description">
						<p>現場の360動画データから、AIが現場状況を自動的に構造化します。現場状況の可視化による遠隔化・効率化に加え、工程・安全・品質の時間変化をAIが捉え、インサイトを抽出。それらをもとに判断し行動するAIエージェントが、施工管理業務の省人化・自動化を実現します。</p>
					</div>
				</div>
				<div class="kadai_img">
					<img class="sp_img" src="<?php echo get_template_directory_uri();?>/assets/img/about/about_img02.jpg">
					<img class="pc_img" src="<?php echo get_template_directory_uri();?>/assets/img/about/about_img02_pc.png">
				</div>
			</div><!-- section_inner -->
		</section>
		<section class="section-conversion comp-section-conversion">
			<div class="section_inner">
				<div class="contact_title">
					<h2 class="contact_ttl">まずは相談してみませんか？</h2>
				</div><!-- comp-contact-title -->
				<div class="comp-conversion-button">
					<div class="button_item">
						<a class="contact" href="/contact"><span>お問い合わせ</span></a>
					</div>
					<div class="button_item">
						<a class="flow" href="/flow"><span>導入の流れ</span></a>
					</div>
				</div><!-- comp-conversion-button -->
			</div><!-- section_inner -->
		</section>
		<section class="section-matrix">
			<div class="section_inner">
				<hgroup class="comp-about-ttl">
					<h2 class="ttl">zenshotが実現すること</h2>
					<h3 class="subttl">リアルデータを起点に、物理作業にAIが染み出し、業務を変革する</h3>
				</hgroup>
				<div class="matrix_img">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/about/about_matrix.jpg">
				</div>
			</div><!-- section_inner -->
		</section>
		<section class="section-function">
			<div class="section_inner">
				<div class="function_flex">
					<div class="function_ttl">
						<hgroup class="comp-about-ttl">
							<h2 class="ttl">zenshotの機能</h2>
							<h3 class="subttl">機能紹介</h3>
						</hgroup>
					</div>
					<div class="function_contents">
						<div class="comp-function-list">
							<div class="function_item">
								<div class="function_img">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/about/function01.jpg">
								</div>
								<div class="function_txt">
									<h3 class="function_ttl">現場データ取得デバイス</h3>
									<div class="function_desc">
										<p>現場の声を受け、操作を極限まで簡素化。 高齢の職人さんでも毎日撮影できます。</p>
									</div>
								</div>
							</div>
							<div class="function_item">
								<div class="function_img">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/about/function02.jpg">
								</div>
								<div class="function_txt">
									<h3 class="function_ttl">AIによる360度現場ビュー自動生成</h3>
									<div class="function_desc">
										<p>AIが記録した360度動画から自動で図面に対応づいた現場ビューを生成します。</p>
									</div>
								</div>
							</div>
							<div class="function_item">
								<div class="function_img">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/about/function03.jpg">
								</div>
								<div class="function_txt">
									<h3 class="function_ttl">360度現場ビューワー</h3>
									<div class="function_desc">
										<p>PC・タブレット・スマートフォンなどから、いつでもどこからでも現場全体の状況を確認できます。</p>
									</div>
								</div>
							</div>
							<div class="function_item">
								<div class="function_img">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/about/function04.jpg">
								</div>
								<div class="function_txt">
									<h3 class="function_ttl">Physical AI Agent(開発中)</h3>
									<div class="function_desc">
										<p>AIが現場データから工程・安全・品質の変化を解析し、インサイトを抽出。それらをもとにAIエージェントが施工管理を支援します。</p>
									</div>
								</div>
							</div>
						</div><!-- comp-function-list -->
					</div>
				</div>
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
	<div id="moviePop" class="comp-movie-pop">
		<div class="overlay"></div>
		<button id="closeButton" class="close_button"></button>
		<div class="pop_inner">
			<div class="video_wrap">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/VVrm5SDTzHo?si=6czwocXGUeVFh4Uf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<?php get_template_part("parts/hummenu"); ?>
	<?php get_template_part("parts/footer"); ?>
</body>
<?php get_template_part("parts/script"); ?>
</html>
