<?php get_header(); ?>

<div id="primary">
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <article class="text-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                        <span class="author vcard"><a class="url fn n"
                                href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>"
                                title="<?php echo esc_attr( sprintf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ) ); ?>"><?php the_author(); ?></a></span>
                        <span class="meta-sep"> | </span>
                        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
                        <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                    </div><!-- .entry-meta -->
                </header><!-- .entry-header -->


                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'your-theme' ), 'after' => '' ) ); ?>
                </div><!-- .entry-content -->

                <!-- Commentaire d'articles -->
                <?php if ( comments_open() ) : ?>
                <div class="comments-link">
                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'your-theme' ) . '</span>', __( '1 Reply', 'your-theme' ), __( '% Replies', 'your-theme' ) ); ?>
                </div><!-- .comments-link -->
                <?php endif; // comments_open() ?>
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>
        </div>

    </div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>