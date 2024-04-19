<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/6c1bf69b8d.js" crossorigin="anonymous"></script>
    <!-- Include Parallax.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">	
    <title>CV Jin ZHAO</title>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
if ( ! ( is_singular('projet') || is_archive() ) ) {
    // Display the navigation menu only if not on a single project or archive page
    ?>
<div class="hamburger">
    <i class="fa-solid fa-bars open-icon toggle-icon"></i>
    <i class="fa-solid fa-xmark close-icon toggle-icon"></i>
</div>
<div class="nav-container">
<div class="nav">
<div id="logo"><?php the_custom_logo(); ?></div>
</div>


    <div class="nav-menu">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary', // Assuming 'primary' is the menu location.
        ) );
        ?>
    </div>
    <?php
}
?>


</div>
