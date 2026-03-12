<?php
$query = new WP_Query([
    'post_type' => 'review',
    'posts_per_page' => 3,
]);
?>

<section aria-labelledby="reviews" class="grid-main">
    <h2 id="reviews" class="title col-span-12">Avis</h2>
    <div class="col-start-2 col-end-12 flex gap-4">
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()):
                $query->the_post();
                $content = get_the_content();
                $author = get_field('author');
                ?>
                <div class="p-10"
                    style="background-image: url('<?= get_template_directory_uri() ?>/img/bg_whool.png'); background-size: cover; background-position: center;">
                    <p class="text-content line-clamp-6 font-bold">
                        <?= $content ?>
                    </p>
                    <p class="text-content text-right mt-4">
                        <?= $author ?>
                    </p>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else: ?>
            <p class="col-span-12 text-center text-content">Aucun avis trouvé</p>
        <?php endif; ?>
    </div>
</section>