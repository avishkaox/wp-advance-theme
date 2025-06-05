<?php
/*
header navigation template
*/

$menu_class = \AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('aquila-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);

echo '<pre>';
print_r($header_menus);

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <?php
  // If you have a custom logo, you can display it here.
  if (function_exists('the_custom_logo')) {
    the_custom_logo();
  }
  ?>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul> -->
      <?php
      wp_nav_menu([
        'theme_location' => 'aquila-header-menu',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navbarSupportedContent',
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
        'fallback_cb' => false,
        'add_li_class' => 'nav-item',
        'add_a_class' => 'nav-link',
        'dropdown_class' => 'nav-item dropdown',
        'dropdown_toggle_class' => 'nav-link dropdown-toggle',
        'dropdown_menu_class' => 'dropdown-menu',
        'dropdown_divider_class' => 'dropdown-divider',
        'dropdown_item_class' => 'dropdown-item',
      ]);
      ?>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>