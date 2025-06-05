<?php

/*
this is header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WordPress Theme</title>
   <?php wp_head(); ?>
</head>

<body <?php body_class('body-class'); ?>>
<?php

if( function_exists('wp_body_open') ){
   wp_body_open();
}

wp_body_open();

?>
<div class="site" id="page">
   <header id="masthead" class="site-header" role="banner" >
      <?php get_template_part('template-parts/header/nav'); ?>
   </header>
   <div class="site-content" id="content">

