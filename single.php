<?php get_header(); ?>
<header id="navContainer" class="navContainer fixedNavContainer">
  <div class="navLogo">
    <p>THE CROATIAN CANADIAN</p>
    <!-- <p><i class="fa fa-phone"></i> <span class="phone">647-290-8337</span></p> -->
    <p>INTERNMENT PROJECT</p>
  </div>
  <nav class="mainNav">
    <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
  </nav>
  <div class="navSocial">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-envelope-o"></i></a>
    <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
  </div>
</header>
<div class="main postMain">
  <div class="container wrapper">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          $thumb_url = $thumb_url_array[0];
          ?>

          <div class="featuredImage" style="background-image: url(<?php echo $thumb_url ?>)">
          </div>
          <p class="postDate"><?php the_date(); ?></p>
          <h1 class="entry-title underline"><?php the_title(); ?></h1>
          <div class="entry-content">
            <div class="postContent">
              <div class="postPdf">
                <span>download pdf of this post</span>
                <?php if (function_exists("wpptopdfenh_display_icon")) echo wpptopdfenh_display_icon();?>
              </div>
              <?php the_content(); ?>
            </div>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->
        </div><!-- #post-## -->
        <?php get_sidebar(); ?>
        <div id="nav-below" class="navigation">
          <div class="postNavPrevious">
            <p class="nav-previous-text">Previous Post</p>
            <p class="nav-previous"><?php previous_post_link('%link', '%title'); ?></p>
          </div>
          <div class="postNavNext">
            <p class="nav-next-text">Next Post</p>
            <p class="nav-next"><?php next_post_link('%link', '%title'); ?></p>
          </div>
        </div><!-- #nav-below -->
        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>