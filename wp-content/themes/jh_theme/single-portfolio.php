<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jh_theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php
        $image = get_field('hero_banner');
        if( !empty($image) ): ?>
            <div class="header-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
        <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <div class="portfolio-content">
            <div class="col-1">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; // End of the loop.
            ?>
            </div>
            <div class="col-2">
                <dl>
                    <dt>Role</dt>
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('portfolio_role') ):
                        // loop through the rows of data
                        while ( have_rows('portfolio_role') ) : the_row();
                            ?>
                            <dd><?php the_sub_field('role'); ?></dd>
                        <?php
                        endwhile;
                    else :
                        // no rows found
                    endif;
                    ?>
                </dl>
                <dl>
                    <dt>Client</dt>
                    <dd><?php the_field('client'); ?></dd>
                </dl>
                <dl>
                    <dt>Year</dt>
                    <dd><?php the_field('year'); ?></dd>
                </dl>
            </div>
        </div>
        <div class="portfolio-documentation">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('portfolio_documentation') ):

                // loop through the rows of data
                while ( have_rows('portfolio_documentation') ) : the_row();
                    $image = get_sub_field('documentation');
                ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <?php
                endwhile;

            else :
                // no rows found
            endif;
            ?>
        </div>
            <?php
            while ( have_posts() ) : the_post();
                the_post_navigation();
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
