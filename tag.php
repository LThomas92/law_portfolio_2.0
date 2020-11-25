<?php get_header(); ?>

<main>
<div class="taxonomy-container">

<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">
				<?php
				/* translators: %s: Tag title. */
				printf( __( 'Tag | %s', 'twentytwelve' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?>
				</h1>
			</header><!-- .archive-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post(); ?>

<div class="taxonomy-single">
    <figure class="taxonomy-single__img">
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
    </figure>
    <div class="taxonomy-single__text">
    <a href="<?php the_permalink();?>"><h2 class="taxonomy-single__title"><?php the_title();?></h2></a>
    <p class="taxonomy-single__excerpt"><?php echo wp_trim_words(get_the_content(),  20)?></p>
    <div class="taxonomy-single__date-link">
    <p class="taxonomy-single__date"><?php echo the_date();?></p>
    <a class="taxonomy-single__link" href="<?php the_permalink();?>">View</h4></a>
    </div> <!-- tax single date link -->
        </div> <!-- tax single text -->
        </div> <!-- tax single -->
            
			<?php endwhile;?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

        </div> <!-- taxonomy container -->
</main>



<?php get_footer();?>