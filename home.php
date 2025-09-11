<?php get_header() ?>

<main class="flex flex-col w-full mx-auto bg-slate-50">

    <section class="flex flex-col items-center w-full px-4 py-10 text-center transition-all duration-100 md:py-20 bg-[var(--olive-light)]">
        <h1 class="pb-3 text-5xl font-bold md:text-6xl">Blog de <br class="block md:hidden" />Crecimiento Personal</h1>
        <p class="pt-2 text-lg italic font-extralight"><q>Cree en ti y haz que suceda en todas las cosas</q></p>
    </section>

    <!-- small viewport -->
     <section class="flex justify-center">
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