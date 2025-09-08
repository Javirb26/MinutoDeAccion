<?php
// Get the ID of the posts page
$posts_page_id = get_option('page_for_posts');

// Get the permalink for that page
$posts_page_url = get_permalink($posts_page_id);
?>

<?php get_header() ?>
<main class="z-0"> 

    <section id="hero" class="h-[750px] md:h-[800px] bg-center bg-cover bg-[url('https://images.pexels.com/photos/32946430/pexels-photo-32946430/free-photo-of-silhouette-of-person-on-a-vibrant-beach-sunset.jpeg')] ">
        <div class="flex flex-col justify-start pt-36 px-4 items-center text-center h-full text-[var(--olive-md)]">
            <h1 class="pb-2 text-6xl lg:text-8xl">Minuto de Accion</h1> 
            <p class="text-xl font-medium">Blog de crecimiento personal</p>
            <div class="pt-6">
                <a href="<?php echo esc_url($posts_page_url); ?>" class="bg-white w-full h-10 px-8 py-2.5 rounded-full">Check out our posts</a>
            </div>
        </div>
    </section>

</main>
<?php get_footer() ?>