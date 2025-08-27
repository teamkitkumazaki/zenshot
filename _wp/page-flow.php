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
		$corporate_info = SCF::get('corporate_info', 150);
		$board_member = SCF::get('board_member', 6);
		$member_link = SCF::get('member_link', 6);
	?>
	<article id="contact" class="page-contact">
		<section class="section-form">
			<div class="section_inner">
				<div class="contact_flex">
					<div class="contact_ttl">
						<div class="comp-page-bread">
							<div class="link_wrap">
								<a href="/">ホーム</a>
								<span class="current">導入までの流れ</span>
							</div>
						</div><!-- comp-page-bread -->
						<div class="comp-underpage-title">
							<h1 class="ttl">導入までの流れ</h1>
							<div class="title_description">
								<p></p>
							</div>
						</div><!-- comp-underpage-title -->
					</div><!-- contact_ttl -->
				</div><!-- contact_flex -->
			</div><!-- section_inner -->
		</section>
		<?php get_template_part("parts/conversion"); ?>
	</article>
	<?php get_template_part("parts/hummenu"); ?>
	<?php get_template_part("parts/footer"); ?>
</body>
<?php get_template_part("parts/script"); ?>
</html>
