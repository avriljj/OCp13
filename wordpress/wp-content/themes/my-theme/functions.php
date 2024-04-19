<?php
// charger scripts
function charger_script() {
   
    // Définissez le chemin vers votre script
    $script_url = get_template_directory_uri() . '/js/scripts.js';
 
    // Générez une version unique en utilisant la date actuelle pour éviter la mise en cache
    $version = date('YmdHis');
 
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    // Enregistrez le script avec la version
    wp_enqueue_script('custom-script', $script_url, array('jquery'), $version, true);
    wp_enqueue_script('jquery');
 
    // Assurez-vous que jQuery est en mode non-conflict
    wp_script_add_data('jquery', 'group', 1);
    wp_script_add_data('jquery', 'version', $version);
 }
 
 add_action('wp_enqueue_scripts', 'charger_script');

 //menu
register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'mytheme' ),
        'footer'  => esc_html__( 'Footer menu', 'mytheme' ),
    )
);


//logo
function logo_setup() {
add_theme_support('custom-logo', array(
'height'      => 100,
'width'       => 200,
'flex-height' => true,
'flex-width'  => true,
));
}
add_action('after_setup_theme', 'logo_setup');

//filter categories//

// categories filter language //
function get_unique_post_categories() {
    $cats = array();
    $args = array(
        'post_type' => 'projet',
        'post_status' => 'publish',
        'posts_per_page' => -1, // Get all posts
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_cats = get_the_terms(get_the_ID(), 'language');

            if ($post_cats && !is_wp_error($post_cats)) {
                foreach ($post_cats as $cat) {
                    if (!in_array($cat->name, $cats)) {
                        $cats[] = $cat->name;
                    }
                }
            }
        }
    }

    // Reset post data
    wp_reset_postdata();

    return $cats;
}

// categories filte cms //
function get_unique_post_cms() {
    $cats = array();
    $args = array(
        'post_type' => 'projet',
        'post_status' => 'publish',
        'posts_per_page' => -1, // Get all posts
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $post_cats = get_the_terms(get_the_ID(), 'cms');

            if ($post_cats && !is_wp_error($post_cats)) {
                foreach ($post_cats as $cat) {
                    if (!in_array($cat->name, $cats)) {
                        $cats[] = $cat->name;
                    }
                }
            }
        }
    }

    // Reset post data
    wp_reset_postdata();

    return $cats;
}

//filters by cat //

function filter_posts_by_category() {
    $selected_category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

    $args = array(
        'post_type'      => 'projet',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'tax_query'      => array(
            array(
                'taxonomy' => 'language', // Assuming 'language' is the correct taxonomy
                'field'    => 'name',
                'terms'    => $selected_category,
            ),
        ),
    );

    $query = new WP_Query($args);

   
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            
            get_template_part('template-parts/content', 'projet_block');
            
        }
    } else {
        echo 'No posts found in category';
    }
    
    wp_die(); // Always include this at the end to terminate the script properly
}

add_action('wp_ajax_filter_posts_by_category', 'filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'filter_posts_by_category');


//filters by cms //

function filter_posts_by_cms() {
    $selected_category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

    $args = array(
        'post_type'      => 'projet',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'tax_query'      => array(
            array(
                'taxonomy' => 'cms', // Assuming 'language' is the correct taxonomy
                'field'    => 'name',
                'terms'    => $selected_category,
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
        
            get_template_part('template-parts/content', 'projet_block');
        }
    } else {
        echo 'No posts found in category';
    }

    wp_die(); // Always include this at the end to terminate the script properly
}

add_action('wp_ajax_filter_posts_by_cms', 'filter_posts_by_cms');
add_action('wp_ajax_nopriv_filter_posts_by_cms', 'filter_posts_by_cms');



//filters load all //
function loadAll(){
    $argsImages = array(  
        'post_type' => 'projet',
        'post_status' => 'publish',
        'posts_per_page' => -1,  
    );
    
    $loop = new WP_Query( $argsImages ); 
        
    while ( $loop->have_posts() ) : $loop->the_post();
    
    get_template_part('template-parts/content', 'projet_block');

    endwhile;
    wp_reset_postdata();
    die();
}

add_action('wp_ajax_loadAll', 'loadAll');
add_action('wp_ajax_nopriv_loadAll', 'loadAll');


//archive 
/*In practical terms, this code allows you to use the 'cms' query variable in your WordPress URLs,
 and you can then retrieve its value using functions like get_query_var('cms'). 
 For example, if your URL is example.com/?cms=wordpress,
 you can retrieve the value 'wordpress' using get_query_var('cms').
 */
function custom_query_vars($vars) {
    $vars[] = 'language';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars');

function custom_query_vars_cms($varsCms) {
    $varsCms[] = 'cms';
    return $varsCms;
}
add_filter('query_vars', 'custom_query_vars_cms');


