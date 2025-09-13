<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?> 
    <script defer src="https://unpkg.com/alpinejs" ></script>
    <style>[x-cloak] { display: none !important; }</style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>

<body>
    
<!-- Desktop Navigation -->
<nav id="desktopNav" class="hidden md:block">
    <div class="flex items-center justify-between p-4 bg-[var(--main-bg)]">
        <div class="flex items-center">
            <div> 
                <a href="/" class="">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
                <!-- <a class="text-[var(--olive)] text-2xl font-medium ml-5" href="/">Minuto De Accion</a> -->
            </div>
            <div>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'main-nav pl-6',
                    'fallback_cb'    => false, // don’t fall back to a pages list
                ]);
                ?>
            </div>
        </div>
        
        <div>
            <a class="px-4 py-3 hover:bg-yellow-50 rounded-full border border-[var(--olive)] bg-[var(--olive)] text-white hover:text-[var(--olive)] transition-all duration-100" href="#">Join the Newsletter</a>
        </div>
    </div>
</nav>

<!-- Mobile navigation -->
<nav x-data="{ open: false }" id="mobileNav" class="block md:hidden">
    <div class="flex items-center justify-between h-20 px-5 bg-[var(--main-bg)]">
        <div class="flex items-center"> 
                <a href="/" class="">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
                <a class="text-[var(--olive)] text-2xl font-medium ml-5" href="/">Minuto De Accion</a>
        </div>
        <div class="flex justify-end">
            <!-- Hamburger Menu -->
            <button @click="open = !open" :class=" open ? 'hidden' : 'block' " id="open" class="text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </button>

            <!-- Close Menu -->
            <button x-cloak x-show="open" @click="open = !open" :class=" open ? 'block' : 'hidden' " id="close" class="text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
            
        </div>
    </div>
    

    <div 
        x-cloak
        x-show="open"
        x-transition:enter="transition transform ease-out duration-100"
        x-transition:enter-start="opacity-0 translate-x-full"
        x-transition:enter-end="opacity-100 -translate-x-0"

        x-transition:leave="transition transform ease-in duration-100"
        x-transition:leave-start="opacity-100 -translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-full"
        class="pt-6 flex flex-col absolute top-[126px] left-0 w-full main-mobile-nav h-screen z-20 bg-[var(--main-bg)] gap-y-3"
    >
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex flex-col gap-y-4',
            'fallback_cb'    => false,
        ]);
        ?>
        <!-- newsletter cta -->
        <a class="block py-2 pl-5 text-3xl font-medium hover:underline text-[var(--olive)]" href="">Join our Newsletter</a>

        

        <!-- lastest posts -->
        <h4 class="pl-5 text-2xl font-light">Latest Articles</h4>
        <div class="flex flex-col pl-10 gap-y-2">
            <?php 
                $latest_posts = new WP_Query([
                    'posts_per_page' => 3, // limit to 3
                    'post_status'    => 'publish', // only published posts
                ]);

            while ($latest_posts->have_posts()) {
                $latest_posts->the_post(); ?>
                <div class="flex items-center gap-x-3">
                    <span class="flex items-center">    
                        *
                    </span>
                    <a class="text-2xl font-semibold hover:text-[var(--olive)]" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            <?php }
            wp_reset_postdata(); // reset to the main query
            ?>   
        </div>
    </div>
</nav>
