<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?> 
    <meta name="description" content="Inspiring motivational stories, practical tips, and uplifting messages to help you stay positive and achieve your goals.">
    <meta name="keywords" content="motivation, inspiration, personal growth, self improvement, positivity, success, lifestyle">
    <script defer src="https://unpkg.com/alpinejs" ></script>
    <style>[x-cloak] { display: none !important; }</style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>

<body x-data="{ open: false, click: false, faqOpen1: false, faqOpen2: false, faqOpen3: false }">
    
<!-- Desktop Navigation -->
<nav id="desktopNav" class="sticky top-0 z-50 hidden md:block bg-[var(--main-bg)] shadow-md no-print">
    <div class="flex items-center justify-between py-4 px-5 lg:px-16 max-w-[1440px] mx-auto">
        <div class="flex items-center">
            <div> 
                <a href="/" class="">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
            </div>
            <div>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'main-nav pl-6',
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>
        </div>
        
        <div>
            <a class="px-4 py-3 hover:bg-yellow-50 rounded-full border border-[var(--olive)] bg-[var(--olive)] text-white hover:text-[var(--olive)] transition-all duration-100" href="/newsletter">Join the Newsletter</a>
        </div>
    </div>
</nav>

<nav id="mobileNav" class="sticky top-0 md:hidden no-print z-50 bg-[var(--main-bg)]">
  <!-- Top bar -->
  <div class="flex items-center justify-between h-20 px-5">
    <div class="flex items-center">
      <a href="/" class="">
        <?php if ( function_exists('the_custom_logo') ) the_custom_logo(); ?>
      </a>
      <a class="text-[var(--olive)] text-2xl font-medium ml-5" href="/">Minuto De Accion</a>
    </div>

    <!-- Single toggle button -->
    <button
      @click="open = !open"
      :aria-expanded="open.toString()"
      aria-controls="mobileMenu"
      class="p-2"
    >
      <!-- hamburger -->
      <svg x-cloak x-show="!open" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 -960 960 960" fill="currentColor">
        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
      </svg>
      <!-- close -->
      <svg x-cloak x-show="open" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 -960 960 960" fill="currentColor">
        <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
      </svg>
    </button>
  </div>

  <!-- Slide-over panel -->
  <div
    id="mobileMenu"
    x-cloak
    x-show="open"
    @keydown.escape.window="open=false"
    x-transition:enter="transition transform ease-out duration-200"
    x-transition:enter-start="opacity-0 translate-x-full"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition transform ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-full"
    class="fixed inset-x-0 top-20 bottom-0 z-50 bg-[var(--main-bg)] overflow-y-auto"
  >
    <div class="pt-6 pb-10">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'flex flex-col gap-y-4 px-5 text-2xl',
        'fallback_cb'    => false,
      ]);
      ?>

      <!-- latest posts -->
      <h4 class="pl-5 mt-6 mb-2 text-2xl font-light">Ultimos Articulos</h4>
      <div class="flex flex-col pl-10 mt-2 gap-y-2">
        <?php
          $latest_posts = new WP_Query([
            'posts_per_page' => 3,
            'post_status'    => 'publish',
          ]);
          while ($latest_posts->have_posts()) { $latest_posts->the_post(); ?>
            <ul class="flex items-center list-disc gap-x-3">
              <li class="mb-2"><a class="text-xl font-semibold hover:text-[var(--olive)]" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
        <?php }
          wp_reset_postdata();
        ?>
      </div>
       <!-- newsletter cta -->
      <a class="mt-8 flex items-center justify-center py-3 ml-5 text-2xl font-medium hover:bg-yellow-100 border border-[var(--olive)] hover:text-black text-[var(--olive)] max-w-[280px] bg-[var(--olive)] text-white rounded-full" href="/newsletter/">
        Suscríbete al boletín
      </a>
    </div>
  </div>
</nav>
