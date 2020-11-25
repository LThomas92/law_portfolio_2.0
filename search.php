<?php get_header(); ?>

<section class="taxonomy-container">
<main>
<?php if ( have_posts() ) : ?>

<h1 class="search-page-title">
    <?php
    /* translators: %s: search query. */
    printf( esc_html__( 'Search | %s', 'gruber' ), '<span>' . get_search_query() . '</span>' );
    ?>
</h1>



<?php
$search_query = get_search_query();
$args = array(
'post_type' => array('post','projects',),
'posts_per_page' => 15,
'order' => 'DSC',
'post_status' => 'inherit','publish',
's' => $search_query
);

endif; ?>

<div class="taxonomy-single">
    <figure class="taxonomy-single__img">
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
    </figure>
    <div class="taxonomy-single__text">
    <a href="<?php the_permalink();?>"><h2 class="taxonomy-single__title"><?php the_title();?></h2></a>
    <p class="taxonomy-single__excerpt"><?php echo wp_trim_words(get_the_content(),  20)?></p>
    <div class="taxonomy-single__date-link">
    <p class="taxonomy-single__date"><?php echo the_date();?></p>
    <p class="taxonomy-single__excerpt-2"><?php $excerpt = wp_trim_words( get_field('single_project_description' ), $num_words = 20, $more = '...' ); ?>
   <?php echo $excerpt; ?>
</p>
    <a class="taxonomy-single__link" href="<?php the_permalink();?>">View</h4></a>
    </div> <!-- tax single date link -->
        </div> <!-- tax single text -->
        </div> <!-- tax single -->

</main>

</section>

<?php get_footer(); ?>