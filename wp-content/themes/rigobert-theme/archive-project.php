<?php

/* Template Name: Projet */

get_header();
$projects = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => -1,
]);
?>
<main class="grid-main">
    <h1 class="col-span-full text-center title mt-section">Nos&nbsp; <span class="highlight">projets</span></h1>

    <div class="col-start-2 col-end-12 grid grid-cols-3 gap-4">
        <?php if ($projects->have_posts()): ?>
            <?php while ($projects->have_posts()):
                $projects->the_post(); ?>
                <article class="flex-1 aspect-[3/4] relative group">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>"
                        class="absolute w-full h-full object-cover">
                    <div
                        class="absolute bottom-0 left-0 right-0 p-10 bg-black/70 text-background opacity-0 group-hover:opacity-100 h-full transition-all font-cormorant duration-300">
                        <div
                            class="flex flex-col items-center justify-end gap-4 border border-background rounded-tr-full rounded-tl-full h-full px-10 pb-10">
                            <h3 class="font-forum text-3xl pb-4 border-b border-background w-full text-center">
                                <?= get_the_title() ?>
                            </h3>
                            <p class="text-content text-background line-clamp-6"><?= get_the_content() ?></p>
                            <a href="<?= get_permalink() ?>" class="btn-secondary">En savoir plus</a>
                        </div>
                    </div>
                </article>


            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else: ?>
            <p>Aucun projet trouvé.</p>
        <?php endif; ?>
    </div>

</main>
<?php
get_footer();