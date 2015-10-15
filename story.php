<?php /*
	Template Name: Story
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
<main class="container storyContainer">
	<section class="storyPhoto">
		<?php $storyPicture = get_field('story_picture'); ?>
		<img class="storyPicture" src="<?php echo $storyPicture['sizes']['large'] ?>">
	</section>
	<section class="storyTitle">
		<div class="wrapper">
			<h2><span class="underline">Tell us your story.</span></h2>
		</div>
	</section>
	<section class="storyContent">
		<div class="wrapper">
			<p><?php the_field('story_text'); ?></p>
		</div>
	</section>
	<h3><a href="" class="button">Get in touch</a></h3>
</main>

<?php get_footer(); ?>