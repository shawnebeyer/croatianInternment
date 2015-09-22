<?php /*
	Template Name: Gallery
*/ 
 ?>
  <?php get_header(); ?>
 <header id="navContainer" class="navContainer fixedNavContainer">
 	<div class="navLogo">
  		<p><i class="fa fa-phone"></i> 416 555 1212</p>
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
<p>asas</p>
<h1>asasasa</h1>
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
 <?php get_footer(); ?>