

<a href="<?php the_permalink(); ?>" class="projet-card-link">
    <div class="projet-card">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> Image">
        <?php endif; ?>
        <div class="projet-card-overlay">
        <div class="categories-on-overlay">
        <?php
// Replace 'your_custom_post_type' and 'your_custom_taxonomy' with your actual post type and taxonomy names
$post_id = get_the_ID();
$taxonomy = 'language';

// Get the terms (categories) for the custom taxonomy associated with the current post
$terms = get_the_terms($post_id, $taxonomy);

// Check if there are terms
if ($terms && !is_wp_error($terms)) {
    
    foreach ($terms as $term) {
        // Output or manipulate the term data as needed
        echo '<div>' . esc_html($term->name) . '</div>';
    }
    
}
$post_id = get_the_ID();
$taxonomy = 'cms';

// Get the terms (categories) for the custom taxonomy associated with the current post
$terms = get_the_terms($post_id, $taxonomy);

// Check if there are terms
if ($terms && !is_wp_error($terms)) {
    
    foreach ($terms as $term) {
        // Output or manipulate the term data as needed
        echo '<div>' . esc_html($term->name) . '</div>';
    }
    
}
?>
        </div>

            <h3><?php the_title(); ?></h3>

            <div></div>
        </div>
        
    </div>
</a>
