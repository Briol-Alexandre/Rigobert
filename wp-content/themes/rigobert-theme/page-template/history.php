<?php

/* Template Name: History */

get_header();

$content = get_field('text_content');
$gallery = get_field('history_gallery');
$us_image = get_field('picture_us');
$us_link = get_field('us_link');
?>

<main class="grid-main">
    <h1 class="title lg:mt-section mt-12 col-span-12 text-center">
        Notre&nbsp; <span class="highlight">histoire</span>
    </h1>

    <div class="text-content col-start-2 lg:col-start-3 col-end-12 lg:col-end-11">
        <?= $content ?>
    </div>

    <?php if ($gallery): ?>
                <div class="col-start-2 lg:col-start-3 col-end-12 grid grid-cols-1 md:grid-cols-3 lg:col-end-11 mt-10 gap-4">
                    <?php foreach ($gallery as $image): ?>
                                <a href="<?= $image['url'] ?>"
                                    class="gallery-image cursor-pointer block h-full overflow-hidden w-full group relative">
                                    <span
                                        class="opacity-0 group-hover:opacity-100 absolute w-full h-full bg-black/50 flex items-center justify-center transition-all duration-300 font-cormorant text-background text-2xl font-bold">Voir
                                        l'image</span>
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class=" h-auto object-cover aspect-square">
                                </a>
                    <?php endforeach; ?>
                </div>
    <?php endif; ?>
    <section aria-labelledby="us" class="col-span-full grid-main">
        <h2 id="us" class="title col-span-full">Nous</h2>
        <img src="<?= $us_image['url'] ?>" alt="<?= $us_image['alt'] ?>"
            class="col-start-2 lg:col-start-3 col-end-12 lg:col-end-11 aspect-video object-cover">
        <a href="<?= $us_link['url'] ?>"
            class="btn-primary col-start-3 col-end-11 mx-auto mt-10"><?= $us_link['title'] ?></a>
    </section>
</main>

<?php
get_footer();