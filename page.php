<?php get_header();
 while(have_posts()):the_post();?>
<h1 style="margin-top:50px;text-align:center">Post Title: <?php echo get_the_title(); ?></h1>
<?php
the_content();

endwhile;

get_footer();
?>
