<!doctype html>
<html style="--wHeight:100vh; --wHeightPx:100vh; --scroll:0; --wHeightFixedPx:100vh;">
<head>
	<?php get_template_part("parts/head"); ?>
</head>
<body>
	<header class="underpage">
		<?php get_template_part("parts/header"); ?>
	</header>
	<article id="contact" class="page-contact">
		<section class="section-form">
			<div class="section_inner">
				<div class="contact_flex">
					<div class="contact_ttl">
						<div class="comp-page-bread">
							<div class="link_wrap">
								<a href="/">ホーム</a>
								<span class="current">お問い合わせ</span>
							</div>
						</div><!-- comp-page-bread -->
						<div class="comp-underpage-title">
							<h1 class="ttl">お問い合わせ</h1>
							<div class="title_description">
								<p>zen intelligenceにご興味をお持ちいただきありがとうございます。お問い合わせはこちらのフォームよりお申し込みください。お問い合わせ後、数日以内に担当者よりご連絡させていただきます。</p>
							</div>
						</div><!-- comp-underpage-title -->
					</div><!-- contact_ttl -->
					<div class="contact_form">
						<div id="contactWrap" class="comp-form-wrap">
							<div class="form_item">
								<div class="label_wrap">
									<label class="">お名前</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<div class="name_wrap">
										<input type="text" name="yourname" placeholder="山田太郎" class="bg">
									</div>
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">メールアドレス</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="input-number bg" type="text" name="useremail" placeholder="info@zen-intelligence.ai">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">メールアドレス(確認用)</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="input-number bg" type="text" name="useremail2" placeholder="info@zen-intelligence.ai">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">会社名</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="bg" type="text" name="corpname" placeholder="Zen Intelligence株式会社">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">業種 (※複数選択可)</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<div class="radio_box">
										<label>
                			<input type="checkbox" name="category" value="注文住宅" >
                			<span class="radio_checker"></span>
											<span class="name">注文住宅</span>
            				</label>
										<label>
											<input type="checkbox" name="category" value="分譲住宅" >
											<span class="radio_checker"></span>
											<span class="name">分譲住宅</span>
										</label>
										<label>
											<input type="checkbox" name="category" value="リノベーション" >
											<span class="radio_checker"></span>
											<span class="name">リノベーション</span>
										</label>
										<label>
											<input type="checkbox" name="category" value="部分リフォーム" >
											<span class="radio_checker"></span>
											<span class="name">部分リフォーム</span>
										</label>

										<label>
											<input type="checkbox" name="category" value="ゼネコン" >
											<span class="radio_checker"></span>
											<span class="name">ゼネコン</span>
										</label>
										<label>
											<input type="checkbox" name="category" value="サブコン" >
											<span class="radio_checker"></span>
											<span class="name">サブコン</span>
										</label>

										<label>
											<input type="checkbox" name="category" value="内装" >
											<span class="radio_checker"></span>
											<span class="name">内装</span>
										</label>
										<label>
											<input type="checkbox" name="category" value="設計" >
											<span class="radio_checker"></span>
											<span class="name">設計</span>
										</label>
										<label>
											<input type="checkbox" name="category" value="その他" >
											<span class="radio_checker"></span>
											<span class="name">その他</span>
										</label>
								</div>
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">部署名</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="bg" type="text" name="corpname2">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">役職名</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="bg" type="text" name="corpname3">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">電話番号</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="input-number bg" type="text" name="userphone" placeholder="012-3456-7890">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">検討タイミング</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<div class="radio_box">
										<label>
                			<input type="radio" name="timing" value="直近3ヶ月以内" >
                			<span class="radio_checker radio"></span>
											<span class="name">直近3ヶ月以内</span>
            				</label>
										<label>
											<input type="radio" name="timing" value="時期は未定だが検討中" >
											<span class="radio_checker radio"></span>
											<span class="name">時期は未定だが検討中</span>
										</label>
										<label>
											<input type="radio" name="timing" value="情報収集" >
											<span class="radio_checker radio"></span>
											<span class="name">情報収集</span>
										</label>
										<label>
											<input type="radio" name="timing" value="特に検討していない" >
											<span class="radio_checker radio"></span>
											<span class="name">特に検討していない</span>
										</label>
									</div>
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">住宅の年間棟数</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="bg" type="text" name="homeNum" placeholder="回答例) 100棟">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">非住宅の年間案件数</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<input class="bg" type="text" name="otherNum" placeholder="回答例) 100棟">
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">お問い合わせの背景 (※複数選択可)</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<div class="radio_box">
										<label class="fullw">
											<input type="checkbox" name="background" value="現場監督・代理人の移動時間を削減したい" >
											<span class="radio_checker"></span>
											<span class="name">現場監督・代理人の移動時間を削減したい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="写真の撮影漏れを無くしたい・撮影工数を減らしたい" >
											<span class="radio_checker"></span>
											<span class="name">写真の撮影漏れを無くしたい・撮影工数を減らしたい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="新人監督のサポートを効率的に行いたい" >
											<span class="radio_checker"></span>
											<span class="name">新人監督のサポートを効率的に行いたい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="お施主様・営業・設計などに現場状況を共有したい" >
											<span class="radio_checker"></span>
											<span class="name">お施主様・営業・設計などに現場状況を共有したい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="常駐から分業体制へ転換する際に活用したい" >
											<span class="radio_checker"></span>
											<span class="name">常駐から分業体制へ転換する際に活用したい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="報告書作成コストを削減したい" >
											<span class="radio_checker"></span>
											<span class="name">報告書作成コストを削減したい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="安全パトロールを遠隔化したい" >
											<span class="radio_checker"></span>
											<span class="name">安全パトロールを遠隔化したい</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="具体的な活用イメージはまだない" >
											<span class="radio_checker"></span>
											<span class="name">具体的な活用イメージはまだない</span>
										</label>
										<label class="fullw">
											<input type="checkbox" name="background" value="その他" >
											<span class="radio_checker"></span>
											<span class="name">その他</span>
										</label>
									</div>
								</div>
							</div>
							<div class="form_item">
								<div class="label_wrap">
									<label class="">zenshotのことをどこで知りましたか？</label>
									<span class="required">必須</span>
								</div>
								<div class="form_box">
									<div class="radio_box">
										<label>
                			<input type="radio" name="route" value="WEB上の記事">
                			<span class="radio_checker radio"></span>
											<span class="name">WEB上の記事</span>
            				</label>
										<label>
											<input type="radio" name="route" value="新聞や雑誌の記事">
											<span class="radio_checker radio"></span>
											<span class="name">新聞や雑誌の記事</span>
										</label>
										<label>
											<input type="radio" name="route" value="展示会">
											<span class="radio_checker radio"></span>
											<span class="name">展示会</span>
										</label>
										<label>
											<input type="radio" name="route" value="知人・友人の紹介">
											<span class="radio_checker radio"></span>
											<span class="name">知人・友人の紹介</span>
										</label>
										<label>
											<input type="radio" name="route" value="パンフレットやチラシ">
											<span class="radio_checker radio"></span>
											<span class="name">パンフレットやチラシ</span>
										</label>
										<label>
											<input type="radio" name="route" value="その他">
											<span class="radio_checker radio"></span>
											<span class="name">その他</span>
										</label>

									</div>
								</div>
							</div>
							<div class="form_item b_none">
								<div class="label_wrap">
									<label class="">その他、ご質問事項やご要望</label>
									<span class="optional">任意</span>
								</div>
								<div class="form_box">
									<textarea name="content" class="bg"></textarea>
								</div>
							</div>
							<div class="privacy_wrap">
								<div class="agreement">
									<div class="agree_wrap">
										<label>
											<input id="agreeBox" name="agreement" type="checkbox" value="1">
											<span class="radio_checker"></span>
											<span class="name"><a target="_blank" href="https://zen-intelligence.ai/privacy-policy">プライバシーポリシー</a>に同意する</span>
										</label>
									</div>
								</div><!-- agreement -->
							</div><!-- privacy_wrap -->
							<div id="ajaxLoader" class="ajax_loader">
								<span class="loading"></span>
							</div>
							<div id="statusMessage" class="status_message hidden"></div>
							<div id="submitButton" class="submit_wrap disabled">
								<span class="text_wrap">
									<span class="ja"><span class="">内容を送信する</span></span>
									<input type="button" value="内容を送信する" class="ga_contact">
								</span>
							</div>
						</div><!-- comp-form-wrap -->
					</div><!-- contact_form -->
				</div><!-- contact_flex -->
			</div><!-- section_inner -->
		</section>
		<?php get_template_part("parts/conversion");?>
	</article>
	<?php get_template_part("parts/hummenu"); ?>
	<?php get_template_part("parts/footer"); ?>
</body>
<?php get_template_part("parts/script"); ?>
</html>
