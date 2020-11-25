<?php get_header(); ?>

<header class="header-container">
<div class="header-container__featured-blog">
<?php 
$loop = new WP_Query(array( 
'post_type' => 'post', 
'posts_per_page' => 1,
'orderby' => 'date'
)); 
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<a href="<?php the_permalink();?>"><h1><?php the_title();?></h1></a>
<figure>
<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
</figure>


<?php endwhile; ?>
</div> <!-- header container featured blog -->
<div class="header-container__title-box">
<h1 class="header-container__title">Lawrence Thomas</h1>
<p class="header-container__desc">Web Developer | New York</p>
<a class="btn" href="<?php echo site_url('/contact');?>">Contact Me!</a>
</div> <!-- header container title box -->
</header>


<?php 
$projectLoop = new WP_Query(array( 
'post_type' => 'projects', 
'posts_per_page' => -1,
'orderby' => 'date'
)); 
?>
<div class="container-margins">

<section class="project-block-section">
<?php while ( $projectLoop->have_posts() ) : $projectLoop->the_post(); ?>
<a href="<?php the_permalink();?>"><div class="project-block">
<figure>
<?php the_post_thumbnail(); ?>
</figure>
<div class="project-overlay">
<a href="<?php the_permalink();?>"><h3 class="project-block__title"><?php the_title();?></h3></a>
</div>

</div> <!-- project block -->
</a>

<?php endwhile; ?>
</section> <!-- project block section -->
</div> <!-- container margins -->



<?php get_footer(); ?>
