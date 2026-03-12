<?php
$title = get_field('home_projects_title');
$title = strip_tags($title, '<strong><em><span>');
$title = str_replace(['<strong>', '</strong>'], ['<span class="highlight">', '</span>'], $title);

$projects_link = get_field('projects_link');


$query = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => 3,
]);
?>
<section aria-labelledby="project">
    <div class="grid-main">
        <div class="col-span-12">
            <h2 id="project" class="title">
                <?= $title ?>
            </h2>
        </div>
        <div class="col-start-2 col-end-12 flex gap-4">
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
                    $query->the_post();
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $link = get_permalink();
                    $image = get_field('project_img');
                    ?>
                    <div class="flex-1 aspect-[3/4] relative group">
                        <img src="<?= $image['url'] ?>" alt="<?= $title ?>" class="absolute w-full h-full object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 p-10 bg-black/70 text-background opacity-0 group-hover:opacity-100 h-full transition-all font-cormorant duration-300">
                            <div
                                class="flex flex-col items-center justify-end gap-4 border border-background rounded-tr-full rounded-tl-full h-full px-10 pb-10">
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
        <a href="<?= $projects_link ?>" class="btn-primary col-span-12 mx-auto mt-10">Voir tous les projets</a>
    </div>
</section>