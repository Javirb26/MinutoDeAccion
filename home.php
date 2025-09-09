<?php get_header() ?>

<main class="flex flex-col w-full px-4 mx-auto md:max-w-[1200px]">

    <section class="py-10 mx-auto text-center transition-all duration-100 md:py-20 md:text-left">
        <h1 class="pb-3 text-5xl font-bold md:text-6xl">Welcome to <br class="block md:hidden" />The Articles</h1>
        <p class="font-medium text-md">Here you’ll find reflections and ideas designed <br class="block md:hidden" /> to brighten <br class="hidden md:block" /> your day and give you <br class="block md:hidden" /> a little extra encouragement</p>
    </section>

    <!-- <div class="hidden mx-auto transition-all duration-100 md:flex-col gap-y-6">
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class="max-w-[700px] flex justify-center items-center flex-row border-b border-b-1 border-b-gray-300 pt-4 pb-7">
                    <a href="<?php the_permalink() ?>">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail(
                                'large',
                                ['class' => 'w-[250px] h-[150px] object-cover pr-7'] 
                            );
                        } ?>
                        <div class="flex flex-col">
                            
                            
                            <h3 class="text-2xl font-bold"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <p class="max-w-[200px] flex flex-wrap text-gray-700 text-wrap"><?php echo esc_html( get_the_excerpt() ); ?></p>
                            <?php 
                            $tags = get_the_tags();
                            if ( $tags ) : ?>
                                
                                <?php foreach($tags as $tag) : ?> 
                                    <div class="mt-2">
                                        <span class="px-2.5 py-1 text-sm font-light text-gray-600 border rounded-full">
                                            <?php echo esc_html($tag->name); ?> 
                                        </span>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>    

                            <?php if(has_post_thumbnail()) : ?>
                            <a class="pt-3 underline" href="<?php the_permalink() ?>">Read Article</a>
                            
                            <?php else : ?>
                                <a class="pt-2 underline" href="<?php the_permalink() ?>">Read Article</a>
                            <?php endif ; ?>
                        </div>
                    </a>
                </div>
        <?php }
        ?>
    </div> -->

    <!-- small viewport -->
    <div 
        class="flex flex-col items-center transition-all duration-100 md:justify-center md:items-stretch md:flex-row md:flex-wrap md:gap-x-6 lg:gap-x-10">
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <!-- inner container -->
                <div class="flex flex-col w-[300px] md:min-w-[200px] items-center px-3 py-3 mb-8 border rounded-lg border-gray-300 ">

                    <!-- Mobile link container -->
                    <a class="cursor-pointer" href="<?php the_permalink() ?>">
                        <!-- image -->
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail(
                                'large',
                                ['class' => 'w-[300px] h-[200px] object-cover rounded-lg'] 
                            );
                        
                        } else { ?>
                            <img class="w-[300px] h-[200px] object-cover rounded-lg" src="https://images.pexels.com/photos/32946430/pexels-photo-32946430/free-photo-of-silhouette-of-person-on-a-vibrant-beach-sunset.jpeg" alt="">
                        <?php } ?>

                        <div class="flex gap-y-2 flex-col text-left w-[280px]">
                            <!-- title -->
                            <h3 class="text-3xl font-bold hover:text-[var(--olive)]"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <!-- excerpt -->
                            <p class="flex flex-wrap text-gray-700 text-wrap"><?php echo esc_html( get_the_excerpt() ); ?></p>
                            <!-- tag -->
                            <?php 
                                $tags = get_the_tags();
                                if ( $tags ) : ?>
                                    
                                    <?php foreach($tags as $tag) : ?> 
                                        <div class="mt-2">
                                            <span class="px-2.5 py-1 text-sm font-light text-gray-600 border rounded-full">
                                                <?php echo esc_html($tag->name); ?> 
                                            </span>
                                        </div>
                                    <?php endforeach; ?>
                                    
                                <?php endif; ?>    

                                <div class="flex items-center pt-3 gap-x-2 hover:text-[var(--olive)]">
                                    <a class="text-lg underline" href="<?php the_permalink() ?>">Read Article</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3" />
                                    </svg>
                                </div>
                           
                        </div>
                    </a>
                </div>
        <?php }
        ?>
    </div>
</main>




<?php get_footer()?>