<?php

/* Template Name: Projet */

get_header();
$projects = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => -1,
]);
?>
<main class="grid-main">
    <h1 class="col-span-full text-center title lg:mt-section mt-12">Nos&nbsp; <span class="highlight">projets</span>
    </h1>

    <div class="col-start-2 col-end-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-4">
        <?php if ($projects->have_posts()): ?>
            <?php while ($projects->have_posts()):
                $projects->the_post();
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $link = get_permalink();
                ?>
                <div class="relative group">
                    <div class="aspect-square relative">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= $title ?>"
                            class="absolute w-full h-full object-cover">

                        <div
                            class="absolute bottom-0 left-0 right-0 2xl:p-10 p-3 bg-black/70 text-background opacity-0 lg:group-hover:opacity-100 h-full transition-all font-cormorant duration-300 hidden lg:block">
                            <div
                                class="flex flex-col items-center justify-end gap-4 border border-background rounded-tr-full rounded-tl-full h-full px-7 pb-7 2xl:px-10 2xl:pb-10">
                                <h3 class="font-forum text-2xl 2xl:text-3xl pb-4 border-b border-background w-full text-center">
                                    <?= $title ?>
                                </h3>
                                <p class="text-content text-background line-clamp-3 xl:line-clamp-5"><?= $excerpt ?></p>
                                <a href="<?= $link ?>" class="btn-secondary">En savoir plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="lg:hidden p-6 bg-black/70 text-background font-cormorant">
                        <div class="flex flex-col items-center gap-4">
                            <h3 class="font-forum text-3xl pb-4 border-b border-background w-full text-center">
                                <?= $title ?>
                            </h3>
                            <p class="text-content text-background line-clamp-6"><?= $excerpt ?></p>
                            <a href="<?= $link ?>" class="btn-secondary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p class="col-span-12 text-center text-content">Aucun projet trouvé</p>
        <?php endif; ?>
    </div>

</main>
<?php
get_footer();