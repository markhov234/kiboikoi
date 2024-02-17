<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <!-- Include your custom styles -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/styles.css"> -->

    <!-- Include your custom script -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/dist/js/bundle.js" defer></script>
</head>

<body>

    <nav id="menu_principal-nav" class="menu-principal">
        <div class="menu-principal-container">
            <div class="menu-principal-content">
                <span class="menu-principal-logo">
                    <?php
                    $logo = get_my_logo();
                    if ($logo) {
                        echo '<a class="logo-link" href="' . home_url() . '"><img src="' . $logo['url'] . '" alt="' . $logo['alt'] . '" /></a>';
                    }
                    ?>
                </span>
                <div id="menu-hamburger" class="hamburger-menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu',
                    'menu_class'     => 'menu-principal-ul',
                    'container'      => false,
                    'menu_id'        => 'menu-principal-ul',
                )
            );
            ?>
        </div>
        <div class="menu-principal-wave"></div>
    </nav>

    <?php
    wp_body_open();
    ?>