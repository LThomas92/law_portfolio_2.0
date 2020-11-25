<?php get_header(); ?>

<main>
<div class="container-margins">
<div class="single-project-container">
<div class="single-project-container__left">
<figure>
<?php $screenShot = get_field('project_screenshot');
if( !empty( $screenShot ) ): ?>
    <img class="project-screenshot-img" src="<?php echo esc_url($screenShot['url']); ?>" alt="<?php echo esc_attr($screenShot['alt']); ?>" />
<?php endif; ?>
</figure> <!-- single project images contianer -->

<div class="project-description">
<?php $singleProjectDesc = get_field('single_project_description'); 
$singleProjectLink = get_field('single_project_link'); ?>
<h3 class="project-description__title">Project Description</h3>
<p><?php echo $singleProjectDesc;?></p>
<a class="project-description__link" target="_blank" href="<?php echo esc_url( $singleProjectLink ); ?>">View Site</a>
</div> <!-- project desc -->


</div> <!-- single project container left -->
<div class="single-project-container__right">
<?php $techSpecs = get_field('tech_specs');?>
<div class="tech-specs-container">
<h4>This website was built with:</h4>
<?php if( $techSpecs ): ?>
<ul class="tech-specs-container__list">
    <?php foreach( $techSpecs as $techSpec ): ?>
        <li><?php echo $techSpec; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
</div> <!-- tech specs container -->
<div class="code-repo-container">
<?php $githubLink = get_field('github_link');
if( $githubLink ) { ?>
    <a class="code-repo-container__link" href="<?php echo esc_url( $githubLink ); ?>">Github</a>
<?php } else { ?>
    <p>This project has a private repo that cannot be shared. </p>
<?php } ?>


</div> <!-- code repo continer -->
</div> <!-- single project container right -->
</div> <!-- single project container -->
</div> <!-- container margins -->
</main>

<?php get_footer(); ?>