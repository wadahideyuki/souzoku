<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="../asset/css/common.css">
<link rel="stylesheet" type="text/css" href="../asset/css/class.css">
<link rel="stylesheet" type="text/css" href="../asset/css/seminer.css">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../asset/css/exvalidation.css">
</head>

<body <?php body_class(); ?>>
 <!--ヘッダー-->
  <?php include('../asset/inc/header.html');?>
 
<!--/ヘッダー-->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
<div class="content">
  <ul class="pankz">
    <li><a href="/">トップ</a></li>
    <li>セミナー情報</li>
  </ul>
  <div class="inner">
  <h2 class="title1"><span>セミナー情報</span></h2>
    <div class="seminer-box">
