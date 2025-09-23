<?php
$posts_page_id = get_option('page_for_posts');
$posts_page_url = $posts_page_id ? get_permalink($posts_page_id) : '';
?>

<?php get_header(); ?>

<main class="bg-white">
    <section class="flex flex-col items-center justify-center min-h-[60vh] px-6 py-24 text-center bg-[var(--main-bg)]">
        <span class="text-xs tracking-[0.35em] uppercase lora-medium text-[var(--olive)]">Error 404</span>
        <h1 class="pt-4 text-4xl leading-[110%] lg:text-6xl gilda">Página no encontrada</h1>
        <p class="max-w-[520px] pt-6 text-base leading-[160%] text-black/70 lora lg:text-lg">
            Lo sentimos, pero no pudimos encontrar la página que estabas buscando. Puedes volver al inicio, explorar el blog o realizar una búsqueda.
        </p>
        <div class="flex flex-col gap-4 pt-10 sm:flex-row sm:gap-6">
            <a class="px-8 py-3 text-sm text-white transition-all duration-150 rounded-full lora-medium bg-[var(--olive)] hover:bg-[var(--olive-dark)]" href="<?php echo esc_url(home_url('/')); ?>">Volver al inicio</a>
            <?php if (! empty($posts_page_url)) : ?>
                <a class="px-8 py-3 text-sm transition-all duration-150 border rounded-full lora-medium border-[var(--olive)] text-[var(--olive)] hover:bg-[var(--olive)] hover:text-white" href="<?php echo esc_url($posts_page_url); ?>">Ir al blog</a>
            <?php endif; ?>
        </div>
    </section>

    <section class="px-6 py-20 lg:px-20">
        <div class="max-w-[1100px] mx-auto">
            <h2 class="text-3xl text-center lg:text-left lg:text-4xl gilda">Explora nuestras últimas publicaciones</h2>
            <p class="max-w-[540px] pt-4 mx-auto text-base leading-[160%] text-black/70 lora lg:mx-0">
                Quizá estos artículos recientes puedan ayudarte a encontrar lo que buscas.
            </p>
            <?php
            $recent_posts = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'no_found_rows'  => true,
            ]);

            if ($recent_posts->have_posts()) :
                ?>
                <div class="grid gap-10 pt-12 lg:grid-cols-3">
                    <?php
                    while ($recent_posts->have_posts()) :
                        $recent_posts->the_post();
                        ?>
                        <article class="flex flex-col h-full p-6 transition-all duration-150 bg-white border rounded-3xl shadow-sm border-[var(--main-bg)] hover:-translate-y-1 hover:shadow-lg">
                            <?php if (has_post_thumbnail()) : ?>
                                <a class="block overflow-hidden rounded-2xl" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', [
                                        'class' => 'object-cover w-full h-52',
                                        'loading' => 'lazy',
                                    ]); ?>
                                </a>
                            <?php endif; ?>
                            <div class="flex flex-col flex-1">
                                <h3 class="pt-6 text-2xl leading-[130%] gilda">
                                    <a class="transition-colors hover:text-[var(--olive)]" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="pt-4 text-base leading-[160%] text-black/70 lora">
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '...')); ?>
                                </p>
                                <div class="pt-6 mt-auto">
                                    <a class="inline-flex items-center gap-2 text-sm transition-colors lora-medium text-[var(--olive)] hover:text-[var(--olive-dark)]" href="<?php the_permalink(); ?>">
                                        Leer el artículo
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12l-7.5 7.5M21 12H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p class="pt-10 text-base text-center lora text-black/70">No se encontraron publicaciones recientes en este momento.</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
