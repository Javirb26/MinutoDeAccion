<?php get_header() ?>

<main class="pt-16 rounded-md ">
    <section class="px-5">
        <?php 
        while(have_posts()) {
        the_post(); ?>
            <div class="flex flex-col mx-auto mb-12 lg:flex-row lg:justify-between max-w-[1280px]">
                <div class="lg:max-w-[420px] mb-2">
                    <div class="mb-6"><a class="lora-semibold"  href="#">Blog</a></div>
                    <h2 class="text-4xl lg:text-[52px] gilda leading-[120%]"><?php the_title() ?></h2>
                    <p class="pt-8 lora">By <strong>Fernando Alvarez</strong></p>
                    <p class="pt-2 mb-4 text-sm font-light lora-semibold">
                        <?php echo get_the_date(); ?> 
                        <span class="px-1">&#8226;</span>
                        <span>
                            <?php 
                                $content = get_the_content();
                                $word_count = str_word_count( wp_strip_all_tags( $content ) );
                                $minutes = ceil( $word_count / 200 );
                                echo "" . $minutes . " min read"; 
                            ?>
                        </span>
                    </p>
                    <button
                        onclick="window.print()"
                        class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white transition bg-green-600 border rounded-full shadow-sm group border-slate-300 hover:shadow-md hover:bg-green-500 active:shadow focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 no-print"
                        >
                        <svg aria-hidden="true" viewBox="0 0 24 24" width="18" height="18" class="transition opacity-80 group-hover:opacity-100">
                            <path d="M6 2h12v6H6zM6 14h12v8H6zM4 8h16v6H4zM8 17h8" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                        <span>Print / Save PDF</span>
                    </button>
                </div>
                <div>
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail(
                            'large',
                            ['class' => 'h-[221px] object-cover rounded-2xl'] 
                        );
                    
                    } else { ?>
                        <img class="block h-[221px] lg:h-[450px] w-full object-cover rounded-2xl " src="https://images.pexels.com/photos/32946430/pexels-photo-32946430/free-photo-of-silhouette-of-person-on-a-vibrant-beach-sunset.jpeg" alt="" loading="lazy">
                    <?php } ?>
                </div>

                
            </div>
        <?php }
        ?>
    </section>

    <section class="bg-[var(--main-bg)]">
        <div id="post" class="bg-[var(--main-bg)] px-5 py-16 flex flex-col gap-y-5 text-left lg:justify-end lg:items-start max-w-[1280px] mx-auto">
            <?php the_content() ?>
        </div>
    </section>

    <section class="bg-[var(--footer-cta-bg)] text-white px-5 lg:px-20 py-16 lg:py-[112px] no-print">

            <div class="flex flex-col items-center justify-center text-center mx-auto max-w-[271px] md:max-w-[700px] lg:max-w-[100%] gap-y-5 p-8 lg:px-64 lg:py-20 border border-[var(--main-bg)] rounded-2xl">
              <h2 class="text-4xl lg:text-[52px] gilda leading-[120%]">Join Our Community Today!</h2> 
              <p class="lora leading-[160%] text-lg">Stay updated with our latest insights and tips for personal growth. Subscribe now!</p>

                <a href="" class="p-4 text-black transition-all bg-white border border-white rounded-xl hover:bg-transparent hover:text-white hover:scale-110">Join the Newsletter</a>

            </div>

    </section>

</main>

<?php get_footer() ?>