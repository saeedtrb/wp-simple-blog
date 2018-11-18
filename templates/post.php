<article id="post-<?php the_ID(); ?>" <?php post_class(array('well','bg-wihte')); ?>>
	<header>
		<h4>
			<a href="<?php the_permalink() ?>" class="block" title="<?php the_title() ?>"><?php the_title() ?></a>
		</h4>
		<hr>
	</header>
	<section class="page-body row">
		<?php if ( has_post_thumbnail() ): ?>
		<div class="col-sm-4 no-padding">
			<div class="post-tumbnail">
				<img src="<?php  the_post_thumbnail_url() ?>" class="attachment-blog-posts-list size-blog-posts-list wp-post-image" alt="<?php the_title_attribute(); ?>">
			</div>
		</div>
		<?php endif; ?>
		<div class="<?php echo(has_post_thumbnail() ? 'col-sm-8' : 'col-sm-12' )?>">
			<div class="post-body">
				<p class="text-justify"><?php echo get_the_excerpt() ?></p>
				<div class="text-left">
					<a href="<?php the_permalink() ?>" class="btn btn-xs btn-deafult read-more">ادامه مطلب</a>
				</div>
			</div>
		</div>
	</section>
</article>