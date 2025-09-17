<footer class="bg-[var(--main-bg)] py-12 px-5 lg:p-20 mx-auto no-print"> 
    <section class="mx-auto  max-w-[1440px] flex flex-col items-center justify-center pb-12 border-b border-black lg:justify-between lg:flex-row gap-y-12">
        <div class="flex justify-start lg:w-1/3"> 
                <a href="/" class="">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
                
        </div>
        <nav class="flex justify-center lg:w-1/3 " aria-label="Footer Navigation">
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
        <nav class="flex justify-end lg:w-1/3" aria-label="Social Menu">
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

    <section class="pt-8 text-center">
        <small class="lora">&copy; 2025 Minuto de Accion</small>
    </section>
    
    
</footer>

<?php wp_footer(); ?>
</body>
</html>