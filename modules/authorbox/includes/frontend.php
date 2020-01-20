<?php
$source = $settings->authorsource;
if ('custom_author' === $settings->authorsource) {
	$custom_author_name = $settings->custom_author_name;
	$custom_biography_text = $settings->custom_biography_text;
	$img = $settings->img_url_src;
}
?>
<div class="im-authorbox-content">
	<div class="im-authorbox-container">
		<div class="im-authorbox-img">
			<img src="<?php echo $img; ?>">
		</div>
		<div class="im-authorbox-author-wrapper">
			<div class="im-authorbox-author">
				<div class="im-authorbox-authorname-container">
					<<?php echo $settings->authorname_tag; ?>  class="im-authorbox-authorname">
						<span class="im-authorbox-name-span"><?php echo $custom_author_name;?></span>
					</<?php echo $settings->authorname_tag; ?>>
				</div>
				
				<div class="im-authorbox-bio">
					<?php echo $custom_biography_text; ?>
				</div>
			</div>
		</div>
	</div>
</div>