<?php get_header(); ?>
		<?php
		while ( have_posts() ) :
			the_post();?>


<main id="primary">

	<!-- MAIN CONTENT -->
	<article class="single-post">
		<h1><?php the_title();?></h1>
	<figure class="single-post-main-img">
	<?php the_post_thumbnail();?>
	</figure>
	<em><?php get_the_category();?></em>
		<div class="content-margins">
	<div class="single-post-content-sidebar-container">
	<div class="single-post-content">
	<?php the_content(); ?>
	</div> <!-- single post content -->
</div> <!-- single post content sidebar container -->


	<div class="single-post-content__tags">
	<?php echo the_tags();?>
	</div> <!-- single post tags -->

<div class="single-post-sidebar">
	<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
	if( $related ) foreach( $related as $post ) {
	setup_postdata($post); ?>
			
		<div class="single-post-sidebar__single">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</div> <!-- single post sidebar single -->

<?php }
wp_reset_postdata(); ?>
	 </div> <!-- single post sidebar -->
	 </div> <!-- CONTENT MARGINS -->
</article>




<?php endwhile; // End of the loop.?>



</main>





<?php get_footer(); ?>
