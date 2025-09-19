<footer class="bg-[var(--main-bg)] py-12 no-print"> 
    <section class="max-w-[1440px] px-5 lg:px-20 lg:py-20 mx-auto flex flex-col items-center justify-center pb-12 lg:justify-between lg:flex-row gap-y-12">
        <div class="flex justify-start lg:w-[140px]"> 
                <a href="/" class="">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
                
        </div>
        <nav class="flex items-center" aria-label="Footer Navigation">
            <?php
            wp_nav_menu([
            'theme_location' => 'footer_menu',
            'container'      => false,
            'menu_class'     => 'footer-menu list-none p-0 flex flex-col gap-y-6 md:flex-row md:flex-wrap md:gap-x-8 lora-semibold text-center',
            'depth'          => 1,
            'fallback_cb'    => false,
            ]);
        ?>
        </nav>
        <nav class="flex justify-end" aria-label="Social Menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'social',
                'container'      => false,
                'menu_class'     => 'flex gap-x-6',
                'depth'          => 1,
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </section>
    <div class="max-w-[1312px] mx-auto border-b border-black"></div>

    <section class="pt-8 text-center">
        <small class="lora">&copy; 2025 Minuto de Accion</small>
    </section>
    
    
</footer>

<?php wp_footer(); ?>
</body>
</html>