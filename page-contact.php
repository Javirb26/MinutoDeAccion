<?php get_header() ?>

<main>

    <section class="flex flex-col w-full px-5 py-16 transition-all duration-100 lg:py-28 lg:px-20 max-w-[1440px] mx-auto">
        <div class="lg:max-w-[768px]">
            <h1 class="text-5xl lg:text-7xl gilda leading-[120%] pt-3 lg:pt-4">¡Conectemos</h1>
            <!-- <p class="pb-3 italic text-md font-extralight gilda"><q>Cree en ti y haz que suceda en todas las cosas</q></p> -->
            <p class="pt-2 lg:pt-6 lora lg:text-lg leading-[160%]">¡Nos encantaría saber de ti! Contáctanos si tienes alguna pregunta o comentario.</p>
        </div>
    </section>

    <section class="bg-[var(--main-bg)] px-20">

        <div class="max-w-[1280px] mx-auto lg:flex lg:justify-between gap-x-20 py-16 ">
            <div class="mx-auto max-w-[600px]">
                
                <a class="lora-semibold" href="">Conectar</a>
                <h2 class="pt-3 lg:pt-4 text-4xl lg:text-[52px] gilda">Contáctanos</h2>
                <p class="pt-5 lg:pt-6 lora lg:text-lg">¡Nos encantaría saber de ti!</p>

                <?php echo do_shortcode('[contact-form-7 id="d341fe9" title="Contact form 1"]'); ?>
                
            </div>
            <div 
                class="hidden lg:flex w-[600px] h-[700px] rounded-2xl object-cover bg-center bg-[url('http://minutodeaccion.local/wp-content/uploads/2025/09/contact.webp')]">
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
     <section class="px-10 py-20 bg-white">
        <div class="pt-16 pb-12 text-center max-w-[768px] mx-auto ">
            <h2 class="text-4xl lg:text-5xl gilda ">FAQs</h2>
            <p class="lora lg:text-lg leading-[160%] pt-5">
                Encuentra respuestas a preguntas comunes sobre nuestro blog y como navegar por ella.
            </p>
        </div>
        <div class="pb-12 max-w-[768px] mx-auto">
            <details @click="faqOpen1 = !faqOpen1" class="pb-5 border-t cursor-pointer">
                <summary class="flex items-center justify-between py-5 list-none lora-bold">De que se trata este blog? 
                    <span>
                        <svg :class="faqOpen1 ? 'rotate-180 transition-all ease-in-out' : 'rotate-0 transition-all ease-in-out' " xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                            <path d="M7.85449 9.06348C7.72943 9.06348 7.62922 9.02564 7.52246 8.91895L0.929688 2.32715C0.820517 2.21793 0.785182 2.11923 0.785156 2.00293C0.785156 1.88662 0.820578 1.78792 0.929688 1.67871C1.03373 1.57466 1.1362 1.53427 1.27051 1.53418C1.40505 1.53418 1.50814 1.57454 1.6123 1.67871L1.61328 1.67969L7.38379 7.41797L7.85547 7.88672L14.0967 1.64551C14.2003 1.54185 14.289 1.51269 14.3965 1.5166C14.5222 1.5212 14.6304 1.56397 14.7451 1.67871C14.8493 1.78287 14.8896 1.885 14.8896 2.01953C14.8896 2.15404 14.8493 2.2562 14.7451 2.36035L8.18652 8.91895C8.07977 9.0257 7.97953 9.06344 7.85449 9.06348Z" fill="#040709" stroke="#040709" stroke-width="1.33333"/>
                        </svg>
                    </span>
                </summary>
                <p class="lora">
                Este blog se centra en el crecimiento personal. Ofrecemos ideas, consejos y recursos para ayudarte en tu camino. Nuestro objetivo es empoderarte para que tomes acción y hagas cambios positivos en tu vida.
                </p>
            </details>
            <details @click="faqOpen2 = !faqOpen2" class="pb-5 border-t cursor-pointer">
                <summary class="flex items-center justify-between py-5 list-none lora-bold">Como navegar? 
                    <span>
                        <svg :class="faqOpen2 ? 'rotate-180 transition-all ease-in-out' : 'rotate-0 transition-all ease-in-out' " xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                            <path d="M7.85449 9.06348C7.72943 9.06348 7.62922 9.02564 7.52246 8.91895L0.929688 2.32715C0.820517 2.21793 0.785182 2.11923 0.785156 2.00293C0.785156 1.88662 0.820578 1.78792 0.929688 1.67871C1.03373 1.57466 1.1362 1.53427 1.27051 1.53418C1.40505 1.53418 1.50814 1.57454 1.6123 1.67871L1.61328 1.67969L7.38379 7.41797L7.85547 7.88672L14.0967 1.64551C14.2003 1.54185 14.289 1.51269 14.3965 1.5166C14.5222 1.5212 14.6304 1.56397 14.7451 1.67871C14.8493 1.78287 14.8896 1.885 14.8896 2.01953C14.8896 2.15404 14.8493 2.2562 14.7451 2.36035L8.18652 8.91895C8.07977 9.0257 7.97953 9.06344 7.85449 9.06348Z" fill="#040709" stroke="#040709" stroke-width="1.33333"/>
                        </svg>
                    </span>
                </summary>
                <p class="lora">
                Navegar nuestro blog es sencillo! Use el menu para aceder paginas diferents.
                </p>
            </details>
            <details @click="faqOpen3 = !faqOpen3" class="pb-5 border-t border-b cursor-pointer">
                <summary class="flex items-center justify-between py-5 list-none lora-bold">Como suscribir? 
                    <span>
                        <svg :class="faqOpen3 ? 'rotate-180 transition-all ease-in-out' : 'rotate-0 transition-all ease-in-out' " xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
                            <path d="M7.85449 9.06348C7.72943 9.06348 7.62922 9.02564 7.52246 8.91895L0.929688 2.32715C0.820517 2.21793 0.785182 2.11923 0.785156 2.00293C0.785156 1.88662 0.820578 1.78792 0.929688 1.67871C1.03373 1.57466 1.1362 1.53427 1.27051 1.53418C1.40505 1.53418 1.50814 1.57454 1.6123 1.67871L1.61328 1.67969L7.38379 7.41797L7.85547 7.88672L14.0967 1.64551C14.2003 1.54185 14.289 1.51269 14.3965 1.5166C14.5222 1.5212 14.6304 1.56397 14.7451 1.67871C14.8493 1.78287 14.8896 1.885 14.8896 2.01953C14.8896 2.15404 14.8493 2.2562 14.7451 2.36035L8.18652 8.91895C8.07977 9.0257 7.97953 9.06344 7.85449 9.06348Z" fill="#040709" stroke="#040709" stroke-width="1.33333"/>
                        </svg>
                    </span>
                </summary>
                <p class="lora">
                To subscribe, simply enter your email address in the subscription box located on our homepage. You will receive updates and notifications about new posts directly in your inbox. It's a great way to stay informed!
                Para suscribir simplemente pincha el boton en la navegacion titulada: 'Suscribete al boletín'. Adentro de esta pagina puedes llenar el formulario con tu nombre y correo electronico y luego entragues el formulario pinchando el boton de entrega. Ya suscrito puedes recibir articulos y consejos mas rapidos que otros entre muchos otros beneficios.
                </p>
            </details>
            
        </div>
        <div class="pb-16 mx-auto text-center">
            <h4 class="pb-3 text-2xl lg:text-4xl gilda">¿Aún tienes preguntas</h4>
            <p class="lora lg:text-lg leading-[160%] pb-6">¡Estamos aquí para ayudarte!</p>
            <a class="lora-medium bg-[var(--footer-cta-bg)] hover:bg-white transition-all text-white hover:text-black hover:border hover:border-[var(--footer-cta-bg)] px-6 py-3 rounded-xl" href="/contact/">Contáctanos</a>
        </div>
     </section>
</main>

<?php get_footer()?>