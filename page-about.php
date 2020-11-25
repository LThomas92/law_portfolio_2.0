<?php get_header(); ?>

<main>
<div class="content-margins">
<div class="about-page-container">
<div class="about-page-container__img-container">
<img src="<?php echo get_template_directory_uri(); ?>/img/lawrence-headshot.jpg" alt="Lawrence Thomas"/>
</div> <!-- about page img container -->
<div class="about-page-container__text-container">
<h2>About Me</h2>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
 the_content(); 
 endwhile; 
endif; 
?>
</div> <!-- about page text container -->
</div> <!-- about page container -->
</div>
</main>

<?php get_footer(); ?>