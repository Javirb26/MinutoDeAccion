<?php
// Get the ID of the posts page
$posts_page_id = get_option('page_for_posts');

// Get the permalink for that page
$posts_page_url = get_permalink($posts_page_id);
?>

<?php get_header() ?>
<main class="z-0"> 

    <!-- Hero Section -->
    <section id="hero" class="relative h-[750px] md:h-[600px] bg-center bg-cover bg-[url('https://images.pexels.com/photos/32946430/pexels-photo-32946430/free-photo-of-silhouette-of-person-on-a-vibrant-beach-sunset.jpeg')] ">
        <div class="flex flex-col justify-start pt-24 px-4 items-center text-center h-full text-[var(--olive-md)]">
            <h1 class="pb-2 text-6xl lg:text-8xl">Minuto de Accion</h1> 
            <p class="text-xl font-medium">Blog de crecimiento personal</p>
            <div class="pt-6">
                <a href="<?php echo esc_url($posts_page_url); ?>" class="bg-white w-full h-10 px-8 py-2.5 rounded-full">Check out our posts</a>
            </div>
        </div>
    </section>

    <!-- What we can do Section -->
    <section class="px-10 pt-20">
        <div class="text-center">
            <h2 class="pb-5 text-4xl font-semibold"> Un Minuto Puede <span class="text-[var(--olive)]">cambiar tu vida.</span> </h2>
            <p class="text-base font-bold">En Minuto de Accion te damos ideas simples y motivacion diaria <br/> para que conviertas tus metas en pasos concretos.</p>
        </div>

        <div class="flex items-center justify-between mx-auto max-w-[1400px] pt-16">
            <div class="flex flex-col items-center justify-center text-center gap-y-4 max-w-[400px]">

                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_11_147)">
                        <path d="M16.3792 31.6201L27.1762 27.1748L31.6215 16.3778L20.8245 20.8231L16.3792 31.6201ZM24 21.7493C25.242 21.7493 26.25 22.7573 26.25 23.9993C26.25 25.2413 25.242 26.2493 24 26.2493C22.758 26.2493 21.75 25.2413 21.75 23.9993C21.75 22.7573 22.758 21.7493 24 21.7493Z" fill="#231F20"/>
                        <path d="M24 24.7493C24.4142 24.7493 24.75 24.4135 24.75 23.9993C24.75 23.5851 24.4142 23.2493 24 23.2493C23.5858 23.2493 23.25 23.5851 23.25 23.9993C23.25 24.4135 23.5858 24.7493 24 24.7493Z" fill="#231F20"/>
                        <path d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2547 10.7452 48 24 48C37.2547 48 48 37.2547 48 24C48 10.7452 37.2547 0 24 0ZM24 44.9993C12.402 44.9993 3 35.5973 3 23.9993C3 12.4013 12.402 2.99925 24 2.99925C35.598 2.99925 45 12.4013 45 23.9993C45 35.5973 35.598 44.9993 24 44.9993Z" fill="#231F20"/>
                        <path d="M39 23.9992C39 23.5844 39.3352 23.2492 39.75 23.2492H43.4812C43.299 18.4304 41.37 14.0602 38.307 10.7534L37.2592 11.8012C36.966 12.0952 36.492 12.0944 36.1987 11.8012C35.9055 11.5079 35.9055 11.0339 36.1987 10.7407L37.2465 9.69294C33.939 6.62994 29.5687 4.70094 24.75 4.51794V8.24919C24.75 8.66394 24.4147 8.99919 24 8.99919C23.5852 8.99919 23.25 8.66394 23.25 8.24919V4.51794C18.4312 4.70019 14.061 6.62919 10.7542 9.69219L11.802 10.7399C12.096 11.0332 12.0952 11.5072 11.802 11.8004C11.5087 12.0937 11.0347 12.0937 10.7415 11.8004L9.69374 10.7527C6.63074 14.0594 4.70174 18.4297 4.51949 23.2484H8.24999C8.66474 23.2484 8.99999 23.5837 8.99999 23.9984C8.99999 24.4132 8.66474 24.7484 8.24999 24.7484H4.51874C4.70099 29.5672 6.62999 33.9374 9.69299 37.2442L10.7407 36.1964C11.034 35.9024 11.508 35.9032 11.8012 36.1964C12.0945 36.4897 12.0945 36.9637 11.8012 37.2569L10.7535 38.3047C14.061 41.3684 18.4312 43.2974 23.25 43.4804V39.7492C23.25 39.3344 23.5852 38.9992 24 38.9992C24.4147 38.9992 24.75 39.3344 24.75 39.7492V43.4804C29.5687 43.2982 33.939 41.3692 37.2457 38.3062L36.198 37.2584C35.904 36.9652 35.9047 36.4912 36.198 36.1979C36.4912 35.9047 36.9652 35.9047 37.2585 36.1979L38.3062 37.2457C41.3692 33.9389 43.2982 29.5687 43.4805 24.7499H39.75C39.3352 24.7492 39 24.4139 39 23.9992ZM33.6937 15.2849L28.4437 28.0349C28.3672 28.2194 28.2202 28.3664 28.0357 28.4429L15.2857 33.6929C15.1935 33.7312 15.096 33.7492 15 33.7492C14.805 33.7492 14.613 33.6727 14.4697 33.5294C14.256 33.3157 14.1915 32.9932 14.3062 32.7134L19.5562 19.9634C19.6327 19.7789 19.7797 19.6319 19.9642 19.5554L32.7142 14.3054C32.994 14.1914 33.3165 14.2552 33.5302 14.4689C33.744 14.6827 33.8085 15.0052 33.6937 15.2849Z" fill="#231F20"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_11_147">
                        <rect width="48" height="48" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>


                <h3 class="text-xl font-bold ">Claridad en tus metas</h3>
                <p class="text-base">Aprende a enfocarte en lo que realmente importa. Consejos prácticos para dejar la confusión atrás y avanzar con propósito.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center gap-y-4 max-w-[400px]">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.852 41.148C13.6108 42.6214 15.6937 43.657 17.93 44.17C18.144 44.24 18.288 43.96 18.144 43.82C13.354 39.25 15.986 34.304 17.93 32.074C19.316 30.482 21.29 27.86 21.146 24.344C21.146 23.992 21.506 23.71 21.79 23.922C24.508 25.328 26.366 28.422 26.866 30.952C27.654 30.18 27.94 28.984 27.94 27.93C27.94 27.578 28.368 27.296 28.726 27.578C31.3 29.898 35.732 37.772 28.582 43.958C28.44 44.1 28.582 44.382 28.726 44.312C30.894 43.7436 32.9329 42.7646 34.732 41.428C46.386 32.428 38.806 16.468 33.872 11.196C33.23 10.562 32.086 10.984 32.086 11.898C32.014 13.798 31.442 15.906 29.942 17.312C28.798 12.532 24.986 7.10197 19.552 4.42997C18.838 4.07797 17.98 4.63997 18.052 5.41397C18.192 11.954 13.926 16.118 10.208 21.532C6.91802 26.382 4.77402 35.312 11.852 41.148Z" fill="black"/>
                </svg>

                <h3 class="text-xl font-bold ">Insipraccion diaria</h3>
                <p>Un impulso cada día puede marcar la diferencia. Encuentra reflexiones breves que te animen a mantenerte en movimiento.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center gap-y-4 max-w-[400px]">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11_145)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4 14.4C22.4 6.4471 28.8471 0 36.8 0H48V11.2C48 19.1529 41.553 25.6 33.6 25.6H25.6V48H22.4V35.2H14.4C6.4471 35.2 0 28.7529 0 20.8V9.6H11.2C15.7236 9.6 19.7601 11.6859 22.4 14.9483V14.4ZM26.0687 19.6685L35.6688 10.0685L37.9315 12.3313L28.3315 21.9313L26.0687 19.6685ZM19.6687 31.5313L10.0687 21.9313L12.3315 19.6685L21.9315 29.2685L19.6687 31.5313Z" fill="black"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_11_145">
                    <rect width="48" height="48" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>

                <h3 class="text-xl font-bold ">Pequeños pasos, grandes cambios</h3>
                <p>No necesitas hacerlo todo hoy. Descubre cómo las acciones constantes y pequeñas construyen resultados extraordinarios.</p>
            </div>
        </div>
    </section>
  <!-- Possible Testimonial / CTA Section -->
    <section>

    </section>
</main>
<?php get_footer() ?>