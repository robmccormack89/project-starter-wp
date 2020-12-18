<?php
/**
* The template for displaying author archive pages
*
* @package Starter_Theme
*/

global $wp_query;

$context          = Timber::context();
$context['posts'] = new Timber\PostQuery();

if ( isset( $wp_query->query_vars['author'] ) ) {
  $author = new Timber\User( $wp_query->query_vars['author'] );
  $context['author'] = $author;
  $context['title']  = esc_html__('Author Archives:', 'starter-wp-theme').' '. $author->name();
}

Timber::render( array( 'author.twig', 'archive.twig' ), $context );