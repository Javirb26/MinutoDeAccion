<?php get_header() ?>

<main class="flex justify-center items-center w-[80%] bg-slate-200 mx-auto rounded-md">
<?php 
    while(have_posts()) {
        the_post(); ?>
        <div class="">
            <h2 class="text-xl font-semibold"><?php the_title() ?></h2>
            <div><?php the_content() ?></div>
        </div>
<?php }
?>
</main>

<?php get_footer() ?>