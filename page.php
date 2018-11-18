<?php 
the_post();
get_header(); 
?>
<!-- Start main content -->
<div class="padding-10"></div>
<main class="container">
	<div class="row">
		<div class="post-wrapper col-sm-9">
			<article class="page-content well bg-wihte">
				<header>
					<h3><?php the_title() ?></h3>
					<hr>
				</header>
				<section class="page-body">
					<?php the_content() ?>
				</section>
			</article>
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