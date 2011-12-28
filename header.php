<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/apple-touch-icon.png" />
  <?php wp_head(); ?>
</head>
<body>

<div class="container">

  <div class="row header">

    <div class="span4">
      <div class="logo">
        <a href="<?php bloginfo('url'); ?>"></a>
      </div>
    </div>

    <div class="span11">
      <div class="title">
        <h5><?php bloginfo('name'); ?></h5>
        <h5>
          <small>
            <?php bloginfo('description'); ?>
          </small>
        </h5>
      </div>
      <hr />
    </div>

  </div> <!-- /header -->
  <div class="row">

    <div class="span10 offset4 section-title">
      <h1>
        <small>
          <?php
          if(is_search()){
            printf('Search Results for: %s', '<em>' . get_search_query() . '</em>');
          } else the_title();
          edit_post_link('Edit This');
          ?>
        </small>
      </h1>
    </div>

    <div class="span1 social">
      <div class="gplusone">
        <g:plusone size="medium" annotation="none"></g:plusone>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="span4 navigation">

      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
      
      <?php get_search_form(); ?>

    </div> <!-- /navigation -->
