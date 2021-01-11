<?php
$title = '';
if ( isset( $args ) ) {
	$title = $args['section_title'];
}
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?php bloginfo('template_directory') ?>/src/img/breadcrumb.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2><?php echo $title ?></h2>
					<div class="breadcrumb__option">
						<a href="/">Home</a>
						<span><?php echo $title ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Section End -->
