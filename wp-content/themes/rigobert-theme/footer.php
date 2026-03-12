<?php
$phone = get_field('phone_number', 'option');
$email = get_field('email_address', 'option');
$instagram = get_field('socials_instagram', 'option');
$facebook = get_field('socials_facebook', 'option');

?>

<footer class=" text-white mt-[100px] relative font-cormorant text-content">
    <img src="<?= get_template_directory_uri() ?>/img/footer_bg.png" alt="Logo"
        class="absolute top-0 left-0 w-full h-full -z-10">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-lg">
                <img src="<?= get_template_directory_uri() ?>/img/logo_footer.svg" alt="Logo de Rigobert">
                <h3 class="sr-only">
                    <?php bloginfo('name'); ?>
                </h3>
                <div class="flex flex-col gap-2 ml-6 mt-4">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                            <path stroke="#f1e8d6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2m20 0v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6m20 0-10 7L2 6" />
                        </svg>
                        <a href="mailto:<?= $email ?>" class="text-background hover:text-gray-400 transition-colors">
                            <?= $email ?>
                        </a>
                    </div>
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                            <path stroke="#f1e8d6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.574 2.81.7A2 2 0 0 1 22 16.92" />
                        </svg>
                        <a href="tel:<?= $phone ?>" class="text-background hover:text-gray-400 transition-colors">
                            <?= $phone ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center footer-nav">
                <h3 class="text-content text-background font-semibold mb-4">Navigation</h3>
                <nav class="space-y-2 text-lg">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'space-y-2',
                        'container' => false,
                        'fallback_cb' => false,
                    ));
                    ?>
                </nav>
            </div>

            <div class="text-right flex flex-col gap-2">
                <h3 class="text-content text-background font-semibold">Nos réseaux</h3>
                <div class="flex items-end justify-end gap-4">
                    <a href="<?= $instagram ?>" target="_blank"
                        class="text-background hover:text-gray-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                            <g clip-path="url(#a)">
                                <path stroke="#f1e8d6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M17.5 6.5h.01M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5m9 9.37a4 4 0 1 1-7.914 1.174A4 4 0 0 1 16 11.37" />
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M0 0h24v24H0z" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a href="<?= $facebook ?>" target="_blank"
                        class="text-background hover:text-gray-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                            <path stroke="#f1e8d6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                        <span class="sr-only">Facebook</span>
                    </a>
                </div>
                <p class="text-background text-base">
                    &copy;
                    <?php echo date('Y'); ?>
                    <?php bloginfo('name'); ?>.<br>
                    Tous droits réservés.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>