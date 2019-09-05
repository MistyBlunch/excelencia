<?php

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="page-title">
                <?php
                $title = sprintf( __( 'Lista de  %s' ), single_cat_title( '', false ) );
                echo '<h2>'.$title.'</h2>';
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->
        <?php endif; ?>

        <div class="list-notice">
            <?php

            if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="row">
                        <div class="col-md-4">
                            <figure class="figure">
                                <a class="post-thumbnail-link" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                    <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
                                </a>
                            </figure>
                        </div>
                        <div class="col-md-8">
                            <div class="post-date">
                                <?php the_date('D, d M Y'); ?>
                            </div>
                            <header class="post-header">
                                <?php
                                    the_title( sprintf( '<h2 class="post-title">
                                        <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>
                                    </h2>' );
                                ?>
                            </header><!-- .entry-header -->
                            <div class="post-content">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->
                        </div>
                    </div>

                </article>

        <?php
				// End the loop.
			endwhile;

			// Previous/next page navigation.
            the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/', 'none' );

		endif;

		?>
        </div>

    </div>
</main>

<?php
get_footer();
