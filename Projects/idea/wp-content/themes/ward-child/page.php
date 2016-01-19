<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();
?>

	<div class = "row">
	<div class ="col-sm-8" id=" maincontent" <?php bavotasan_primary_attr(); ?>>
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );

			comments_template( '', true );
		endwhile;
		?>
	</div>
		<div class="col-xl-4">
		<?php get_sidebar( $name ); ?>
	</div>
	</div>

<?php get_footer(); ?>