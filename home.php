<?php get_header() ?>

<main class="flex flex-col w-full mx-auto bg-slate-50">

    <section class="flex flex-col w-full px-5 py-16 transition-all duration-100 lg:py-28 lg:px-20 lg:max-w-[768px]">
        <p class="lora-semibold">Inspiration</p>
        <h1 class="text-5xl lg:text-7xl gilda leading-[120%] pt-3 lg:pt-4">Empower Your Journey</h1>
        <!-- <p class="pb-3 italic text-md font-extralight gilda"><q>Cree en ti y haz que suceda en todas las cosas</q></p> -->
        <p class="pt-2 lg:pt-6 lora lg:text-lg leading-[160%]">Explore articles on personal growth, success stories, and tips for enhancing your mental wellness.</p>
    </section>

    <!-- small viewport -->
     <section class="flex flex-col justify-center bg-[var(--main-bg)] px-5">
        <div class="pt-16 pb-12 text-center lg:pb-20 lg:pt-28">
            <p class="lora-semibold">Blog</p>
            <h2 class="gilda leading-[120%] text-4xl lg:text-[52px] pt-3 lg:pt-4">Latest Insight and Tips</h2>
            <p class="lora lg:text-lg leading-[160%] pt-5 lg:pt-6">Explore our collection of personal growth articles.</p>
        </div>
         <div 
             class="flex flex-col items-center w-full max-w-[1200px] transition-all duration-100  md:items-stretch md:flex-row md:flex-wrap md:gap-x-10 md:justify-center">
             <?php 
                 while(have_posts()) {
                     the_post(); ?>
                     <!-- inner container -->
                     <div class="flex flex-col xs:w-[300px] sm:w-[330px] lg:w-[350px] items-stretch my-8 rounded-lg bg-white shadow-md mx-auto">
     
                         <!-- Mobile link container -->
                         <a class="cursor-pointer" href="<?php the_permalink() ?>">
                             <!-- image -->
                             <?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail(
                                     'large',
                                     ['class' => 'md:w-[350px] h-[221px] object-cover rounded-t-lg'] 
                                 );
                             
                             } else { ?>
                                 <img class="block h-[221px] w-full object-cover rounded-t-lg " src="https://images.pexels.com/photos/32946430/pexels-photo-32946430/free-photo-of-silhouette-of-person-on-a-vibrant-beach-sunset.jpeg" alt="" loading="lazy">
                             <?php } ?>
     
                             <div class="flex flex-col w-full px-5 pt-2 mx-auto text-left gap-y-2">
                                <!-- Date Published -->
                                <p class="pt-2 text-sm font-light text-gray-400 lora-semibold"><?php echo get_the_date(); ?></p>
                                 <!-- title -->
                                 <h5 class="text-2xl font-semibold hover:text-[var(--olive)] gilda"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                                 <!-- excerpt -->
                                 <p class="flex flex-wrap text-sm text-gray-700 text-wrap lora"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '…' ) ); ?></p>
                                 <!-- tag -->
                                 <?php 
                                     $tags = get_the_tags();
                                     if ( $tags ) : ?>
                                         
                                         <?php foreach($tags as $tag) : ?> 
                                             <div class="my-2">
                                                 <span class="px-2.5 py-1 text-sm font-light text-gray-600 border rounded-full lora">
                                                     <?php echo esc_html($tag->name); ?> 
                                                 </span>
                                             </div>
                                         <?php endforeach; ?>
                                         
                                <?php endif; ?>    
     
                                     <div class="flex items-center pb-10 gap-x-2 hover:text-[var(--olive)]">
                                         <a class="text-lg underline lora" href="<?php the_permalink() ?>">Read Article</a>
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
     </section>
</main>




<?php get_footer()?>