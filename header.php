<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;515;600;700&display=swap" rel="stylesheet">
    <title><?php bloginfo('name')?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<div class="search-overlay">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
        <input type="search" class="search-field" placeholder="Find Something.." value="<?php echo get_search_query(); ?>" name="s" />
        </label>
        <button type="submit" class="search-submit"></button>
</form>
</div>

<header>
<div class="nav-margins">
<nav class="main-navigation">
  <div class="logo-container">
  <a href="<?php echo site_url();?>"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Lawrence Thomas Logo"/></a>
  </div> <!-- LOGO CONTAINER -->

<?php $args = array('menu'=>'main-menu');
        wp_nav_menu($args); ?>

  <img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search-icon.png" alt="Search Icon">
  <img class="close-btn" src="<?php echo get_template_directory_uri(); ?>/img/close-button.svg" alt="Close Button"/>
</nav><!-- NAVIGATION CONTAINER -->
<div class="mobile-icons">
<a href="<?php echo site_url();?>"><img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Lawrence Thomas Logo"/></a>
<img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.svg" alt="Hamburger Menu"/>
</div> <!--mobile icons -->
</div> <!-- NAV MARGINS -->

<div class="menu-overlay-container menu-overlay">
<div class="mobile-margins">
<div class="mobile-menu-icons">
<a href="<?php echo site_url();?>"><img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Lawrence Thomas Logo"/></a>
<img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.svg" alt="Hamburger Menu"/>
<img class="mobile-close-btn" src="<?php echo get_template_directory_uri(); ?>/img/close-button.svg" alt="Close Button"/>
</div> <!-- mobile menu icons -->

<?php $args = array('menu'=>'main-menu');
        wp_nav_menu($args); ?>

<div class="mobile-search-margins">
<div class="mobile-search-container">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
        <input style="margin: 0; line-height: 4rem" type="search" class="search-field" placeholder="Find Something.." value="<?php echo get_search_query(); ?>" name="s" />
		
		</label>
</form>
</div> <!--mobile search container -->
</div> <!-- mobile search margins -->

</div> <!-- mobile margins -->
</div> <!-- menu overlay -->

</header>


