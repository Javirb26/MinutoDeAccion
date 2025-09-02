<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?> 
</head>
<nav>

<?php
wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'main-nav',
    'fallback_cb'    => false, // don’t fall back to a pages list
]);
?>

</nav>
<body>
    
