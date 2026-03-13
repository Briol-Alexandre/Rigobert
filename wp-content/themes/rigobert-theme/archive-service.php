<?php

/* Template Name: Services */

get_header();
$services = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => -1,
]);
?>
<main class="grid-main">
    <h1 class="col-span-full text-center title mt-section">Nos <span class="highlight">services</span></h1>

    <div class="col-start-2 col-end-12 grid grid-cols-3 gap-4">
        <?php if ($services->have_posts()): ?>
            <?php while ($services->have_posts()):
                $services->the_post(); ?>
                <article class="relative">
                    <a href="<?= get_the_permalink() ?>" class="absolute top-0 left-0 w-full h-full"></a>
                    <div class="rounded-t-full overflow-hidden">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="p-5"
                        style="background-image: url('<?= get_template_directory_uri() ?>/img/bg_whool.png'); background-size: cover; background-position: center;">
                        <h2 class="text-center font-cormorant text-2xl 2xl:text-3xl"><?= get_the_title(); ?></h2>
                        <p class="line-clamp-4 text-content"><?= get_the_excerpt() ?></p>
                    </div>
                </article>


            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else: ?>
            <p>Aucun service trouvé.</p>
        <?php endif; ?>
    </div>

</main>
<?php
get_footer();