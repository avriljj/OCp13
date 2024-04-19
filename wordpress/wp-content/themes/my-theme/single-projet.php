<?php
get_header(); // Include the header template

if (have_posts()) :
    while (have_posts()) : the_post();
?>
<section class="single-projet-container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <a class="return-link" href="<?php echo home_url(); ?>">Home</a>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">



            <?php
$language_value = get_the_terms(get_the_ID(), 'language', true);

if (!empty($language_value)) {?>
    <div class="your-custom-container">
    <p>Languages:
    <?php
    
    foreach ($language_value as $lang) { ?>
        <a href="<?php echo esc_url(get_category_link($lang->term_id) ); ?>"><?php echo esc_html($lang->name); ?></a>
    <?php
       
    } ?>
</p>

    </div>
<?php } ?>




<?php
$cms_value = get_the_terms(get_the_ID(), 'cms', true);

if (!empty($cms_value)) {?>
    <div class="your-custom-container">
        <p>CMS :
            <?php foreach ($cms_value as $cms) { ?>
                <a href="<?php echo esc_url(get_category_link($cms->term_id)); ?>"><?php echo esc_html($cms->name); ?></a>
            <?php } ?>
        </p>
    </div>
<?php } ?>

                <?php
                the_content(); // Display the post content
                ?>
            </div>

            <?php
            if (has_post_thumbnail()) :
            ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('medium'); // Display the featured image in its original size ?>
                </div>
            <?php
            endif;
            ?>
        </article>
        <div class="footer">

        <p>TOUS DROITS RESERVES</p>

        </div>
</section>
<?php
    endwhile;
endif;

get_footer(); // Include the footer template
?>
