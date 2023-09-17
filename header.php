<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?php wp_title(''); ?>
        <?php bloginfo( 'name' ); ?> 
      </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php wp_nav_menu( array(
    'theme_location'  => 'navmenu',
    'container'       => '',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
    
    
) );
     
    ?>
    <div class="search">
    <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    </div>
  </div>
</nav>
