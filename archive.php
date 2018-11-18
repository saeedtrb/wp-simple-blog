<?php get_header() ?>
<!-- Start main content -->
<div class="padding-10"></div>
<main class="container">
	<div class="row">
		<div class="post-wrapper col-sm-9">
			<?php if( have_posts() ): ?>
				<?php while( have_posts() ):the_post();?>
					<?php get_template_part( 'templates/post');?>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="pdding-20 no-padding-lg no-padding-md no-padding-sm"></div>
		</div>
		<!-- / End content -->
		<aside class="col-sm-3">
			<?php get_sidebar() ?>
		</aside>
	</div>
</main>
<!-- / End main content -->
<?php get_footer() ?>