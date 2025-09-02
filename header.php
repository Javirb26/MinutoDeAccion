<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?> 
</head>

<body>
    
<!-- Desktop Navigation -->
<nav id="desktopNav" class="hidden md:block">

<?php
wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'main-nav',
    'fallback_cb'    => false, // don’t fall back to a pages list
]);
?>

</nav>

<!-- Mobile navigation -->
<nav id="mobileNav" class="block md:hidden">
    <div class="flex items-center justify-between bg-red-300 h-12 px-5">
        <div><h1>logo</h1></div>
        <div class="flex justify-end">
            <!-- Hamburger Menu -->
            <button onclick="toggleMenu()" id="open" class="text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" height="38px" viewBox="0 -960 960 960" width="38px" fill="#000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </button>

            <!-- Close Menu -->
            <button onclick="toggleMenu()" id="close" class="text-red-500 hidden">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
            
        </div>
    </div>
    

    <div>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'main-mobile-nav hidden h-screen z-10',
            'fallback_cb'    => false, // don’t fall back to a pages list
        ]);
        ?>
    </div>
</nav>
