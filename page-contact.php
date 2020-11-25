<?php get_header(); ?>

<main>
<section class="contact-page-section">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

<div class="contact-page-section__form">
 <?php the_content(); 
 endwhile; 
endif; 
?>

</div> <!-- contact page section form -->

<div class="contact-page-section__text">
<h2>Contact</h2>
<p>Leave me a message or contact me for work!</p>
</div>

</section>

</main>

<?php get_footer(); ?>