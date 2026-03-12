<?php
/* Template Name: Home */
get_header();

?>

<main class="">
    <?= get_template_part('template-parts/home/image-section') ?>

    <?= get_template_part('template-parts/home/history') ?>

    <?= get_template_part('template-parts/home/projects') ?>

    <?= get_template_part('template-parts/home/reviews') ?>
</main>

<?php get_footer(); ?>