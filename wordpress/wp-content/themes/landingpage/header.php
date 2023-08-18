<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/main.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header">
    <div class="container">
        <header>
            <div id="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
        </header>
    </div>
</div>

<div id="content" class="container">