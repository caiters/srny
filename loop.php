<?php ?>
<section class="main-content">
<?php $firstClass = 'first-post'; ?>
<?php /* If there are no posts to display, such as an empty archive page */ ?>
	<?php if ( ! have_posts() ) : ?>
        <article role="main" class="the-content">
            <h1><?php _e( '404 - I&#39;m sorry but the page can&#39;t be found' ); ?></h1>
            <p>Please try searching again or head back to the homepage.</p>
        </article>
    <?php endif; ?>
<?php ?>

    <h1>
        <?php if ( is_day() ) : ?><?php printf( __( '<span>Daily Archive</span> %s' ), get_the_date() ); ?>
        <?php elseif ( is_month() ) : ?><?php printf( __( '<span>Monthly Archive</span> %s' ), get_the_date('F Y') ); ?>
        <?php elseif ( is_year() ) : ?><?php printf( __( '<span>Yearly Archive</span> %s' ), get_the_date('Y') ); ?>
        <?php elseif ( is_category() ) : ?><?php echo single_cat_title(); ?>
        <?php elseif ( is_home() ) : ?>Latest News<?php else : ?>
        <?php endif; ?>
    </h1>
<?php while ( have_posts() ) : the_post(); ?>
	<?php /* How to display standard posts and search results */
			if ( has_post_thumbnail() ) {
				$thumbnailClass = 'has-thumbnail';
			} else {
				$thumbnailClass = '';
			} ?>
        <article class="article-archive group <?php echo $thumbnailClass; ?>" id="post-<?php the_ID(); ?>">
			<?php
				if ( has_post_thumbnail() ) { ?>
					<div class="post-thumbnail">
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
							<?php the_post_thumbnail( array(250,250)); ?>
						</a>
					</div>
				<?php } ?>
			<div class="post-text-content"><p class="entry-meta"><time datetime="<?php the_time('l, F jS, Y') ?>" pubdate><?php the_time('m.d.y') ?></time></p>
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                	<h2><?php the_title(); ?></h2>
                </a>
                <?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="btn">Read More &raquo;</a></div>
		</article>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <ul class="navigation group">
        <li class="older">
            <?php next_posts_link( __( '« Older posts' ) ); ?>
        </li>
        <li class="newer">
            <?php previous_posts_link( __( 'Newer posts »' ) ); ?>
        </li>
    </ul>
<?php endif; ?>
</section>
