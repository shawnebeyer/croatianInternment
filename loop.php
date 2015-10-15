<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="blogHalf blogText">
			<p class="postDate"><?php the_date(); ?></p>
			<h3 class="entry-title underline">
			<!-- <h2><span class="underline">An Injustice to our Pioneers</span></h2> -->
				<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
				    <?php the_title(); ?>
				</a>
			</h3>
			<span class="postExcerpt"><?php the_excerpt(); ?></span>
			<section class="entry-content">
				<?php wp_link_pages( array(
				    'before' => '<div class="page-link"> Pages:',
				    'after' => '</div>'
				    )); ?>
			</section><!-- .entry-content -->
		</section>
		<?php $thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
		?>

		<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark" class="blogHalf blogImage" style="background-image: url(<?php echo $thumb_url ?>)">
			
		</a>
	</article><!-- #post-## -->
<?php comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
