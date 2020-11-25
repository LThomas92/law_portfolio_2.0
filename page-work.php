<?php get_header(); ?>

<main>
    <div class="container-margins">
    <?php 
$projectLoop = new WP_Query(array( 
'post_type' => 'projects', 
'posts_per_page' => -1,
'orderby' => 'date'
)); 
?>

        <?php if ( have_posts() ) : ?>
    <div class="page-work-container">
<?php while ( $projectLoop->have_posts() ) : $projectLoop->the_post(); ?>
            <div class="page-work-container__single">
            <div class="single-work-overlay"></div>
            <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail(); ?>
            </a>
             </div> <!-- single 1 -->
             <?php endwhile; 
             endif;?>
    </div> <!-- page work container -->
    </div> <!-- container margins -->
</main>

<?php get_footer(); ?>