<?php get_header(); ?>
	
	<!-- Section -->
	<section>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est itaque tempore assumenda consequatur praesentium labore, ratione ipsam deserunt fuga ab natus nisi consectetur necessitatibus fugiat! Esse ab laudantium tenetur iste.</p>
	<h1>Joan
	</h1>
		<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<!-- Pagination -->
		<div id="pagination">
			<?php html5wp_pagination(); ?>
		</div>
		<!-- /Pagination -->
	
	</section>
	<!-- /Section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>