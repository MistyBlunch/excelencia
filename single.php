<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <?php while ( have_posts() ) : the_post(); ?>

                   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <div class="page-title">
                            <h2><?php the_title() ?></h2>
                        </div>
                        <div class="sub-title">
                            <h4><?php the_excerpt(); ?></h4>
                        </div>
                        <?php
                            the_content();
                        ?>

                    </div><!-- .entry-content -->



                    <?php if ( get_edit_post_link() ) : ?>
                        <footer class="entry-footer">
                            <?php
                                edit_post_link(
                                    sprintf(
                                        /* translators: %s: Name of current post */
                                        esc_html__( 'Edit %s', 'excellence' ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                    ),
                                    '<span class="edit-link">',
                                    '</span>'
                                );
                            ?>
                        </footer><!-- .entry-footer -->
                    <?php endif; ?>
                </article><!-- #post-## -->

                    <div class="navigation">
                        <h5>También te puede interesar</h5>
                        <div class="row">
                            <div class="col-md-6">

                                <?php
                                    $prevPost = get_previous_post(true);
                                    if($prevPost) { ?>
                                    <div class="nav-box previous">
                                        <div class="media">
                                            <?php
                                                $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );
                                                echo $prevthumbnail;
                                            ?>
                                            <div class="media-body">
                                                <div class="arrow"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Anterior</div>
                                                <?php previous_post_link('%link',"<p>%title</p>", TRUE); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $nextPost = get_next_post(true);
                                if($nextPost) { ?>
                                    <div class="nav-box next" style="float:right;">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="arrow">Siguiente <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                                                <?php next_post_link('%link',"<p>%title</p>", TRUE); ?>
                                            </div>
                                            <?php
                                                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );
                                                echo $nextthumbnail;
                                            ?>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

             <?php endwhile; ?>


            </div>
            <div class="col-sm-12 col-md-4">
               <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
