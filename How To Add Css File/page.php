
<?php

get_header();



while(have_posts()){

  the_post();

 ?>

<h1>This page not post</h1>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php }

 get_footer();

?>
