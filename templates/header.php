<nav class="navbar">
  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
    <?php bloginfo('name'); ?>
    <div class="navbar-burger"><i class="fas fa-bars"></i></div>
  </a>
  <div class="nav-primary">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </div>
</nav>
<header class="hero">
  <div class="hero-body">
    <?= get_template_part('templates/page', 'header'); ?>
  </div>
</header>
