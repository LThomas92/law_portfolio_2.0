<div class="container-margins">
<footer>
  <div class="footer-info">
  <a href="<?php echo site_url();?>"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Lawrence Thomas Logo"/></a>
  <?php $args = array('menu'=>'footer-menu');
        wp_nav_menu($args); ?>
</div> <!-- footer info -->
<div class="footer-social-container">
<div class="footer-social-container__icons">
<a target="_blank" href="https://www.linkedin.com/in/lawrence-thomas-245519195"><img class="sm-logo" src="<?php echo get_template_directory_uri(); ?>/img/linkedin-logo.svg" alt="Linkedin Logo"/></a>
<a target="_blank" href="https://www.github.com/LThomas92"><img class="sm-logo" src="<?php echo get_template_directory_uri(); ?>/img/github-logo.svg" alt="Github Logo"/></a>
</div> <!-- footer social container icons -->
</div> <!-- footer social container -->
</footer>
</div> <!-- container margins -->
<?php wp_footer(); ?>
</body>
</html>
