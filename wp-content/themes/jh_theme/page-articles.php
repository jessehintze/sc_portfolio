<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jh_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

            <?php $posts = new WP_Query(array('post_type' => 'post', 'orderby'=>'menu_order', 'order' => 'ASC', 'posts_per_page' => -1)); ?>
            <?php if ($posts->have_posts()) : ?>
                <div class="featured-images">
                    <?php while($posts->have_posts()) : $posts->the_post(); ?>
                        <a  class="card" href="<?php the_permalink();; ?>">
                            <div>
                                <?php the_post_thumbnail('medium');; ?>
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <h3>There are no Posts</h3>
            <?php endif ?>

            <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
