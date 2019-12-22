<?php

get_header(); 

pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'There is so much magnificence in our events',
  'photo' => get_theme_file_uri('/images/beach.jpg')
));
?>
<div class="container container--narrow page-section">
  <?php while (have_posts()) {
    the_post(); 
    get_template_part('template-parts/content', 'event'); 
  }
  echo paginate_links();
  ?>
  <hr class="section-break">
  <h3 class="past-event-custom-margin">View Our Past Events <a href="<?php echo site_url('/past-events')?>">Here</a>.</h3> 
</div>
<?php get_footer();

?>

