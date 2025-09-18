<?php get_header() ?>

<main class="flex flex-col w-full mx-auto bg-slate-50">

    <section class="flex flex-col w-full px-5 py-16 transition-all duration-100 lg:py-28 lg:px-20 lg:max-w-[768px]">
        <p class="lora-semibold">Inspiration</p>
        <h1 class="text-5xl lg:text-7xl gilda leading-[120%] pt-3 lg:pt-4">Empower Your Journey</h1>
        <!-- <p class="pb-3 italic text-md font-extralight gilda"><q>Cree en ti y haz que suceda en todas las cosas</q></p> -->
        <p class="pt-2 lg:pt-6 lora lg:text-lg leading-[160%]">Explore articles on personal growth, success stories, and tips for enhancing your mental wellness.</p>
    </section>


     <section class="flex flex-col justify-center bg-[var(--main-bg)] px-5">
        <div class="pt-16 pb-12 text-center lg:pb-20 lg:pt-28">
            <p class="lora-semibold">Blog</p>
            <h2 class="gilda leading-[120%] text-4xl lg:text-[52px] pt-3 lg:pt-4">Latest Insight and Tips</h2>
            <p class="lora lg:text-lg leading-[160%] pt-5 lg:pt-6">Explore our collection of personal growth articles.</p>
        </div>
         <div 
             class="flex flex-col items-center w-full max-w-[1280px] transition-all duration-100  md:items-stretch md:flex-row md:flex-wrap md:gap-x-2 md:justify-center mx-auto mb-28">
             <?php 
                $all_posts = new WP_Query([
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                ]);
                $count = 0;
                 while($all_posts -> have_posts()) {
                     $all_posts->the_post(); 
                     $count++;
                     $hidden_class = $count > 3 ? 'hidden' : '';?>
                     <!-- inner container -->
                     <div class="flex flex-col xs:w-[300px] sm:w-[330px] lg:w-[405px] items-stretch my-8 rounded-lg bg-white shadow-md mx-auto card <?php echo $hidden_class; ?>">
     
                         <!-- Mobile link container -->
                         <a class="cursor-pointer" href="<?php the_permalink() ?>">
                             <!-- image -->
                             <?php if ( has_post_thumbnail() ) {
                                 the_post_thumbnail(
                                     'large',
                                     ['class' => 'h-[221px] object-cover rounded-t-lg'] 
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
             <?php } wp_reset_postdata();
             ?>
             
         </div>
         <button @click="click = !click":class="click ? 'hidden' : 'block' " id="view-all" class="px-6 py-3 border border-[var(--footer-cta-bg)] rounded-xl bg-white hover:text-white hover:bg-[var(--footer-cta-bg)] transition-all mb-16 lg:mb-28 max-w-[107px] mx-auto">View all</button>
     </section>
     <!-- FAQ Section -->
     <section class="px-10 bg-white">
        <div class="pt-16 pb-12 text-center max-w-[768px] mx-auto ">
            <h2 class="text-4xl lg:text-5xl gilda ">FAQs</h2>
            <p class="lora lg:text-lg leading-[160%] pt-5">Find answers to common questions about our blog and how to navigate it effectively.</p>
        </div>
        <div class="pb-12 max-w-[768px] mx-auto">
            <details @click="faqOpen1 = !faqOpen1" class="pb-5 border-t cursor-pointer">
                <summary class="flex items-center justify-between py-5 list-none lora-bold">What is this blog? 
                    <span>
                        <svg :class="faqOpen1 ? 'rotate-180 transition-all ease-in-out' : 'rotate-0 transition-all ease-in-out' " xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                            <path d="M7.85449 9.06348C7.72943 9.06348 7.62922 9.02564 7.52246 8.91895L0.929688 2.32715C0.820517 2.21793 0.785182 2.11923 0.785156 2.00293C0.785156 1.88662 0.820578 1.78792 0.929688 1.67871C1.03373 1.57466 1.1362 1.53427 1.27051 1.53418C1.40505 1.53418 1.50814 1.57454 1.6123 1.67871L1.61328 1.67969L7.38379 7.41797L7.85547 7.88672L14.0967 1.64551C14.2003 1.54185 14.289 1.51269 14.3965 1.5166C14.5222 1.5212 14.6304 1.56397 14.7451 1.67871C14.8493 1.78287 14.8896 1.885 14.8896 2.01953C14.8896 2.15404 14.8493 2.2562 14.7451 2.36035L8.18652 8.91895C8.07977 9.0257 7.97953 9.06344 7.85449 9.06348Z" fill="#040709" stroke="#040709" stroke-width="1.33333"/>
                        </svg>
                    </span>
                </summary>
                <p class="lora">
                This blog focuses on personal growth and self-improvement. We provide insights, tips, and resources to help you on your journey. Our goal is to empower you to take action and make positive changes in your life.
                </p>
            </details>
            <details @click="faqOpen2 = !faqOpen2" class="pb-5 border-t cursor-pointer">
                <summary class="flex items-center justify-between py-5 list-none lora-bold">How to Navigate? 
                    <span>
                        <svg :class="faqOpen2 ? 'rotate-180 transition-all ease-in-out' : 'rotate-0 transition-all ease-in-out' " xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                            <path d="M7.85449 9.06348C7.72943 9.06348 7.62922 9.02564 7.52246 8.91895L0.929688 2.32715C0.820517 2.21793 0.785182 2.11923 0.785156 2.00293C0.785156 1.88662 0.820578 1.78792 0.929688 1.67871C1.03373 1.57466 1.1362 1.53427 1.27051 1.53418C1.40505 1.53418 1.50814 1.57454 1.6123 1.67871L1.61328 1.67969L7.38379 7.41797L7.85547 7.88672L14.0967 1.64551C14.2003 1.54185 14.289 1.51269 14.3965 1.5166C14.5222 1.5212 14.6304 1.56397 14.7451 1.67871C14.8493 1.78287 14.8896 1.885 14.8896 2.01953C14.8896 2.15404 14.8493 2.2562 14.7451 2.36035L8.18652 8.91895C8.07977 9.0257 7.97953 9.06344 7.85449 9.06348Z" fill="#040709" stroke="#040709" stroke-width="1.33333"/>
                        </svg>
                    </span>
                </summary>
                <p class="lora">
                Navigating our blog is simple! Use the menu to access different sections, including articles and resources. You can also use the search bar to find specific topics.
                </p>
            </details>
            <details @click="faqOpen3 = !faqOpen3" class="pb-5 border-t border-b cursor-pointer">
                <summary class="flex items-center justify-between py-5 list-none lora-bold">How to subscribe? 
                    <span>
                        <svg :class="faqOpen3 ? 'rotate-180 transition-all ease-in-out' : 'rotate-0 transition-all ease-in-out' " xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                            <path d="M7.85449 9.06348C7.72943 9.06348 7.62922 9.02564 7.52246 8.91895L0.929688 2.32715C0.820517 2.21793 0.785182 2.11923 0.785156 2.00293C0.785156 1.88662 0.820578 1.78792 0.929688 1.67871C1.03373 1.57466 1.1362 1.53427 1.27051 1.53418C1.40505 1.53418 1.50814 1.57454 1.6123 1.67871L1.61328 1.67969L7.38379 7.41797L7.85547 7.88672L14.0967 1.64551C14.2003 1.54185 14.289 1.51269 14.3965 1.5166C14.5222 1.5212 14.6304 1.56397 14.7451 1.67871C14.8493 1.78287 14.8896 1.885 14.8896 2.01953C14.8896 2.15404 14.8493 2.2562 14.7451 2.36035L8.18652 8.91895C8.07977 9.0257 7.97953 9.06344 7.85449 9.06348Z" fill="#040709" stroke="#040709" stroke-width="1.33333"/>
                        </svg>
                    </span>
                </summary>
                <p class="lora">
                To subscribe, simply enter your email address in the subscription box located on our homepage. You will receive updates and notifications about new posts directly in your inbox. It's a great way to stay informed!
                </p>
            </details>
            
        </div>
        <div class="pb-16 mx-auto text-center">
            <h4 class="pb-3 text-2xl lg:text-4xl gilda">Still have questions?</h4>
            <p class="lora lg:text-lg leading-[160%] pb-6">We're here to help!</p>
            <a class="lora-medium bg-[var(--footer-cta-bg)] hover:bg-white transition-all text-white hover:text-black hover:border hover:border-[var(--footer-cta-bg)] px-6 py-3 rounded-xl" href="#">Contact</a>
        </div>
     </section>
     <!-- CTA Section -->
     <section class="bg-[var(--footer-cta-bg)] text-white px-5 lg:px-20 py-16 lg:py-[112px]">

            <div class="flex flex-col items-center justify-center text-center mx-auto max-w-[271px] md:max-w-[700px] lg:max-w-[100%] gap-y-5 p-8 lg:px-64 lg:py-20 border border-[var(--main-bg)] rounded-2xl">
              <h2 class="text-4xl lg:text-[52px]  gilda leading-[120%]  ">Join Our Community Today!</h2> 
              <p class="lora leading-[160%] text-lg">Stay updated with our latest insights and tips for personal growth. Subscribe now!</p>

                <a href="" class="p-4 text-black transition-all bg-white border border-white rounded-xl hover:bg-transparent hover:text-white hover:scale-110">Join the Newsletter</a>

            </div>

    </section>
</main>




<?php get_footer()?>