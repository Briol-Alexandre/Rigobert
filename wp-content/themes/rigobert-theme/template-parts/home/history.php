<?php


$title = get_field('history_title');
$title = strip_tags($title, '<strong><em><span>');
$title = str_replace(['<strong>', '</strong>'], ['<span class="highlight">', '</span>'], $title);
$images = get_field('history_images');
$description = get_field('history_description');
$link = get_field('history_link');

?>

<section class="grid-main" aria-label="histoire">
    <div class="col-start-2 col-end-5 flex flex-col gap-6">
        <h2 id="histoire" class="small_title"><?= $title ?></h2>
        <p class="text-content text-justify"><?= $description ?></p>
        <a href="<?= $link['url'] ?>" class="btn-primary">
            <?= $link['title'] ?>
        </a>
    </div>
    <div class="col-start-6 col-end-11">
        <a href="<?= $images[0]['url'] ?>"
            class="gallery-image w-full cursor-pointer block h-full overflow-hidden group relative">
            <span
                class="opacity-0 group-hover:opacity-100 absolute w-full h-full bg-black/50 flex items-center justify-center transition-all duration-300 font-cormorant text-background text-2xl font-bold text-center">Voir
                l'image</span>
            <img src="<?= $images[0]['url'] ?>" alt="<?= $images[0]['alt'] ?>"
                class="h-full object-cover hover:scale-105 transition-transform">
        </a>
    </div>
    <div class="col-start-11 col-end-12 flex flex-col gap-4">
        <?php for ($i = 1; $i < count($images); $i++) { ?>
            <a href="<?= $images[$i]['url'] ?>"
                class="gallery-image w-full cursor-pointer block h-1/2 overflow-hidden group relative">
                <span
                    class="opacity-0 group-hover:opacity-100 absolute w-full h-full bg-black/50 flex items-center justify-center transition-all duration-300 font-cormorant text-background text-2xl font-bold text-center">Voir
                    l'image</span>
                <img src="<?= $images[$i]['url'] ?>" alt="<?= $images[$i]['alt'] ?>"
                    class="h-full object-cover hover:scale-105 transition-transform">
            </a>
        <?php } ?>
    </div>
</section>