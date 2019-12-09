<?php
get_header();
 while(have_posts()) {
   the_post();?>
   <h2>This is a page<br /><hr><?php the_title(); ?></h2>
   <p><?php the_content(); ?></p>
<?php 
}
get_footer();
?>
