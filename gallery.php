<?php /*
	Template Name: Gallery
*/ 
 ?>
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
 <main class="gallery">
  <h2><span class="underline"> Our Gallery</span></h2>
  <div class="wrapper galleryWrapper">
    <div class="featuredImage" style="background-image: url('<?php the_field('main_image'); ?>'); ">
    </div>

     <?php 

     $images = get_field('images');

     if( $images ): ?>
     <div class="grid">
         <ul>
             <?php foreach( $images as $image ): ?>
              <div class="grid-item">
                 <li>
                     <a href="<?php echo $image['url']; ?>">
                          <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                     </a>
                     <p><?php echo $image['caption']; ?></p>
                 </li>
                </div>
             <?php endforeach; ?>
         </ul>
    </div>
     <?php endif; ?>
  </div>
 </main>

  
 <?php get_footer(); ?>