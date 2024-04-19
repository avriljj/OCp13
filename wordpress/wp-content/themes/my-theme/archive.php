<?php
get_header(); 
?>

<div class="archive-container">
    <main class="main-container-archive">
    <a class="return-link" href="<?php echo home_url(); ?>">Home</a>
    <div class="archive-content">
    <?php

$language_value = get_query_var('language');

$selected_category = $language_value ? $language_value : '';

// Create a custom query
$args = array(
    'post_type'      => 'projet',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'language',
            'field'    => 'name',
            'terms'    => $selected_category,
        ),
    ),
);

$query = new WP_Query($args);

// Check if there are posts
if ($query->have_posts()) : ?>

    <header class="page-header">
        <h1 class="page-title"><?php single_cat_title('Language: ', true); ?></h1>
    </header>

    <div class="posts-content">

    <?php
    while ($query->have_posts()) :
        $query->the_post();
        get_template_part('template-parts/content', 'projet_block');
        // Your loop content here
    endwhile;

    // Restore original post data
    wp_reset_postdata();

    the_posts_pagination();

else :
    // If no content, include the "No posts found" template
    get_template_part('template-parts/content', 'none');

endif;
?>
    </div>
   


    <?php
    
$cms_value = get_query_var('cms');

$selected_category = $cms_value ? $cms_value : '';

//echo $selected_category;
        // Second Query for 'cms' category
        $cms_args = array(
            'post_type'      => 'projet',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'cms',
                    'field'    => 'name',
                    'terms'    => $selected_category, 
                ),
            ),
        );

        $cms_query = new WP_Query($cms_args);

        // Check if there are posts in 'cms' category
        if ($cms_query->have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php single_cat_title('CMS: ', true); ?></h1>
            </header>

            <div class="posts-content-cms">

                <?php
                while ($cms_query->have_posts()) :
                    $cms_query->the_post();
                    get_template_part('template-parts/content', 'projet_block');
                    // Your loop content here
                endwhile;

                // Restore original post data
                wp_reset_postdata();

                the_posts_pagination();

                ?>

            </div>

        <?php endif; ?>

        </div>
    </main><!-- #main -->
</div>

<?php
get_footer(); // Include footer.php
?>
