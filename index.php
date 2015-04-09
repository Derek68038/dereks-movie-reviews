<?php get_header(); ?>

<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>    
       <h2>
         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_field("stars"); ?> Stars
       </h2>
       <?php the_content(); ?>
   <?php
   endwhile;
endif;
?>

<?php get_footer(); ?>