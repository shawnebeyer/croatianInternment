<?php /*
  Template Name: EventsCalendar
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
 <main class="container eventsContainer">
   <section class="eventsPhoto">
      
   </section>
   <section class="eventsTitle">
    <div class="wrapper">
      <h2><span class="underline">Event and Lecture announcements</span></h2>
    </div>
   </section>
   <section class="eventsContent">
    <div class="wrapper">
      <div id="tribe-events-pg-template">
       <?php tribe_events_before_html(); ?>
       <?php tribe_get_view(); ?>
       <?php tribe_events_after_html(); ?>
      </div> <!-- #tribe-events-pg-template -->
    </div>
   </section>
 </main>
<?php get_footer(); ?>