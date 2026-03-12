<?php
/* Template Name: Us */
get_header();

$contact_link = get_field('contact_link');

$query = new WP_Query([
    'post_type' => 'team',
    'posts_per_page' => -1,
]);
?>
<main class="mt-section">
    <h1 class="title mb-section">Notre <span class="highlight">Équipe</span></h1>
    <?php
    $i = 0;
    $total = $query->post_count;

    while ($query->have_posts()):
        $query->the_post();
        $is_first = $i === 0;
        $is_last = $i === $total - 1;
        $show_bg = $is_first || $is_last;
        $gallery = get_field('team_gallery');
        $clean_title = strtolower(str_replace(' ', '-', get_the_title()));
        $i++;
        ?>
        <section aria-labelledby="<?= $clean_title ?>"
            class="group team-member relative text-content grid-main items-center py-16">
            <img src="<?= get_template_directory_uri() ?>/img/bg_whool.png"
                class="absolute w-full h-full -z-10 <?= $show_bg ? 'block' : 'hidden' ?>">
            <div
                class="group-even:col-start-2 group-even:col-end-6 group-odd:col-start-7 group-odd:col-end-12 row-start-1 row-end-2">
                <h2 class="font-windsong text-black text-5.5xl mb-6" id="<?= $clean_title ?>">
                    <?php the_title(); ?>
                </h2>
                <div class="team-member-content text-justify">
                    <?php the_content(); ?>
                </div>
            </div>
            <div
                class="group-even:col-start-7 group-even:col-end-12 group-odd:col-start-2 group-odd:col-end-6 row-start-1 row-end-2 grid [grid-template-columns:repeat(4,170px)] [grid-template-rows:repeat(4,160px)] gap-2">
                <?php if (has_post_thumbnail()): ?>
                    <span class="col-start-2 col-end-4 row-start-2 row-end-4">
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto object-cover w-full h-full']); ?>
                    </span>
                <?php endif; ?>
                <?php if ($gallery): ?>
                    <img src="<?= $gallery[0]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-1 col-end-2 row-start-1 row-end-2">
                    <img src="<?= $gallery[1]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-2 col-end-3 row-start-1 row-end-2">
                    <img src="<?= $gallery[2]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-3 col-span-2 row-start-1 row-end-2">
                    <img src="<?= $gallery[3]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-1 col-end-2 row-start-2 row-span-2">
                    <img src="<?= $gallery[4]['url'] ?>" alt=""
                        class="object-contain w-full h-full col-start-4 col-end-5 row-start-2 row-end-3">
                    <img src="<?= $gallery[5]['url'] ?>" alt=""
                        class="object-contain w-full h-full col-start-4 col-end-5 row-start-3 row-end-4">
                    <img src="<?= $gallery[6]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-1 col-end-2 row-start-4 row-end-5">
                    <img src="<?= $gallery[7]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-2 col-end-4 row-start-4 row-end-5">
                    <img src="<?= $gallery[8]['url'] ?>" alt=""
                        class="object-cover w-full h-full col-start-4 col-end-5 row-start-4 row-end-5">
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <a href="<?= $contact_link['url'] ?>" class="btn-primary col-span-full text-center mx-auto block mt-10">Nous
        contacter</a>
</main>

<?php
get_footer();
