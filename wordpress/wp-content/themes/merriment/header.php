<?php
/*
================================================================================================
Merriment - header.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the two required files 
for a theme (the other footer.php). The header.php template file only displays the header section
of this theme. This also displays the navigation menu as well or any extra features such s social
navigation.

@package        Merriment WordPress Theme
@copyright      Copyright (C) 2017. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://www.benjlu.com/)
================================================================================================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="http://gmpg.org/xfn/11" rel="profile" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <section id="site-container" class="site-container">
        <?php if (get_header_image()) { ?>
            <header id="site-header" class="site-header header-image">
                <div id="site-branding" class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h3 class="site-description"><?php bloginfo('description'); ?></h3>
                </div>
            </header>
        <?php } ?>
        <section id="main-navigation" class="main-navigation">
            <?php if (has_nav_menu('primary-navigation')) { ?>
                <nav id="site-navigation" class="primary-navigation">
                    <button class="menu-toggle" aria-conrol="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'merriment'); ?></button>
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'primary-navigation',
                        'menu_id'           => 'primary-menu',
                        'menu_class'        => 'nav-menu'   
                    )); 
                    ?>
                </nav>            
            <?php } ?>
        </section>
        <section id="site-content" class="site-content">