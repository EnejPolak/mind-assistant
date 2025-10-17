<!-- Navbar Component -->
<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/mindLogo.png" alt="Mind Assistant Logo" class="mind-logo">
            <span class="logo-text">Mind Assistant</span>
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
            'container' => false,
            'fallback_cb' => 'mind_assistant_fallback_menu'
        ));
        ?>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

