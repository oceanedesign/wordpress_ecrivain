<?php
/**
 * The main template file
 */
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-9">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php 
					get_template_part( 'template-parts/content', get_post_format() );
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php 
				get_template_part( 'template-parts/content', 'none' );
			?>
		<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php get_sidebar();?>
	</div>
</div>
<?php get_footer();?>