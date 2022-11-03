<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oks2021
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="divsides">
    <?php
    get_sidebar();?>
    </div>
	<div class="container">
	<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
        <?php get_template_part('template-parts/masonry','index');?>
    </div>
		<div class="divsides">
    	</div>
	</main><!-- #main -->

<?php
get_footer();?>
