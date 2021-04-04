<?php 
/* 
Template Name: Gizlilik Politikası
*/
?>

<?php
    get_header();
?>

<section class="page-content policy site-main">
    <div class="container">
    <h1 class="title page-content__title"><?php the_title(); ?></h1>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content mt-30">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'utech' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'utech' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
    </div>
</section>

<?php
    get_footer();
?>