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
		$sp_main_url = wp_get_attachment_image_src($image_sp, 'medium_large');
		$page_ttl = get_the_title($post_id);
		$article_subttl = SCF::get('article_subttl',$post_id);
		$article_description = SCF::get('article_description',$post_id);
		$desc_flag = SCF::get('desc_flag',$post_id);
		$article_content = SCF::get('article_contents',$post_id);
		$contents_length = 0;

		/* カテゴリー */
		$terms = get_the_terms($post->ID, 'news-category');

	?>
	<article id="caseDetail" class="page-case-detail">
		<div class="comp-page-bread">
			<div class="link_wrap">
				<a href="/">ホーム</a>
				<a href="/case">導入事例</a>
				<span class="current">株式会社リビングディー</span>
			</div>
		</div><!-- comp-page-bread -->
		<section class="section-case-detail">
			<div class="section_inner">
				<div class="case_detail_flex">
					<div class="detail_header">
						<div class="case_wrapper">
							<div class="category">導入企業の声</div>
							<div class="client_name">株式会社リビングディー</div>
						</div>
						<h1 class="case_title">静岡県・山梨県を中心に注文住宅を年間100棟手掛けるリビングディー、AI施工管理サービス「zenshot」を全ての工事現場に導入し、現場監督の移動時間を最大60%削減</h1>
						<div id="caseIndexPc" class="comp-case-index">
							<h2 class="index_ttl">目次</h2>
							<div class="index_wrapper">
								<div class="index_item">
									<button>
										<span class="txt">導入背景</span>
										<span class="caret"></span>
									</button>
								</div>
								<div class="index_item">
									<button>
										<span class="txt">導入効果</span>
										<span class="caret"></span>
									</button>
								</div>
								<div class="index_item">
									<button>
										<span class="txt">現場の声</span>
										<span class="caret"></span>
									</button>
								</div>
								<div class="index_item">
									<button>
										<span class="txt">ご利用の様子</span>
										<span class="caret"></span>
									</button>
								</div>
								<div class="index_item">
									<button>
										<span class="txt">メディア掲載</span>
										<span class="caret"></span>
									</button>
								</div>
							</div><!-- index_wrapper -->
						</div><!-- comp-case-index -->
					</div><!-- detail_header -->
					<div class="case_article">
						<div class="case_movie_wrap">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/sKSwyvVK4o8?si=cM90WMhLVs6Qfv2H" title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
						<div id="caseArticle" class="comp-case-article">
							<div class="article_item">
								<div class="article_desc">
									<p>株式会社SoftRoid（本社：東京都千代田区、代表：野﨑 大幹、以下SoftRoid）は、株式会社リビングディー（本社：静岡県富士市、代表：後藤 昇、旧社名第一建設株式会社、以下リビングディー）の全ての工事現場にIoTデバイスを設置し、AI施工管理サービス「zenshot」の全社導入を開始しいたしました。</p>
								</div>
							</div>
							<div id="caseIndexSp" class="comp-case-index">
								<h2 class="index_ttl">目次</h2>
								<div class="index_wrapper">
									<div class="index_item">
										<button>
											<span class="txt">導入背景</span>
											<span class="caret"></span>
										</button>
									</div>
									<div class="index_item">
										<button>
											<span class="txt">導入効果</span>
											<span class="caret"></span>
										</button>
									</div>
									<div class="index_item">
										<button>
											<span class="txt">現場の声</span>
											<span class="caret"></span>
										</button>
									</div>
									<div class="index_item">
										<button>
											<span class="txt">ご利用の様子</span>
											<span class="caret"></span>
										</button>
									</div>
									<div class="index_item">
										<button>
											<span class="txt">メディア掲載</span>
											<span class="caret"></span>
										</button>
									</div>
								</div><!-- index_wrapper -->
							</div><!-- comp-case-index -->
							<div class="article_item">
								<div class="article_img">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img01.jpg">
								</div>
								<h2 class="article_ttl">導入背景</h2>
								<div class="article_desc">
									<p>静岡県に本拠地を置くハウスビルダーであるリビングディーは、年間100棟ほどの高性能・高品質な新築注文住宅の設計・施工を手掛けています。</p>
									<p>高性能・高品質な住宅を提供するためにはこまめに現地で施工確認することが欠かせませんが、一般的に住宅工事の現場監督は同時に複数の現場を管理してるため、日々の現場巡回の移動時間が大きな業務負荷となっています。リビングディーにおいても、朝〜夕方まで現場を巡回してからオフィスに戻り、事務作業をするということもしばしばあり、施工管理社員の業務負担が多大になる状況でした。</p>
									<p>上記のような課題感のもと、リビングディーでは兼ねてから品質向上と業務効率化を両立し、数十年先でもお客様のご要望に対応できる本質的な品質管理方法を検討していました。今回、課題を解決するツールとしてzenshotに興味を持っていただき、試験導入を経て効果を実感し、全現場へ導入しました。</p>
								</div>
							</div>
							<div class="article_item">
								<div class="article_img">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img02.jpg">
								</div>
								<h2 class="article_ttl">導入効果</h2>
								<div class="article_desc">
									<p>日々、手軽に現場全体の状況を網羅的に記録することで、下記のような効果がありました。</p>
									<p>●遠隔から施工状況を確認できるようになり、現場監督の移動時間を最大60%削減<br>●現場確認回数が増えミスやトラブルを未然に防ぐことができるようになり、管理品質が向上<br>●隠蔽部含め現場の網羅的な記録が残るようになり、急な問い合わせや設計変更への対応力が向上</p>
								</div>
							</div>
							<hr>
							<div class="article_item">
								<h2 class="article_ttl">現場の声</h2>
								<div class="article_voice">
									<div class="voice_item">
										<div class="voice_img">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/news/people_img.jpg">
										</div>
										<div class="voice_contents">
											<h3 class="voice_name">代表取締役社長<br>後藤 昇 様</h3>
											<div class="voice_description">
												<p>
													私は今後、記録自体が事業の骨になっていくものになると考えています。zenshotを通じて工事中の記録を残すことによって、当然高性能住宅の品質向上が期待できますが、工事の透明性や一貫したアフターメンテナンスを提供できる安心感など、オーナー顧客へのサポート強化にも繋がります。新規顧客においても、カタログ設計上の計算数値をどのように現場で施工管理するかを可視化でき、安定的な受注になります。住宅の建設会社として、自社が手がける物件を全て丸裸で記録して残しておくことが、
													何よりも絶対に必要なツールになると確信しています。</p>
											</div>
										</div>
									</div>
									<div class="voice_item">
										<div class="voice_img">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/news/people_img.jpg">
										</div>
										<div class="voice_contents">
											<h3 class="voice_name">代表取締役社長<br>後藤 昇 様</h3>
											<div class="voice_description">
												<p>
													私は今後、記録自体が事業の骨になっていくものになると考えています。zenshotを通じて工事中の記録を残すことによって、当然高性能住宅の品質向上が期待できますが、工事の透明性や一貫したアフターメンテナンスを提供できる安心感など、オーナー顧客へのサポート強化にも繋がります。新規顧客においても、カタログ設計上の計算数値をどのように現場で施工管理するかを可視化でき、安定的な受注になります。住宅の建設会社として、自社が手がける物件を全て丸裸で記録して残しておくことが、
													何よりも絶対に必要なツールになると確信しています。</p>
											</div>
										</div>
									</div>
								</div><!-- article_voice -->
							</div><!-- article_item -->
							<hr>
							<div class="article_item">
								<h2 class="article_ttl">ご利用の様子</h2>
								<div class="usescene_wrap">
									<div class="usescene_item image2">
										<div class="img_item">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img03.jpg">
										</div>
										<div class="img_item">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img04.jpg">
										</div>
										<p class="caption">現場での撮影の様子</p>
									</div>
									<div class="usescene_item">
										<div class="img_item">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img05.jpg">
										</div>
										<p class="caption">作成された360度現場ビュー。天井・壁・床、360度ぐるりと現場全体を確認できる</p>
									</div>
									<div class="usescene_item">
										<div class="img_item">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img06.jpg">
										</div>
										<p class="caption">隠蔽部(断熱材・下地)の前後の状態を簡単に比較・確認できる</p>
									</div>
									<div class="usescene_item">
										<div class="img_item">
											<img src="<?php echo get_template_directory_uri();?>/assets/img/case/article_img07.jpg">
										</div>
										<p class="caption">基礎工程も網羅的に記録することができる</p>
									</div>
								</div><!-- usescene_wrap -->
							</div>
							<hr>
							<div class="article_item">
								<h2 class="article_ttl">メディア掲載</h2>
							</div>
							<div class="comp-media-voverage">
								<div class="media_item">
									<div class="media_name">日本経済新聞</div>
									<div class="contents_ttl">
										<p>リビングディー、AIカメラで工事現場監督の省力化<br><a target="_blank" href="#aaaa">https://www.nikkei.com/article/DGXZQOCC146S40U3A710C2000000/</a></p>
									</div>
								</div>
								<div class="media_item">
									<div class="media_name">建設ITワールド</div>
									<div class="contents_ttl">
										<p>住宅現場を2分でデジタルツイン化！ AI施工管理「zenshot」でリビングディーが移動のムダを60%削減<br><a target="_blank" href="https://ken-it.world/it/2023/07/digital-twin-in-2-minutes.html">https://ken-it.world/it/2023/07/digital-twin-in-2-minutes.html</a></p>
									</div>
								</div>
								<div class="media_item">
									<div class="media_name">新建ハウジング</div>
									<div class="contents_ttl">
										<p>zenshot導入で現場監督の移動時間6割削減に成功<br><a target="_blank" href="https://www.s-housing.jp/archives/319150">https://www.s-housing.jp/archives/319150</a></p>
									</div>
								</div>
								<div class="media_item">
									<div class="media_name">ハウジング・トリビューン</div>
									<div class="contents_ttl">
										<p>決定版 住宅DXツールガイド2023<br><a target="_blank" href="https://store.sohjusha.co.jp/product/4883511532/">https://store.sohjusha.co.jp/product/4883511532/</a></p>
									</div>
								</div>
							</div><!-- comp-media-voverage -->
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
							<a href="#aaaa">
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
