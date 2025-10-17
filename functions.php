<?php
// WordPress functions.php for Mind Assistant theme

// Enqueue styles and scripts
function mind_assistant_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style('mind-assistant-style', get_stylesheet_uri(), array(), '1.0');
    
    // Enqueue additional CSS files
    wp_enqueue_style('mind-assistant-auth', get_template_directory_uri() . '/auth.css', array(), '1.0');
    wp_enqueue_style('mind-assistant-features', get_template_directory_uri() . '/features.css', array(), '1.0');
    wp_enqueue_style('mind-assistant-reflection', get_template_directory_uri() . '/reflection.css', array(), '1.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('mind-assistant-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap', array(), null);
    
    // Enqueue JavaScript files
    wp_enqueue_script('mind-assistant-main', get_template_directory_uri() . '/script.js', array(), '1.0', true);
    wp_enqueue_script('mind-assistant-reflection', get_template_directory_uri() . '/reflection.js', array(), '1.0', true);
    
    // Enqueue Spline viewer
    wp_enqueue_script('spline-viewer', 'https://unpkg.com/@splinetool/viewer@1.9.28/build/spline-viewer.js', array(), '1.9.28', true);
}
add_action('wp_enqueue_scripts', 'mind_assistant_enqueue_assets');

// Add theme support
function mind_assistant_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mind_assistant_theme_support');

// Register navigation menus
function mind_assistant_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mind-assistant'),
    ));
}
add_action('init', 'mind_assistant_register_menus');

// Custom rewrite rules for direct page access
function mind_assistant_add_rewrite_rules() {
    add_rewrite_rule('^signup/?$', 'index.php?mind_assistant_page=signup', 'top');
    add_rewrite_rule('^login/?$', 'index.php?mind_assistant_page=login', 'top');
    add_rewrite_rule('^reflection/?$', 'index.php?mind_assistant_page=reflection', 'top');
    add_rewrite_rule('^about/?$', 'index.php?mind_assistant_page=about', 'top');
    add_rewrite_rule('^features/?$', 'index.php?mind_assistant_page=features', 'top');
    add_rewrite_rule('^contact/?$', 'index.php?mind_assistant_page=contact', 'top');
    add_rewrite_rule('^future/?$', 'index.php?mind_assistant_page=future', 'top');
    add_rewrite_rule('^privacy/?$', 'index.php?mind_assistant_page=privacy', 'top');
    add_rewrite_rule('^terms/?$', 'index.php?mind_assistant_page=terms', 'top');
}
add_action('init', 'mind_assistant_add_rewrite_rules');

// Add query vars
function mind_assistant_add_query_vars($vars) {
    $vars[] = 'mind_assistant_page';
    return $vars;
}
add_filter('query_vars', 'mind_assistant_add_query_vars');

// Handle custom page templates
function mind_assistant_template_redirect() {
    $page = get_query_var('mind_assistant_page');
    if ($page) {
        $template_file = get_template_directory() . '/' . $page . '.php';
        if (file_exists($template_file)) {
            include $template_file;
            exit;
        }
    }
}
add_action('template_redirect', 'mind_assistant_template_redirect');

// Flush rewrite rules on theme activation
function mind_assistant_flush_rewrite_rules() {
    mind_assistant_add_rewrite_rules();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'mind_assistant_flush_rewrite_rules');

// Auto-create pages and configure WordPress on theme activation
function mind_assistant_theme_setup() {
    // Set permalinks to /%postname%/
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
    
    // Create pages if they don't exist
    $pages = array(
        'home' => array(
            'title' => 'Home',
            'content' => 'Welcome to Mind Assistant - Your digital companion for self-reflection, emotional awareness, and personal growth.',
            'template' => 'front-page'
        ),
        'about' => array(
            'title' => 'About',
            'content' => 'Learn more about Mind Assistant and our mission to help you find mental clarity.',
            'template' => 'about'
        ),
        'features' => array(
            'title' => 'Features',
            'content' => 'Discover the powerful features that help you on your journey to mental clarity.',
            'template' => 'features'
        ),
        'future' => array(
            'title' => 'Future',
            'content' => 'See what\'s coming next for Mind Assistant.',
            'template' => 'future'
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => 'Get in touch with us.',
            'template' => 'contact'
        ),
        'privacy' => array(
            'title' => 'Privacy Policy',
            'content' => 'Your privacy is important to us.',
            'template' => 'privacy'
        ),
        'terms' => array(
            'title' => 'Terms of Service',
            'content' => 'Terms and conditions for using Mind Assistant.',
            'template' => 'terms'
        )
    );
    
    foreach ($pages as $slug => $page_data) {
        $existing_page = get_page_by_path($slug);
        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_data['title'],
                'post_content' => $page_data['content'],
                'post_name' => $slug,
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1
            ));
            
            if ($page_id && $slug === 'home') {
                // Set Home as front page
                update_option('show_on_front', 'page');
                update_option('page_on_front', $page_id);
            }
        }
    }
    
    // Create navigation menu
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        
        // Add menu items
        $menu_items = array(
            array('title' => 'Home', 'url' => home_url('/')),
            array('title' => 'About', 'url' => home_url('/about/')),
            array('title' => 'Features', 'url' => home_url('/features/')),
            array('title' => 'Future', 'url' => home_url('/future/')),
            array('title' => 'Contact', 'url' => home_url('/contact/')),
            array('title' => 'Get Started', 'url' => home_url('/reflection/'))
        );
        
        foreach ($menu_items as $item) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $item['title'],
                'menu-item-url' => $item['url'],
                'menu-item-status' => 'publish'
            ));
        }
        
        // Assign menu to location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
    
    // Flush rewrite rules
    mind_assistant_add_rewrite_rules();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'mind_assistant_theme_setup');

// Ensure .htaccess has correct rewrite rules
function mind_assistant_ensure_htaccess() {
    $htaccess_file = ABSPATH . '.htaccess';
    $htaccess_content = file_get_contents($htaccess_file);
    
    $required_rules = '# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress';
    
    if (strpos($htaccess_content, '# BEGIN WordPress') === false) {
        file_put_contents($htaccess_file, $required_rules . "\n" . $htaccess_content);
    }
}
add_action('after_switch_theme', 'mind_assistant_ensure_htaccess');

// Fallback menu function
function mind_assistant_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url('/') . '" class="nav-link">Home</a></li>';
    echo '<li><a href="' . home_url('/about/') . '" class="nav-link">About</a></li>';
    echo '<li><a href="' . home_url('/features/') . '" class="nav-link">Features</a></li>';
    echo '<li><a href="' . home_url('/future/') . '" class="nav-link">Future</a></li>';
    echo '<li><a href="' . home_url('/contact/') . '" class="nav-link">Contact</a></li>';
    echo '<li><a href="' . home_url('/reflection/') . '" class="nav-link btn-primary">Get Started</a></li>';
    echo '</ul>';
}

// Add custom CSS for WordPress navigation menu
function mind_assistant_nav_menu_css() {
    ?>
    <style>
    .nav-menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 2rem;
    }
    
    .nav-menu li {
        margin: 0;
    }
    
    .nav-menu a {
        text-decoration: none;
        color: inherit;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .nav-menu a:hover {
        color: #7fa0b8;
    }
    
    .nav-menu .btn-primary {
        background: linear-gradient(135deg, #7fa0b8, #8db89d);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
    }
    
    .nav-menu .btn-primary:hover {
        background: linear-gradient(135deg, #6a8ba0, #7ba68a);
        color: white;
    }
    </style>
    <?php
}
add_action('wp_head', 'mind_assistant_nav_menu_css');
?>
