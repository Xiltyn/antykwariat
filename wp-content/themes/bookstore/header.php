<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package antykwariat
 */

 global $post;

 $thePostID = woocommerce_get_page_id( 'sklep' );

?>
<!doctype html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>antykwariat</title>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">

<?php wp_head(); ?>

</head>
<body>


<!-- HERO -->
  <header class=<?php
    echo '"main-header'.($thePostID=='-1' ? ' shop"' : '"');
  ?>>
    <div class="logo-container small-text">
      LOGO
    </div>


    <!-- <ul class="main-nav small-text">
      <li class="main-nav-element active">Główna</li>
      <li class="main-nav-element">Kontakt</li>
      <li class="main-nav-element">O Nas</li>
      <li class="main-nav-element">Sklep</li>
    </ul> -->

    <?php

      wp_nav_menu(array(
        'menu_class' => 'main-nav small-text',
      ));

    ?>

    <div class="cart-widget small-text">
      11.87,-
    </div>
  </header>
