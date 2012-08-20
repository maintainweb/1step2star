<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <?php roots_header_inside(); ?>
  <div class="navbar-inner">
    <div class="<?php echo WRAP_CLASSES; ?>">
     <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
      <ul id="menu-primary-navigation" class="nav">
        <li class="menu-introduction"><a class="nav-button" href="#intro">Introduction</a></li>
        <li class="menu-about-us"><a class="nav-button" href="#about">About Us</a></li>
        <li class="menu-sponsors"><a class="nav-button"href="#sponsors">Sponsors</a></li>
        <li class="menu-results"><a class="nav-button" href="#results">Results</a></li>
        <li class="menu-news"><a class="nav-button" href="#news">News</a></li>
      </ul>
        <?php // wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav')); ?>
      </nav>
    </div>
  </div>
</header>