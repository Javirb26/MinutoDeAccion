<?php get_header() ?>

<main class="flex flex-col w-full mx-auto bg-slate-50">

    <section class="flex flex-col w-full px-5 py-16 transition-all duration-100 md:py-20">
        <p class="pb-3 lora-semibold leading-[150%]">Inspiration</p>
        <h1 class="text-5xl md:text-6xl gilda leading-[120%]">Empower Your Journey</h1>
        <!-- <p class="pb-3 italic text-md font-extralight gilda"><q>Cree en ti y haz que suceda en todas las cosas</q></p> -->
        <p class="pt-2 lora">Explore articles on personal growth, success stories, and tips for enhancing your mental wellness.</p>
    </section>

    <!-- small viewport -->
     <section class="flex justify-center bg-[var(--main-bg)]">
         <div 
             class="flex flex-col items-center w-full max-w-[1200px] transition-all duration-100  md:items-stretch md:flex-row md:flex-wrap md:gap-x-10 md:justify-center">
             <?php 
                 while(have_posts()) {
                     the_post(); ?>
                     <!-- inner container -->
                     <div class="flex flex-col w-[300px] md:w-[350px] items-center my-8 rounded-lg bg-white shadow-md">
     
                         <!-- Mobile link container -->
                         <a class="cursor-pointer" href="<?php the_permalink() ?>">
                             <!-- image -->
                             <?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail(
                                     'large',
                                     ['class' => 'w-[300px] md:w-[350px] h-[200px] object-cover rounded-t-lg'] 
                                 );
                             
                             } else { ?>
                                 <img class="'w-[300px] md:w-[350px] h-[200px] object-cover rounded-t-lg" src="https://images.pexels.com/photos/32946430/pexels-photo-32946430/free-photo-of-silhouette-of-person-on-a-vibrant-beach-sunset.jpeg" alt="">
                             <?php } ?>
     
                             <div class="flex gap-y-2 flex-col text-left w-[280px] pt-2">
                                <p class="pt-2 text-sm font-light text-gray-400"><?php echo get_the_date(); ?></p>
                                 <!-- title -->
                                 <h3 class="text-2xl font-semibold hover:text-[var(--olive)]"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                 <!-- excerpt -->
                                 <p class="flex flex-wrap text-sm text-gray-700 text-wrap"><?php echo esc_html( get_the_excerpt() ); ?></p>
                                 <!-- tag -->
                                 <?php 
                                     $tags = get_the_tags();
                                     if ( $tags ) : ?>
                                         
                                         <?php foreach($tags as $tag) : ?> 
                                             <div class="my-2">
                                                 <span class="px-2.5 py-1 text-sm font-light text-gray-600 border rounded-full">
                                                     <?php echo esc_html($tag->name); ?> 
                                                 </span>
                                             </div>
                                         <?php endforeach; ?>
                                         
                                <?php endif; ?>    
     
                                     <div class="flex items-center pb-10 gap-x-2 hover:text-[var(--olive)]">
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
     </section>
</main>




<?php get_footer()?>