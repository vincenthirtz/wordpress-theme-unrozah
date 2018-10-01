<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0"/>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
    <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

  
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php wp_head(); ?>

</head>
<body>
<div class="background" id="bg_1">
    <div class="background" id="bg_2">
        <div class="background" id="bg_3">
            <img id="banner" src="<?php bloginfo('template_directory') ?>/css/img/background.jpg"/>

            <div class="placeholder"></div>
            <nav>
             
                <?php wp_nav_menu( array( 
                    'unrozah' => 'Primary',
                    'container_class' => 'navbarlist'
                    ) ); ?>
            </nav>