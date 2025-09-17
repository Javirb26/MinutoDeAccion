<?php get_header() ?>

<main>
    <form class="flex flex-col max-w-[600px] mx-auto" action="">
        <label for="name">name</label>
        <input class="border rounded-full" type="text" id="name" name="name">
        <label for="email">Email</label>
        <input class="border rounded-full" type="text" id="email" name="email">
        <label for="message">Message</label>
        <textarea class="border rounded-full" name="message" id="message"></textarea>
        <button>submit</button>
    </form>
</main>

<?php get_footer()?>