<?php get_header(); ?>

<?php $loop = new WP_Query(array( 
'post_type' => 'post', 
'posts_per_page' => -1,
'orderby' => 'date'
)); 
?>

<main>
    <section class="blog-container">
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="blog-container__single">
<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
<?php $category = get_the_category();
			$firstCategory = $category[0]->cat_name; 
			$link = get_category_link( $category[0]->term_id );
			?>
<p><?php the_date('F j, Y'); ?> | <a class="cat-link" href="<?php echo $link;?>"><?php echo get_the_category()[0]->cat_name; ?></a></p>
<a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
<a class="blog-container__single__link" href="<?php the_permalink(); ?>">Read More</a>
</div> <!-- blog container single -->
<?php endwhile; ?>
</section>
</main>

<?php get_footer(); ?>