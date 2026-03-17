<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body class="bg-background min-h-screen relative">

    <header id="site-header" data-is-front-page="<?= is_front_page() ? 'true' : 'false' ?>"
        class="<?= is_front_page() ? 'fixed bg-transparent text-background' : 'sticky bg-white text-main' ?> top-0 z-50 w-full grid-main transition-all duration-300 overflow-x-hidden">
        <nav aria-labelledby="main-nav" class="col-start-2 col-end-12 main-menu">
            <h2 id="main-nav" class="sr-only">Navigation principale</h2>

            <a href="<?php echo home_url(); ?>" class="logo-link logo-center">
                <span class="sr-only"><?php bloginfo('name'); ?></span>
            </a>

            <div class="menu-links">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'fallback_cb' => false,
                    'items_wrap' => '<ul>%3$s</ul>',
                ));
                ?>
            </div>

            <button id="burger-btn" aria-label="Ouvrir le menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
        <div id="mobile-menu" aria-hidden="true">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
                'items_wrap' => '<ul>%3$s</ul>',
            ));
            ?>
        </div>

        <div class="fixed top-2 left-2 z-[9999] px-2 py-1 text-white text-sm font-bold rounded bg-black/70">
            <span class="block sm:hidden">XS ( < 640px )</span>
                    <span class="hidden sm:block md:hidden">SM ( ≥ 640px )</span>
                    <span class="hidden md:block lg:hidden">MD ( ≥ 768px )</span>
                    <span class="hidden lg:block xl:hidden">LG ( ≥ 1024px )</span>
                    <span class="hidden xl:block 2xl:hidden">XL ( ≥ 1280px )</span>
                    <span class="hidden 2xl:block">2XL ( ≥ 1536px )</span>
        </div>
    </header>