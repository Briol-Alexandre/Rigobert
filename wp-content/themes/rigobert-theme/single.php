<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <article class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">
                    <?php the_title(); ?>
                </h1>

                <div class="text-gray-600 text-sm mb-6 pb-4 border-b">
                    Posté le
                    <?php echo get_the_date(); ?> par
                    <?php the_author(); ?>
                    <?php if (has_category()): ?>
                        dans
                        <?php the_category(', '); ?>
                    <?php endif; ?>
                </div>

                <?php if (has_post_thumbnail()): ?>
                    <div class="mb-6">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                    </div>
                <?php endif; ?>

                <div class="text-gray-700 prose max-w-none">
                    <?php the_content(); ?>
                </div>

                <?php if (has_tag()): ?>
                    <div class="mt-6 pt-4 border-t">
                        <span class="text-sm text-gray-600">Tags : </span>
                        <?php the_tags('', ', ', ''); ?>
                    </div>
                <?php endif; ?>

                <div class="mt-8 pt-6 border-t">
                    <?php
                    // Navigation entre les articles
                    the_post_navigation(array(
                        'prev_text' => '<span class="text-gray-600">← Article précédent</span><span class="block font-semibold">%title</span>',
                        'next_text' => '<span class="text-gray-600">Article suivant →</span><span class="block font-semibold">%title</span>',
                    ));
                    ?>
                </div>

                <?php if (comments_open() || get_comments_number()): ?>
                    <div class="mt-8 pt-6 border-t">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Article non trouvé</h2>
            <p class="text-gray-600">Désolé, cet article n'existe pas.</p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>