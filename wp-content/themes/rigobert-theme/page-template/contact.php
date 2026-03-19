<?php
/* Template Name: Contact */

get_header();
?>

<main class="grid-main">
    <h1 class="title mt-section col-span-12 text-center">
        Contactez-<span class="highlight">nous</span>
    </h1>

    <div class="md:col-start-3 col-start-2 col-end-12 md:col-end-11 cf7-wrapper">
        <span class="text-base font-cormorant">Les champs marqué d'une astérisque (*) sont obligatoires.</span>
        <?= do_shortcode('[contact-form-7 id="177096f" title="Contact form 1"]') ?>
    </div>
</main>

<?php
get_footer();